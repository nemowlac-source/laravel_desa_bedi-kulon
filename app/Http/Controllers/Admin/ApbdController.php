<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apbd;
use Illuminate\Http\Request;

class ApbdController extends Controller
{
    public function index()
    {
        // Urutkan berdasarkan Tahun terbaru, lalu Jenis
        $apbds = Apbd::orderBy('tahun', 'desc')->orderBy('jenis', 'asc')->get();
        return view('admin.apbd.index', compact('apbds'));
    }

    public function create()
    {
        return view('admin.apbd.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|numeric',
            'jenis' => 'required',
            'kategori' => 'required',
            'anggaran' => 'required|numeric',
            'realisasi' => 'required|numeric',
        ]);

        Apbd::create($request->all());

        return redirect()->route('apbd.index')->with('success', 'Data APBD berhasil ditambahkan');
    }

    public function edit($id)
    {
        $apbd = Apbd::findOrFail($id);
        return view('admin.apbd.edit', compact('apbd'));
    }

    public function update(Request $request, $id)
    {
        $apbd = Apbd::findOrFail($id);

        $request->validate([
            'tahun' => 'required|numeric',
            'jenis' => 'required',
            'kategori' => 'required',
            'anggaran' => 'required|numeric',
            'realisasi' => 'required|numeric',
        ]);

        $apbd->update($request->all());

        return redirect()->route('apbd.index')->with('success', 'Data APBD diperbarui');
    }

    public function destroy($id)
    {
        Apbd::findOrFail($id)->delete();
        return redirect()->route('apbd.index')->with('success', 'Data dihapus');
    }
}
