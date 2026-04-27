<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukKawin;
use Illuminate\Http\Request;

class PendudukKawinController extends Controller
{
    public function index()
    {
        $kawin = PendudukKawin::all();
        return view('admin.kawin.index', compact('kawin'));
    }

    public function create()
    {
        return view('admin.kawin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        PendudukKawin::create($request->all());

        return redirect()->route('kawin.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kawin = PendudukKawin::findOrFail($id);
        return view('admin.kawin.edit', compact('kawin'));
    }

    public function update(Request $request, $id)
    {
        $kawin = PendudukKawin::findOrFail($id);

        $request->validate([
            'status' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $kawin->update($request->all());

        return redirect()->route('kawin.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        PendudukKawin::findOrFail($id)->delete();
        return redirect()->route('kawin.index')->with('success', 'Data dihapus');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:penduduk_kawins,id',
        ]);

        $count = PendudukKawin::whereIn('id', $request->ids)->delete();

        return redirect()->route('kawin.index')
            ->with('success', $count . ' data status kawin berhasil dihapus');
    }
}
