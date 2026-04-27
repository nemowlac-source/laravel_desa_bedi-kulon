<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stunting;
use Illuminate\Http\Request;

class StuntingController extends Controller
{
    public function index()
    {
        $stuntings = Stunting::all();
        return view('admin.stunting.index', compact('stuntings'));
    }

    public function create()
    {
        return view('admin.stunting.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|numeric',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        Stunting::create($request->all());

        return redirect()->route('stunting.index')->with('success', 'Data stunting berhasil ditambahkan');
    }

    public function edit($id)
    {
        $stunting = Stunting::findOrFail($id);
        return view('admin.stunting.edit', compact('stunting'));
    }

    public function update(Request $request, $id)
    {
        $stunting = Stunting::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'nik' => 'required|numeric',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        $stunting->update($request->all());

        return redirect()->route('stunting.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Stunting::findOrFail($id)->delete();
        return redirect()->route('stunting.index')->with('success', 'Data dihapus');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:stuntings,id',
        ]);

        $count = Stunting::whereIn('id', $request->ids)->delete();

        return redirect()->route('stunting.index')
            ->with('success', $count . ' data stunting berhasil dihapus');
    }
}
