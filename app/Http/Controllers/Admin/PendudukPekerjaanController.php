<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukPekerjaan;
use Illuminate\Http\Request;

class PendudukPekerjaanController extends Controller
{
    public function index()
    {
        // Urutkan dari jumlah terbanyak
        $pekerjaan = PendudukPekerjaan::orderBy('jumlah', 'desc')->get();
        return view('admin.pekerjaan.index', compact('pekerjaan'));
    }

    public function create()
    {
        return view('admin.pekerjaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pekerjaan' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        PendudukPekerjaan::create($request->all());

        return redirect()->route('pekerjaan.index')->with('success', 'Data pekerjaan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pekerjaan = PendudukPekerjaan::findOrFail($id);
        return view('admin.pekerjaan.edit', compact('pekerjaan'));
    }

    public function update(Request $request, $id)
    {
        $pekerjaan = PendudukPekerjaan::findOrFail($id);

        $request->validate([
            'nama_pekerjaan' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $pekerjaan->update($request->all());

        return redirect()->route('pekerjaan.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        PendudukPekerjaan::findOrFail($id)->delete();
        return redirect()->route('pekerjaan.index')->with('success', 'Data dihapus');
    }
}
