<?php

namespace App\Services;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageService
{
    private ImageManager $imageManager;

    public function __construct()
    {
        $this->imageManager = new ImageManager(new Driver());
    }

    /**
     * Store image with Master & Thumbnail strategy
     *
     * @param UploadedFile $file
     * @param string $directory (galeri, berita, umkm, wisata, bansos)
     * @param string $type (same as directory for sizing)
     * @return array {master_path, thumbnail_path, url, name, size_info}
     */
    public function storeWithThumbnail($file, $directory, $type)
    {
        try {
            // Validate file
            $this->validateFile($file);

            // Generate unique filename
            $filename = $this->generateFilename($file);
            $masterPath = "master/{$directory}/{$filename}";
            $thumbnailPath = "{$directory}/{$filename}";

            // Process image (EXIF orientation auto-handled by Intervention v3)
            $image = $this->imageManager->read($file->getRealPath());

            // Save Master (original dimensions, high quality)
            $this->saveMaster($image, $masterPath);

            // Read file again for thumbnail (Intervention v3 doesn't have clone())
            $thumbnailImage = $this->imageManager->read($file->getRealPath());

            // Save Thumbnail (optimized for web)
            $this->saveThumbnail($thumbnailImage, $thumbnailPath, $type);

            // Get size info
            $sizeInfo = $this->getSizeInfo($masterPath, $thumbnailPath);

            return [
                'master_path' => $masterPath,
                'thumbnail_path' => $thumbnailPath,
                'url' => Storage::url($thumbnailPath),
                'name' => $filename,
                'size_info' => $sizeInfo,
            ];
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Save master file (high quality, private storage)
     */
    private function saveMaster($image, $path)
    {
        $quality = 85; // 85% quality to save space while maintaining quality
        $encoded = $image->toJpeg(quality: $quality);
        Storage::disk('private')->put($path, $encoded->toString());
    }

    /**
     * Save thumbnail (optimized, public storage)
     */
    private function saveThumbnail($image, $path, $type)
    {
        $dimensions = $this->getDimensions($type);

        // Resize & optimize (scaleDown prevents upscaling small images)
        $image->scaleDown($dimensions['width'], $dimensions['height']);

        $quality = $dimensions['quality'];
        $encoded = $image->toJpeg(quality: $quality);
        Storage::disk('public')->put($path, $encoded->toString());
    }

    /**
     * Get dimensions by type
     */
    private function getDimensions($type)
    {
        return match ($type) {
            'galeri', 'wisata' => [
                'width' => 1200,
                'height' => 900,
                'quality' => 75,
            ],
            'berita' => [
                'width' => 800,
                'height' => 600,
                'quality' => 80,
            ],
            'umkm' => [
                'width' => 600,
                'height' => 600,
                'quality' => 75,
            ],
            'bansos' => [
                'width' => 800,
                'height' => 600,
                'quality' => 75,
            ],
            default => [
                'width' => 800,
                'height' => 600,
                'quality' => 75,
            ],
        };
    }

    /**
     * Generate unique filename
     */
    private function generateFilename($file)
    {
        $extension = 'jpg'; // Always convert to jpg for consistency
        return Str::random(20) . '.' . $extension;
    }

    /**
     * Validate uploaded file
     */
    public function validateFile($file)
    {
        $maxSize = 64 * 1024 * 1024; // 64 MB

        if ($file->getSize() > $maxSize) {
            throw new \Exception('Ukuran file terlalu besar! Maksimal 64 MB.');
        }

        $validMimes = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
        if (!in_array($file->getMimeType(), $validMimes)) {
            throw new \Exception('Format file tidak didukung. Gunakan JPEG, PNG, atau WebP.');
        }

        // Check dimensions
        $imageInfo = @getimagesize($file->getRealPath());
        if ($imageInfo === false) {
            throw new \Exception('File bukan gambar yang valid.');
        }

        [$width, $height] = $imageInfo;
        if ($width < 100 || $height < 100) {
            throw new \Exception('Ukuran gambar minimal 100x100 pixel.');
        }

        $aspectRatio = $width / $height;
        if ($aspectRatio < 0.5 || $aspectRatio > 2) {
            throw new \Exception('Proporsi gambar tidak sesuai (rasio 0.5:2 hingga 2:1).');
        }
    }

    /**
     * Get validation rules for form request
     */
    public static function validationRules($required = true)
    {
        $rule = $required ? 'required' : 'nullable';
        return [
            'image' => "{$rule}|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100",
        ];
    }

    /**
     * Get custom validation messages
     */
    public static function validationMessages($fieldName = 'Gambar')
    {
        return [
            'image.required' => "{$fieldName} harus dipilih.",
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'image.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'image.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ];
    }

    /**
     * Delete both master and thumbnail
     */
    public function delete($masterPath, $thumbnailPath)
    {
        try {
            if ($masterPath && Storage::disk('private')->exists($masterPath)) {
                Storage::disk('private')->delete($masterPath);
            }
            if ($thumbnailPath && Storage::disk('public')->exists($thumbnailPath)) {
                Storage::disk('public')->delete($thumbnailPath);
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Delete by model (helper for controllers)
     */
    public function deleteFromModel($model, $thumbnailField, $masterField)
    {
        $this->delete($model->$masterField, $model->$thumbnailField);
    }

    /**
     * Get master file path for download
     */
    public function getMasterPath($path)
    {
        return Storage::disk('private')->path($path);
    }

    /**
     * Get size info for analytics
     */
    public function getSizeInfo($masterPath, $thumbnailPath)
    {
        $masterSize = ($masterPath && Storage::disk('private')->exists($masterPath))
            ? Storage::disk('private')->size($masterPath)
            : 0;

        $thumbnailSize = ($thumbnailPath && Storage::disk('public')->exists($thumbnailPath))
            ? Storage::disk('public')->size($thumbnailPath)
            : 0;

        $savings = $masterSize > 0
            ? round(((($masterSize - $thumbnailSize) / $masterSize) * 100), 2)
            : 0;

        return [
            'master_bytes' => $masterSize,
            'thumbnail_bytes' => $thumbnailSize,
            'savings_percent' => $savings,
            'master_mb' => round($masterSize / 1024 / 1024, 2),
            'thumbnail_mb' => round($thumbnailSize / 1024 / 1024, 2),
        ];
    }
}
