<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use App\Services\ImageService;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    protected ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $products = Umkm::latest()->get();
        return view('admin.umkm.index', compact('products'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'penjual' => 'required',
            'no_hp' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100',
        ], [
            'gambar.required' => 'Gambar produk harus dipilih.',
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'gambar.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'gambar.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ]);

        $result = $this->imageService->storeWithThumbnail(
            $request->file('gambar'),
            'umkm',
            'umkm'
        );

        Umkm::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'penjual' => $request->penjual,
            'no_hp' => $request->no_hp,
            'deskripsi' => $request->deskripsi,
            'gambar_thumbnail' => $result['thumbnail_path'],
            'gambar_master' => $result['master_path'],
        ]);

        return redirect()->route('umkm.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $product = Umkm::findOrFail($id);
        return view('admin.umkm.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Umkm::findOrFail($id);

        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100',
        ], [
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'gambar.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'gambar.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            $this->imageService->deleteFromModel($product, 'gambar_thumbnail', 'gambar_master');

            $result = $this->imageService->storeWithThumbnail(
                $request->file('gambar'),
                'umkm',
                'umkm'
            );

            $data['gambar_thumbnail'] = $result['thumbnail_path'];
            $data['gambar_master'] = $result['master_path'];
        }

        $product->update($data);

        return redirect()->route('umkm.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        $product = Umkm::findOrFail($id);

        $this->imageService->deleteFromModel($product, 'gambar_thumbnail', 'gambar_master');

        $product->delete();

        return redirect()->route('umkm.index')->with('success', 'Produk dihapus');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:umkms,id',
        ]);

        $items = Umkm::whereIn('id', $request->ids)->get();

        foreach ($items as $item) {
            $this->imageService->deleteFromModel($item, 'gambar_thumbnail', 'gambar_master');
            $item->delete();
        }

        return redirect()->route('umkm.index')
            ->with('success', $items->count() . ' produk berhasil dihapus');
    }
}
