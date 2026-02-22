<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stunting;
use Illuminate\Http\Request;

class StuntingController extends Controller
{
    // 1. Menampilkan Daftar Statistik Per Tahun
    public function index()
    {
        // Urutkan berdasarkan tahun terbaru
        $stunting = Stunting::orderBy('tahun', 'desc')->paginate(10);
        return view('admin.stunting.index', compact('stunting'));
    }

    // 2. Form Tambah/Update Data
    public function create()
    {
        return view('admin.stunting.create');
    }

    // 3. Simpan Data (Gunakan updateOrCreate agar tidak duplikat tahun)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun'            => 'required|numeric|digits:4',
            'keluarga_sasaran' => 'required|numeric',
            'berisiko'         => 'required|numeric',
            'baduta'           => 'required|numeric',
            'balita'           => 'required|numeric',
            'pus'              => 'required|numeric',
            'pus_hamil'        => 'required|numeric',
        ]);

        // Jika tahun sudah ada, dia akan update. Jika belum, dia akan buat baru.
        Stunting::updateOrCreate(
            ['tahun' => $request->tahun],
            $validated
        );

        return redirect()->route('stunting.index')->with('success', 'Data statistik tahun ' . $request->tahun . ' berhasil disimpan ⏺️');
    }

    // 4. Form Edit
    public function edit($id)
    {
        $stunting = Stunting::findOrFail($id);
        return view('admin.stunting.edit', compact('stunting'));
    }

    // 5. Hapus Data
    public function destroy($id)
    {
        Stunting::findOrFail($id)->delete();
        return redirect()->route('stunting.index')->with('success', 'Data statistik telah dihapus 📂');
    }
}
