<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    protected ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100',
        ], [
            'gambar.required' => 'Gambar harus dipilih.',
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'gambar.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'gambar.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ]);

        $result = $this->imageService->storeWithThumbnail(
            $request->file('gambar'),
            'galeri',
            'galeri'
        );

        Galeri::create([
            'judul' => $request->judul,
            'gambar_thumbnail' => $result['thumbnail_path'],
            'gambar_master' => $result['master_path'],
            'deskripsi' => $request->deskripsi,
            'tanggal' => now(),
        ]);

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil diunggah!');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        $this->imageService->deleteFromModel($galeri, 'gambar_thumbnail', 'gambar_master');

        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil dihapus!');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:galeris,id',
        ]);

        $items = Galeri::whereIn('id', $request->ids)->get();

        foreach ($items as $item) {
            $this->imageService->deleteFromModel($item, 'gambar_thumbnail', 'gambar_master');
            $item->delete();
        }

        return redirect()->route('galeri.index')
            ->with('success', $items->count() . ' foto berhasil dihapus');
    }
}
