<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukPendidikan;
use Illuminate\Http\Request;

class PendudukPendidikanController extends Controller
{
    public function index()
    {
        // Kita ambil semua data
        $pendidikan = PendudukPendidikan::all();
        return view('admin.pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        return view('admin.pendidikan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tingkat_pendidikan' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        PendudukPendidikan::create($request->all());

        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pendidikan = PendudukPendidikan::findOrFail($id);
        return view('admin.pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, $id)
    {
        $pendidikan = PendudukPendidikan::findOrFail($id);

        $request->validate([
            'tingkat_pendidikan' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $pendidikan->update($request->all());

        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        PendudukPendidikan::findOrFail($id)->delete();
        return redirect()->route('pendidikan.index')->with('success', 'Data dihapus');
    }
}
