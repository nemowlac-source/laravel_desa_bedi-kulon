<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Potensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PotensiController extends Controller
{
    public function index()
    {
        $potensis = Potensi::latest()->get();
        return view('admin.potensi.index', compact('potensis'));
    }

    public function create()
    {
        return view('admin.potensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        $path = $request->file('gambar')->store('potensi', 'public');

        Potensi::create([
            'judul' => $request->judul,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
        ]);

        return redirect()->route('potensi.index')->with('success', 'Potensi desa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $potensi = Potensi::findOrFail($id);
        return view('admin.potensi.edit', compact('potensi'));
    }

    public function update(Request $request, $id)
    {
        $potensi = Potensi::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            if (Storage::disk('public')->exists($potensi->gambar)) {
                Storage::disk('public')->delete($potensi->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('potensi', 'public');
        }

        $potensi->update($data);

        return redirect()->route('potensi.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $potensi = Potensi::findOrFail($id);

        if (Storage::disk('public')->exists($potensi->gambar)) {
            Storage::disk('public')->delete($potensi->gambar);
        }

        $potensi->delete();

        return redirect()->route('potensi.index')->with('success', 'Data dihapus!');
    }
}
