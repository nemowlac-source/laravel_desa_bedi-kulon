<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\PendudukUsia;
use App\Models\PendudukPendidikan;
use App\Models\PendudukPekerjaan;
use App\Models\PendudukWajibPilih;
use App\Models\PendudukKawin;
use App\Models\PendudukAgama;
use Illuminate\Support\Facades\Cache;

class InfografisController extends Controller
{
    /**
     * Cache duration in seconds (2 hours for infografis)
     */
    private const CACHE_TTL = 7200;
    public function index()
    {
        // Cache key untuk seluruh halaman infografis
        $cacheKey = 'infografis_data';

        if (Cache::has($cacheKey)) {
            return view('frontend.infografis', Cache::get($cacheKey));
        }

        // --- DATA PENDUDUK (Cache aggregate) ---
        $pendudukStats = Cache::remember('infografis_penduduk_stats', self::CACHE_TTL, function () {
            $total_laki = Penduduk::sum('laki_laki');
            $total_perempuan = Penduduk::sum('perempuan');
            return [
                'total_laki' => $total_laki,
                'total_perempuan' => $total_perempuan,
                'total_penduduk' => $total_laki + $total_perempuan,
                'total_kk' => Penduduk::sum('kk'),
            ];
        });

        extract($pendudukStats);

        // --- DATA USIA PIRAMIDA ---
        $usiaData = Cache::remember('infografis_usia', self::CACHE_TTL, function () {
            $usia_data = PendudukUsia::all();
            $sum_laki = $usia_data->sum('laki_laki');
            $sum_cewe = $usia_data->sum('perempuan');

            $max_laki = $usia_data->sortByDesc('laki_laki')->first();
            $min_laki = $usia_data->sortBy('laki_laki')->first();
            $max_cewe = $usia_data->sortByDesc('perempuan')->first();
            $min_cewe = $usia_data->sortBy('perempuan')->first();

            return [
                'categories' => $usia_data->pluck('kelompok_umur'),
                'data_laki' => $usia_data->pluck('laki_laki'),
                'data_perempuan' => $usia_data->pluck('perempuan'),
                'max_laki' => $max_laki,
                'min_laki' => $min_laki,
                'max_cewe' => $max_cewe,
                'min_cewe' => $min_cewe,
                'persen_max_laki' => ($max_laki && $sum_laki > 0) ? ($max_laki->laki_laki / $sum_laki) * 100 : 0,
                'persen_min_laki' => ($min_laki && $sum_laki > 0) ? ($min_laki->laki_laki / $sum_laki) * 100 : 0,
                'persen_max_cewe' => ($max_cewe && $sum_cewe > 0) ? ($max_cewe->perempuan / $sum_cewe) * 100 : 0,
                'persen_min_cewe' => ($min_cewe && $sum_cewe > 0) ? ($min_cewe->perempuan / $sum_cewe) * 100 : 0,
            ];
        });

        extract($usiaData);

        // --- DATA DUSUN ---
        $dusunData = Cache::remember('infografis_dusun', self::CACHE_TTL, function () {
            $dusun_list = Penduduk::all();
            return [
                'dusun_list' => $dusun_list,
                'dusun_labels' => $dusun_list->pluck('nama_wilayah'),
                'dusun_totals' => $dusun_list->map(fn($item) => $item->laki_laki + $item->perempuan),
            ];
        });

        extract($dusunData);

        // Warna chart (static)
        $chart_colors = ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796', '#5a5c69', '#2c9faf'];

        // --- DATA PENDIDIKAN ---
        $pendidikanData = Cache::remember('infografis_pendidikan', self::CACHE_TTL, function () {
            $data = PendudukPendidikan::all();
            return [
                'pendidikan_labels' => $data->pluck('tingkat_pendidikan'),
                'pendidikan_values' => $data->pluck('jumlah'),
            ];
        });

        extract($pendidikanData);

        // --- DATA PEKERJAAN ---
        $pekerjaanData = Cache::remember('infografis_pekerjaan', self::CACHE_TTL, function () {
            $all = PendudukPekerjaan::orderBy('jumlah', 'desc')->get();
            return [
                'pekerjaan_top' => $all->take(6),
                'pekerjaan_sisanya' => $all->skip(6),
            ];
        });

        extract($pekerjaanData);

        // --- DATA WAJIB PILIH ---
        $wajibPilihData = Cache::remember('infografis_wajib_pilih', self::CACHE_TTL, function () {
            $data = PendudukWajibPilih::orderBy('tahun')->get();
            return [
                'wp_labels' => $data->pluck('tahun'),
                'wp_values' => $data->pluck('jumlah_pemilih'),
            ];
        });

        extract($wajibPilihData);

        // --- DATA PERKAWINAN ---
        $kawin_data = Cache::remember('infografis_kawin', self::CACHE_TTL, function () {
            return PendudukKawin::all();
        });

        // --- DATA AGAMA ---
        $agama_data = Cache::remember('infografis_agama', self::CACHE_TTL, function () {
            return PendudukAgama::all();
        });

        $viewData = compact(
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
        );

        Cache::put($cacheKey, $viewData, self::CACHE_TTL);

        return view('frontend.infografis', $viewData);
    }
}
