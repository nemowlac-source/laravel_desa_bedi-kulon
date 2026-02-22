<?php

namespace App\Http\Controllers;

use App\Models\Stunting;
use Illuminate\Http\Request;

class StuntingController extends Controller
{
    /**
     * Menampilkan grafik di halaman depan (Frontend)
     */
    public function index(Request $request)
    {
        // Mengambil tahun dari filter, default ke 2026
        $tahun_pilih = $request->get('tahun', 2026);

        // Mengambil satu baris data berdasarkan tahun
        $stunting = Stunting::where('tahun', $tahun_pilih)->first();
        return view('frontend.stunting', compact('stunting', 'tahun_pilih'));
    }

    /**
     * Menyimpan atau memperbarui data dari Admin
     */
    public function store(Request $request)
    {
        // Validasi input agar data yang masuk berupa angka
        $validated = $request->validate([
            'tahun'            => 'required|numeric',
            'keluarga_sasaran' => 'required|numeric',
            'berisiko'         => 'required|numeric',
            'baduta'           => 'required|numeric',
            'balita'           => 'required|numeric',
            'pus'              => 'required|numeric',
            'pus_hamil'        => 'required|numeric',
        ]);

        // Menggunakan updateOrCreate agar tidak ada data ganda di tahun yang sama
        Stunting::updateOrCreate(
            ['tahun' => $request->tahun], // Kunci pencarian
            $validated                    // Data yang diupdate/simpan
        );

        return redirect()->back()->with('success', 'Data Statistik Stunting berhasil diperbarui ⏺️');
    }
}
