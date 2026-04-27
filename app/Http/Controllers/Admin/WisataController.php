<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Services\ImageService;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    protected ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $wisatas = Wisata::latest()->get();
        return view('admin.wisata.index', compact('wisatas'));
    }

    public function create()
    {
        return view('admin.wisata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wisata' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100',
        ], [
            'gambar.required' => 'Gambar wisata harus dipilih.',
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'gambar.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'gambar.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ]);

        $result = $this->imageService->storeWithThumbnail(
            $request->file('gambar'),
            'wisata',
            'wisata'
        );

        Wisata::create([
            'nama_wisata' => $request->nama_wisata,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'harga_tiket' => $request->harga_tiket,
            'jam_buka' => $request->jam_buka,
            'gambar_thumbnail' => $result['thumbnail_path'],
            'gambar_master' => $result['master_path'],
        ]);

        return redirect()->route('wisata.index')->with('success', 'Destinasi wisata berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('admin.wisata.edit', compact('wisata'));
    }

    public function update(Request $request, $id)
    {
        $wisata = Wisata::findOrFail($id);

        $request->validate([
            'nama_wisata' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100',
        ], [
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'gambar.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'gambar.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            $this->imageService->deleteFromModel($wisata, 'gambar_thumbnail', 'gambar_master');

            $result = $this->imageService->storeWithThumbnail(
                $request->file('gambar'),
                'wisata',
                'wisata'
            );

            $data['gambar_thumbnail'] = $result['thumbnail_path'];
            $data['gambar_master'] = $result['master_path'];
        }

        $wisata->update($data);

        return redirect()->route('wisata.index')->with('success', 'Data wisata diperbarui!');
    }

    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);

        $this->imageService->deleteFromModel($wisata, 'gambar_thumbnail', 'gambar_master');

        $wisata->delete();

        return redirect()->route('wisata.index')->with('success', 'Data dihapus!');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:wisatas,id',
        ]);

        $items = Wisata::whereIn('id', $request->ids)->get();

        foreach ($items as $item) {
            $this->imageService->deleteFromModel($item, 'gambar_thumbnail', 'gambar_master');
            $item->delete();
        }

        return redirect()->route('wisata.index')
            ->with('success', $items->count() . ' data wisata berhasil dihapus');
    }
}
