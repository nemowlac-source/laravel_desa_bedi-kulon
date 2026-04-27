<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
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
            'gambar' => 'required|image|max:2048',
        ]);

        $path = $request->file('gambar')->store('umkm', 'public');

        Umkm::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'penjual' => $request->penjual,
            'no_hp' => $request->no_hp,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
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
            'gambar' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            if (Storage::disk('public')->exists($product->gambar)) {
                Storage::disk('public')->delete($product->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('umkm', 'public');
        }

        $product->update($data);

        return redirect()->route('umkm.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        $product = Umkm::findOrFail($id);

        if (Storage::disk('public')->exists($product->gambar)) {
            Storage::disk('public')->delete($product->gambar);
        }

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
            if (Storage::disk('public')->exists($item->gambar)) {
                Storage::disk('public')->delete($item->gambar);
            }
            $item->delete();
        }

        return redirect()->route('umkm.index')
            ->with('success', $items->count() . ' produk berhasil dihapus');
    }
}
