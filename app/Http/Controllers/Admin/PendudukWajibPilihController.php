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
            'kategori' => 'required',
            'jumlah' => 'required|numeric',
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
            'kategori' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $wajibpilih->update($request->all());

        return redirect()->route('wajibpilih.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        PendudukWajibPilih::findOrFail($id)->delete();
        return redirect()->route('wajibpilih.index')->with('success', 'Data dihapus');
    }
}
