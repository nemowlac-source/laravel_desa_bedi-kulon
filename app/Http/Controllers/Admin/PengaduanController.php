<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        // Mengambil aduan terbaru ⏺️
        $pengaduans = Pengaduan::latest()->paginate(10);
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->update($request->all()); // Ini akan mengambil status & catatan_admin sekaligus

        return back()->with('success', 'Data berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();
        return back()->with('success', 'Aduan berhasil dihapus! 🛠️');
    }
}
