<?php

namespace App\Http\Controllers;

use App\Models\Penduduk; // <--- Import Model Penduduk
use App\Models\PendudukUsia;
use App\Models\PendudukPendidikan;
use App\Models\PendudukPekerjaan;
use App\Models\PendudukWajibPilih;
use App\Models\PendudukKawin;
use App\Models\PendudukAgama;

class InfografisController extends Controller
{
    public function index()
    {
        // ... (Kode Penduduk & APBD sebelumnya tetap ada) ...
        $total_laki = Penduduk::sum('laki_laki');
        $total_perempuan = Penduduk::sum('perempuan');
        $total_penduduk = $total_laki + $total_perempuan;
        $total_kk = Penduduk::sum('kk');

        // --- LOGIKA PIRAMIDA ---
        $usia_data = PendudukUsia::all();

        // 1. Siapkan Data Chart (Array)
        $categories = $usia_data->pluck('kelompok_umur');
        $data_laki = $usia_data->pluck('laki_laki');
        $data_perempuan = $usia_data->pluck('perempuan');

        // 2. Hitung Narasi (Tertinggi & Terendah)
        // Simpan total sum ke dalam variabel agar tidak dipanggil berkali-kali
        $sum_laki = $usia_data->sum('laki_laki');
        $sum_cewe = $usia_data->sum('perempuan');

        // Analisa Laki-laki
        $max_laki = $usia_data->sortByDesc('laki_laki')->first();
        $min_laki = $usia_data->sortBy('laki_laki')->first();

        // Analisa Perempuan
        $max_cewe = $usia_data->sortByDesc('perempuan')->first();
        $min_cewe = $usia_data->sortBy('perempuan')->first();

        // Helper hitung persentase (DENGAN PENANGANAN ERROR)
        // Cek apakah $max_laki ada (tidak null) DAN $sum_laki lebih dari 0 untuk menghindari Division by Zero
        $persen_max_laki = ($max_laki && $sum_laki > 0) ? ($max_laki->laki_laki / $sum_laki) * 100 : 0;
        $persen_min_laki = ($min_laki && $sum_laki > 0) ? ($min_laki->laki_laki / $sum_laki) * 100 : 0;

        $persen_max_cewe = ($max_cewe && $sum_cewe > 0) ? ($max_cewe->perempuan / $sum_cewe) * 100 : 0;
        $persen_min_cewe = ($min_cewe && $sum_cewe > 0) ? ($min_cewe->perempuan / $sum_cewe) * 100 : 0;

        // --- LOGIKA CHART DUSUN (BARU) ---
        $dusun_list = Penduduk::all(); // Mengambil semua data wilayah

        // Siapkan array untuk Chart.js
        $dusun_labels = $dusun_list->pluck('nama_wilayah');

        // Hitung total jiwa (L+P) per dusun
        $dusun_totals = $dusun_list->map(function ($item) {
            return $item->laki_laki + $item->perempuan;
        });

        // Warna-warni untuk Chart (Siapkan 8 warna cantik)
        $chart_colors = [
            '#4e73df',
            '#1cc88a',
            '#36b9cc',
            '#f6c23e',
            '#e74a3b',
            '#858796',
            '#5a5c69',
            '#2c9faf'
        ];

        // --- LOGIKA CHART PENDIDIKAN (BARU) ---
        $pendidikan_data = PendudukPendidikan::all();
        $pendidikan_labels = $pendidikan_data->pluck('tingkat_pendidikan');
        $pendidikan_values = $pendidikan_data->pluck('jumlah');

        // --- LOGIKA PEKERJAAN (BARU) ---
        $pekerjaan_all = PendudukPekerjaan::orderBy('jumlah', 'desc')->get();
        $pekerjaan_top = $pekerjaan_all->take(6);
        $pekerjaan_sisanya = $pekerjaan_all->skip(6);

        // --- LOGIKA WAJIB PILIH (BARU) ---
        $wajib_pilih_data = PendudukWajibPilih::all();
        $wp_labels = $wajib_pilih_data->pluck('kategori');
        $wp_values = $wajib_pilih_data->pluck('jumlah');

        // --- LOGIKA PERKAWINAN (BARU) ---
        $kawin_data = PendudukKawin::all();

        // --- LOGIKA AGAMA (BARU) ---
        $agama_data = PendudukAgama::all();

        return view('frontend.infografis', compact(
            'total_penduduk',
            'total_laki',
            'total_perempuan',
            'total_kk',
            'categories',
            'data_laki',
            'data_perempuan',
            'max_laki',
            'min_laki',
            'persen_max_laki',
            'persen_min_laki',
            'max_cewe',
            'min_cewe',
            'persen_max_cewe',
            'persen_min_cewe',
            'dusun_list',
            'dusun_labels',
            'dusun_totals',
            'chart_colors',
            'pendidikan_labels',
            'pendidikan_values',
            'pekerjaan_top',
            'pekerjaan_sisanya',
            'wp_labels',
            'wp_values',
            'kawin_data',
            'agama_data'
        ));
    }
}
