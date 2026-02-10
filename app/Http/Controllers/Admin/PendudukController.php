<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        // Urutkan berdasarkan wilayah
        $penduduks = Penduduk::orderBy('nama_wilayah', 'asc')->get();
        return view('admin.penduduk.index', compact('penduduks'));
    }

    public function create()
    {
        return view('admin.penduduk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wilayah' => 'required',
            'kk' => 'required|numeric',
            'laki_laki' => 'required|numeric',
            'perempuan' => 'required|numeric',
        ]);

        Penduduk::create($request->all());

        return redirect()->route('penduduk.index')->with('success', 'Data kependudukan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        return view('admin.penduduk.edit', compact('penduduk'));
    }

    public function update(Request $request, $id)
    {
        $penduduk = Penduduk::findOrFail($id);

        $request->validate([
            'nama_wilayah' => 'required',
            'kk' => 'required|numeric',
        ]);

        $penduduk->update($request->all());

        return redirect()->route('penduduk.index')->with('success', 'Data diperbarui');
    }

    public function destroy($id)
    {
        Penduduk::findOrFail($id)->delete();
        return redirect()->route('penduduk.index')->with('success', 'Data dihapus');
    }
}
