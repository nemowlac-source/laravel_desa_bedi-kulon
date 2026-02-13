<?php

namespace App\Http\Controllers;

use App\Models\Stunting; // Pastikan model ini ada

class StuntingController extends Controller
{
    public function index()
    {
        // 1. STATISTIK UTAMA
        $total_balita = Stunting::count();

        // Hitung berdasarkan status
        $jml_normal = Stunting::where('status', 'Normal')->count();

        // Stunting biasanya gabungan "Stunting" (Pendek) & "Sangat Pendek"
        $jml_stunting = Stunting::whereIn('status', ['Stunting', 'Sangat Pendek'])->count();

        $jml_kurang_gizi = Stunting::where('status', 'Kurang Gizi')->count();

        // Hitung Persentase (Prevalensi Stunting)
        $persen_stunting = ($total_balita > 0) ? ($jml_stunting / $total_balita) * 100 : 0;


        // 2. DATA UNTUK GRAFIK (PIE CHART)
        // Kita kirim array angka ke view
        $chart_data = [
            $jml_normal,
            $jml_stunting,
            $jml_kurang_gizi
        ];


        // 3. DAFTAR BALITA TERBARU (Untuk Tabel Transparansi)
        // Kita ambil 10 data terakhir yang diukur
        $data_terbaru = Stunting::latest('tanggal_ukur')->paginate(10);

        // (Opsional) Menyamarkan nama anak demi privasi di frontend
        // Kita lakukan manipulasi string di View nanti


        return view('frontend.stunting', compact(
            'total_balita',
            'jml_normal',
            'jml_stunting',
            'jml_kurang_gizi',
            'persen_stunting',
            'chart_data',
            'data_terbaru'
        ));
    }
}
