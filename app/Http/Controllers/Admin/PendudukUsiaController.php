<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukUsia;
use Illuminate\Http\Request;

class PendudukUsiaController extends Controller
{
    public function index()
    {
        $usia = PendudukUsia::all();
        return view('admin.usia.index', compact('usia'));
    }

    public function create()
    {
        return view('admin.usia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelompok_umur' => 'required',
            'laki_laki' => 'required|numeric',
            'perempuan' => 'required|numeric',
        ]);

        PendudukUsia::create($request->all());

        return redirect()->route('usia.index')->with('success', 'Data kelompok umur berhasil ditambahkan');
    }

    public function edit($id)
    {
        $usia = PendudukUsia::findOrFail($id);
        return view('admin.usia.edit', compact('usia'));
    }

    public function update(Request $request, $id)
    {
        $usia = PendudukUsia::findOrFail($id);

        $request->validate([
            'kelompok_umur' => 'required',
            'laki_laki' => 'required|numeric',
            'perempuan' => 'required|numeric',
        ]);

        $usia->update($request->all());

        return redirect()->route('usia.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        PendudukUsia::findOrFail($id)->delete();
        return redirect()->route('usia.index')->with('success', 'Data dihapus');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:penduduk_usias,id',
        ]);

        $count = PendudukUsia::whereIn('id', $request->ids)->delete();

        return redirect()->route('usia.index')
            ->with('success', $count . ' data kelompok umur berhasil dihapus');
    }
}
