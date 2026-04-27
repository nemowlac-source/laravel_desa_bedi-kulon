<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::latest()->get();
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

        $request->validate([
            'status' => 'required|in:baru,diproses,selesai,ditolak',
            'catatan_admin' => 'nullable|string',
        ]);

        $pengaduan->update($request->all());

        return redirect()->route('admin.pengaduan.index')->with('success', 'Status pengaduan diperbarui');
    }

    public function destroy($id)
    {
        Pengaduan::findOrFail($id)->delete();
        return redirect()->route('admin.pengaduan.index')->with('success', 'Pengaduan dihapus');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:pengaduans,id',
        ]);

        $count = Pengaduan::whereIn('id', $request->ids)->delete();

        return redirect()->route('admin.pengaduan.index')
            ->with('success', $count . ' pengaduan berhasil dihapus');
    }
}
