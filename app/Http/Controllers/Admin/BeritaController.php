<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // PENTING: Untuk bikin slug
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        // Tampilkan berita terbaru di atas
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
            'gambar' => 'required|image|max:2048',
        ]);

        $path = $request->file('gambar')->store('berita', 'public');

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul), // Otomatis bikin slug
            'isi' => $request->isi,
            'gambar' => $path,
            'penulis' => 'Admin', // Bisa diganti auth()->user()->name
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
            'gambar' => 'nullable|image|max:2048',
        ]);

        $data = [
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul), // Update slug jika judul berubah
            'isi' => $request->isi,
        ];

        if ($request->hasFile('gambar')) {
            if (Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if (Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita dihapus!');
    }
}
