<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // 1. Tampilkan Daftar Foto
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    // 2. Tampilkan Form Upload
    public function create()
    {
        return view('admin.galeri.create');
    }

    // 3. Proses Simpan Foto ke Database & Folder
    public function store(Request $request)
    {
        // Validasi: Wajib ada gambar, maks 2MB
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload Gambar ke folder 'public/galeri'
        $imagePath = $request->file('gambar')->store('galeri', 'public');

        // Simpan ke Database
        Galeri::create([
            'judul' => $request->judul,
            'gambar' => $imagePath,
            'deskripsi' => $request->deskripsi,
            'tanggal' => now(),
        ]);

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil diunggah!');
    }

    // 4. Hapus Foto
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus file fisik di folder penyimpanan
        if (Storage::disk('public')->exists($galeri->gambar)) {
            Storage::disk('public')->delete($galeri->gambar);
        }

        // Hapus data di database
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil dihapus!');
    }
}
