<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SdgsDesa; // Pastikan nama Model sesuai

class SdgsController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil Tahun Terbaru atau dari Request
        $tahun_terbaru = SdgsDesa::max('tahun') ?? date('Y');
        $tahun_pilih = $request->get('tahun', $tahun_terbaru);

        // 2. Ambil List Tahun (Untuk Dropdown)
        $list_tahun = SdgsDesa::select('tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');

        // 3. AMBIL DATA 18 GOALS SESUAI TAHUN
        // Kita urutkan berdasarkan goal_number (1-18)
        $sdgs_items = SdgsDesa::where('tahun', $tahun_pilih)
            ->orderBy('goal_number', 'asc')
            ->get();

        // 4. HITUNG SKOR RATA-RATA DESA (CARD UTAMA)
        // Jika data kosong, skor 0. Jika ada, hitung rata-rata kolom 'score'
        $skor_desa = $sdgs_items->isEmpty() ? 0 : $sdgs_items->avg('score');

        return view('frontend.sdgs', compact(
            'sdgs_items',
            'skor_desa',
            'list_tahun',
            'tahun_pilih'
        ));
    }
}
