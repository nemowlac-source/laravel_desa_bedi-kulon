<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stunting;
use Illuminate\Http\Request;

class StuntingController extends Controller
{
    public function index()
    {
        // Urutkan dari yang terbaru diukur
        $stunting = Stunting::latest('tanggal_ukur')->paginate(10);
        return view('admin.stunting.index', compact('stunting'));
    }

    public function create()
    {
        return view('admin.stunting.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_anak' => 'required',
            'jenis_kelamin' => 'required',
            'umur_bulan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'status' => 'required',
            'tanggal_ukur' => 'required|date',
        ]);

        Stunting::create($request->all());

        return redirect()->route('stunting.index')->with('success', 'Data balita berhasil ditambahkan');
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
            'nama_anak' => 'required',
            'umur_bulan' => 'required|numeric',
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
}
