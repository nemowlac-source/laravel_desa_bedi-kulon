<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
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
            'gambar' => 'required|image|max:2048',
        ]);

        $path = $request->file('gambar')->store('wisata', 'public');

        Wisata::create([
            'nama_wisata' => $request->nama_wisata,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'harga_tiket' => $request->harga_tiket,
            'jam_buka' => $request->jam_buka,
            'gambar' => $path,
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
            'gambar' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            if (Storage::disk('public')->exists($wisata->gambar)) {
                Storage::disk('public')->delete($wisata->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('wisata', 'public');
        }

        $wisata->update($data);

        return redirect()->route('wisata.index')->with('success', 'Data wisata diperbarui!');
    }

    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);

        if (Storage::disk('public')->exists($wisata->gambar)) {
            Storage::disk('public')->delete($wisata->gambar);
        }

        $wisata->delete();

        return redirect()->route('wisata.index')->with('success', 'Data dihapus!');
    }
}
