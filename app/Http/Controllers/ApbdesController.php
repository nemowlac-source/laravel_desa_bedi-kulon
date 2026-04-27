<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apbd;
use Illuminate\Support\Facades\Cache;

class ApbdesController extends Controller
{
    /**
     * Cache duration in seconds (1 hour)
     */
    private const CACHE_TTL = 3600;

    /**
     * Menampilkan halaman Transparansi APBDes dengan caching
     */
    public function index(Request $request)
    {
        $tahun_pilih = $request->get('tahun');

        // Cache key berdasarkan tahun yang dipilih
        $cacheKey = 'apbdes_data_' . ($tahun_pilih ?: 'default');

        // Cek apakah data sudah ada di cache
        if (Cache::has($cacheKey)) {
            return view('frontend.apbdes', Cache::get($cacheKey));
        }

        // 1. Cek Tahun yang dipilih user
        $tahun_terbaru = Cache::remember('apbd_tahun_terbaru', self::CACHE_TTL, function () {
            return Apbd::max('tahun') ?? date('Y');
        });
        $tahun_pilih = $tahun_pilih ?? $tahun_terbaru;

        // 2. Ambil daftar tahun yang ada di database (untuk dropdown)
        $list_tahun = Cache::remember('apbd_list_tahun', self::CACHE_TTL, function () {
            return Apbd::select('tahun')
                ->distinct()
                ->orderBy('tahun', 'desc')
                ->pluck('tahun');
        });

        // 3. QUERY DATA BERDASARKAN TAHUN PILIHAN - dengan cache
        $cacheYearKey = 'apbd_year_' . $tahun_pilih;

        $apbdData = Cache::remember($cacheYearKey, self::CACHE_TTL, function () use ($tahun_pilih) {
            // A. PENDAPATAN
            $pendapatan = Apbd::where('tahun', $tahun_pilih)
                ->where('jenis', 'Pendapatan')
                ->sum('anggaran');

            // B. BELANJA
            $belanja = Apbd::where('tahun', $tahun_pilih)
                ->where('jenis', 'Belanja')
                ->sum('anggaran');

            // C. PEMBIAYAAN
            $pembiayaan_pengeluaran = Apbd::where('tahun', $tahun_pilih)
                ->where('jenis', 'Pembiayaan')
                ->where('kategori', 'LIKE', '%Pengeluaran%')
                ->sum('anggaran');

            $pembiayaan_penerimaan = Apbd::where('tahun', $tahun_pilih)
                ->where('jenis', 'Pembiayaan')
                ->where('kategori', 'NOT LIKE', '%Pengeluaran%')
                ->sum('anggaran');

            return compact('pendapatan', 'belanja', 'pembiayaan_pengeluaran', 'pembiayaan_penerimaan');
        });

        extract($apbdData);

        // 4. HITUNG SURPLUS / DEFISIT
        $total_masuk  = $pendapatan + $pembiayaan_penerimaan;
        $total_keluar = $belanja + $pembiayaan_pengeluaran;
        $surplus_defisit = $total_masuk - $total_keluar;

        // --- CHART DATA - Cache seluruh tahun ---
        $history_apbd = Cache::remember('apbd_history_chart', self::CACHE_TTL, function () {
            return Apbd::selectRaw('
                tahun,
                SUM(CASE WHEN jenis = "Pendapatan" THEN anggaran ELSE 0 END) as total_pendapatan,
                SUM(CASE WHEN jenis = "Belanja" THEN anggaran ELSE 0 END) as total_belanja
            ')
                ->groupBy('tahun')
                ->orderBy('tahun', 'asc')
                ->get();
        });

        $chart_labels     = $history_apbd->pluck('tahun');
        $chart_pendapatan = $history_apbd->pluck('total_pendapatan');
        $chart_belanja    = $history_apbd->pluck('total_belanja');

        // --- RINCIAN PENDAPATAN - Cache per tahun ---
        $pendapatanDetail = Cache::remember('apbd_pendapatan_' . $tahun_pilih, self::CACHE_TTL, function () use ($tahun_pilih) {
            $pad_items = Apbd::where('tahun', $tahun_pilih)
                ->where('jenis', 'Pendapatan')
                ->where('kategori', 'Pendapatan Asli Desa')
                ->get();

            $transfer_items = Apbd::where('tahun', $tahun_pilih)
                ->where('jenis', 'Pendapatan')
                ->where(function ($q) {
                    $q->where('kategori', 'Pendapatan Transfer')
                        ->orWhere('kategori', 'Dana desa');
                })->get();

            $lain_items = Apbd::where('tahun', $tahun_pilih)
                ->where('jenis', 'Pendapatan')
                ->where('kategori', 'Pendapatan Lain-lain')
                ->get();

            return [
                'pad_items' => $pad_items,
                'total_pad' => $pad_items->sum('anggaran'),
                'transfer_items' => $transfer_items,
                'total_transfer' => $transfer_items->sum('anggaran'),
                'lain_items' => $lain_items,
                'total_lain' => $lain_items->sum('anggaran'),
            ];
        });

        extract($pendapatanDetail);

        // --- RINCIAN BELANJA (5 BIDANG) - Cache per tahun ---
        $belanjaDetail = Cache::remember('apbd_belanja_' . $tahun_pilih, self::CACHE_TTL, function () use ($tahun_pilih) {
            $queries = [
                'pemerintahan' => ['query' => fn($q) => $q->where('kategori', 'LIKE', '%Pemerintahan%')],
                'pembangunan' => ['query' => fn($q) => $q->where('kategori', 'LIKE', '%Pembangunan%')],
                'pembinaan' => ['query' => fn($q) => $q->where('kategori', 'LIKE', '%Pembinaan%')],
                'pemberdayaan' => ['query' => fn($q) => $q->where('kategori', 'LIKE', '%Pemberdayaan%')],
                'bencana' => ['query' => fn($q) => $q->where(function ($sq) {
                    $sq->where('kategori', 'LIKE', '%Bencana%')
                        ->orWhere('kategori', 'LIKE', '%Darurat%')
                        ->orWhere('kategori', 'LIKE', '%Mendesak%')
                        ->orWhere('kategori', 'LIKE', '%BLT%');
                })],
            ];

            $result = [];
            foreach ($queries as $key => $config) {
                $items = Apbd::where('tahun', $tahun_pilih)
                    ->where('jenis', 'Belanja')
                    ->when(true, $config['query'])
                    ->get();
                $result['belanja_' . $key] = $items;
                $result['total_' . $key] = $items->sum('anggaran');
            }

            return $result;
        });

        extract($belanjaDetail);

        $total_pemerintahan = $total_pemerintahan ?? 0;
        $total_pembangunan = $total_pembangunan ?? 0;
        $total_pembinaan = $total_pembinaan ?? 0;
        $total_pemberdayaan = $total_pemberdayaan ?? 0;
        $total_bencana = $total_bencana ?? 0;

        $grand_total_belanja = $total_pemerintahan + $total_pembangunan + $total_pembinaan + $total_pemberdayaan + $total_bencana;
        $grand_total_belanja = $grand_total_belanja == 0 ? 1 : $grand_total_belanja;

        // Compile all data for view
        $viewData = compact(
            'list_tahun',
            'tahun_pilih',
            'pendapatan',
            'belanja',
            'pembiayaan_penerimaan',
            'pembiayaan_pengeluaran',
            'surplus_defisit',
            'chart_labels',
            'chart_pendapatan',
            'chart_belanja',
            'pad_items',
            'total_pad',
            'transfer_items',
            'total_transfer',
            'lain_items',
            'total_lain',
            'belanja_pemerintahan',
            'total_pemerintahan',
            'belanja_pembangunan',
            'total_pembangunan',
            'belanja_pembinaan',
            'total_pembinaan',
            'belanja_pemberdayaan',
            'total_pemberdayaan',
            'belanja_bencana',
            'total_bencana',
            'grand_total_belanja'
        );

        // Simpan ke cache
        Cache::put($cacheKey, $viewData, self::CACHE_TTL);

        return view('frontend.apbdes', $viewData);
    }
}
