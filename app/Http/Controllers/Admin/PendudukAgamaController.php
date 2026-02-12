<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukAgama;
use Illuminate\Http\Request;

class PendudukAgamaController extends Controller
{
    public function index()
    {
        $agamas = PendudukAgama::all();
        return view('admin.agama.index', compact('agamas'));
    }

    public function create()
    {
        return view('admin.agama.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'agama' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        PendudukAgama::create($request->all());

        return redirect()->route('agama.index')->with('success', 'Data agama berhasil ditambahkan');
    }

    public function edit($id)
    {
        $agama = PendudukAgama::findOrFail($id);
        return view('admin.agama.edit', compact('agama'));
    }

    public function update(Request $request, $id)
    {
        $agama = PendudukAgama::findOrFail($id);

        $request->validate([
            'agama' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $agama->update($request->all());

        return redirect()->route('agama.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        PendudukAgama::findOrFail($id)->delete();
        return redirect()->route('agama.index')->with('success', 'Data dihapus');
    }
}
