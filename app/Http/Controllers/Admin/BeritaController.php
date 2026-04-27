<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    protected ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100',
        ], [
            'gambar.required' => 'Gambar utama harus dipilih.',
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'gambar.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'gambar.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ]);

        $result = $this->imageService->storeWithThumbnail(
            $request->file('gambar'),
            'berita',
            'berita'
        );

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi' => $request->isi,
            'gambar_thumbnail' => $result['thumbnail_path'],
            'gambar_master' => $result['master_path'],
            'penulis' => 'Admin',
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diterbitkan!');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100',
        ], [
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'gambar.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'gambar.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ]);

        $data = [
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi' => $request->isi,
        ];

        if ($request->hasFile('gambar')) {
            $this->imageService->deleteFromModel($berita, 'gambar_thumbnail', 'gambar_master');

            $result = $this->imageService->storeWithThumbnail(
                $request->file('gambar'),
                'berita',
                'berita'
            );

            $data['gambar_thumbnail'] = $result['thumbnail_path'];
            $data['gambar_master'] = $result['master_path'];
        }

        $berita->update($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        $this->imageService->deleteFromModel($berita, 'gambar_thumbnail', 'gambar_master');

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita dihapus!');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:beritas,id',
        ]);

        $items = Berita::whereIn('id', $request->ids)->get();

        foreach ($items as $item) {
            $this->imageService->deleteFromModel($item, 'gambar_thumbnail', 'gambar_master');
            $item->delete();
        }

        return redirect()->route('berita.index')
            ->with('success', $items->count() . ' berita berhasil dihapus');
    }
}
