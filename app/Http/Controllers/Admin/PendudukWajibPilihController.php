<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukWajibPilih;
use Illuminate\Http\Request;

class PendudukWajibPilihController extends Controller
{
    public function index()
    {
        $wajibpilih = PendudukWajibPilih::all();
        return view('admin.wajibpilih.index', compact('wajibpilih'));
    }

    public function create()
    {
        return view('admin.wajibpilih.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
            'jumlah_pemilih' => 'required|numeric|min:0',
        ]);

        PendudukWajibPilih::create($request->all());

        return redirect()->route('wajibpilih.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $wajibpilih = PendudukWajibPilih::findOrFail($id);
        return view('admin.wajibpilih.edit', compact('wajibpilih'));
    }

    public function update(Request $request, $id)
    {
        $wajibpilih = PendudukWajibPilih::findOrFail($id);

        $request->validate([
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
            'jumlah_pemilih' => 'required|numeric|min:0',
        ]);

        $wajibpilih->update($request->all());

        return redirect()->route('wajibpilih.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        PendudukWajibPilih::findOrFail($id)->delete();
        return redirect()->route('wajibpilih.index')->with('success', 'Data dihapus');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:penduduk_wajib_pilihs,id',
        ]);

        $count = PendudukWajibPilih::whereIn('id', $request->ids)->delete();

        return redirect()->route('wajibpilih.index')
            ->with('success', $count . ' data pemilih berhasil dihapus');
    }
}
