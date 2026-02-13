<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apbd; // Pastikan Model Apbd di-import

class ApbdesController extends Controller
{
    /**
     * Menampilkan halaman Transparansi APBDes
     */
    public function index(Request $request)
    {
        // 1. Cek Tahun yang dipilih user (Default: Tahun saat ini atau tahun terbaru di DB)
        // Kita cari tahun terbaru di database dulu untuk default-nya
        $tahun_terbaru = Apbd::max('tahun') ?? date('Y');
        $tahun_pilih   = $request->get('tahun', $tahun_terbaru);

        // 2. Ambil daftar tahun yang ada di database (untuk dropdown)
        $list_tahun = Apbd::select('tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');

        // 3. QUERY DATA BERDASARKAN TAHUN PILIHAN

        // A. PENDAPATAN
        $pendapatan = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Pendapatan')
            ->sum('anggaran');

        // B. BELANJA
        $belanja = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Belanja')
            ->sum('anggaran');

        // C. PEMBIAYAAN (Pemisahan Penerimaan & Pengeluaran)
        // Logika: Jika kategori mengandung kata "Pengeluaran", masuk ke Pengeluaran Pembiayaan.

        $pembiayaan_pengeluaran = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Pembiayaan')
            ->where('kategori', 'LIKE', '%Pengeluaran%')
            ->sum('anggaran');

        $pembiayaan_penerimaan = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Pembiayaan')
            ->where('kategori', 'NOT LIKE', '%Pengeluaran%')
            ->sum('anggaran');

        // 4. HITUNG SURPLUS / DEFISIT
        // Rumus: (Pendapatan + Penerimaan Pembiayaan) - (Belanja + Pengeluaran Pembiayaan)
        $total_masuk  = $pendapatan + $pembiayaan_penerimaan;
        $total_keluar = $belanja + $pembiayaan_pengeluaran;

        $surplus_defisit = $total_masuk - $total_keluar;

        // --- TAMBAHAN: DATA UNTUK CHART ---
        // Mengambil rekap Pendapatan & Belanja seluruh tahun yang ada
        $history_apbd = Apbd::selectRaw('
            tahun,
            SUM(CASE WHEN jenis = "Pendapatan" THEN anggaran ELSE 0 END) as total_pendapatan,
            SUM(CASE WHEN jenis = "Belanja" THEN anggaran ELSE 0 END) as total_belanja
        ')
            ->groupBy('tahun')
            ->orderBy('tahun', 'asc') // Urutkan dari tahun terlama ke terbaru
            ->get();

        // Pisahkan menjadi array agar mudah dibaca Chart.js
        $chart_labels     = $history_apbd->pluck('tahun');
        $chart_pendapatan = $history_apbd->pluck('total_pendapatan');
        $chart_belanja    = $history_apbd->pluck('total_belanja');

        // --- TAMBAHAN: DATA RINCIAN PENDAPATAN ---

        // 1. Pendapatan Asli Desa (PADes)
        // Cari yang kategorinya mengandung kata "Asli Desa", "BUMDes", "Tanah Kas", dll
        $pad_items = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Pendapatan')
            ->where(function ($q) {
                $q->where('kategori', 'LIKE', '%Asli Desa%')
                    ->orWhere('kategori', 'LIKE', '%BUMDes%')
                    ->orWhere('kategori', 'LIKE', '%Sewa%')
                    ->orWhere('kategori', 'LIKE', '%Swadaya%');
            })->get();
        $total_pad = $pad_items->sum('anggaran');


        // 2. Pendapatan Transfer (Dana Desa, ADD, Banprov, dll)
        // Cari yang kategorinya mengandung "Dana Desa", "Bantuan", "Bagi Hasil", "Alokasi"
        $transfer_items = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Pendapatan')
            ->where(function ($q) {
                $q->where('kategori', 'LIKE', '%Dana Desa%') // DD & ADD
                    ->orWhere('kategori', 'LIKE', '%Bagi Hasil%')
                    ->orWhere('kategori', 'LIKE', '%Bantuan Keuangan%');
            })->get();
        $total_transfer = $transfer_items->sum('anggaran');


        // 3. Pendapatan Lain-lain
        // Sisanya (Yang TIDAK masuk ke dua kategori di atas)
        // Cara mudah: Ambil semua pendapatan, lalu filter manually di collection atau query 'whereNot'
        $lain_items = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Pendapatan')
            ->whereNot(function ($q) {
                $q->where('kategori', 'LIKE', '%Asli Desa%')
                    ->orWhere('kategori', 'LIKE', '%BUMDes%')
                    ->orWhere('kategori', 'LIKE', '%Sewa%')
                    ->orWhere('kategori', 'LIKE', '%Swadaya%')
                    ->orWhere('kategori', 'LIKE', '%Dana Desa%')
                    ->orWhere('kategori', 'LIKE', '%Bagi Hasil%')
                    ->orWhere('kategori', 'LIKE', '%Bantuan Keuangan%');
            })->get();
        $total_lain = $lain_items->sum('anggaran');

        // ... (lanjutan kode index sebelumnya) ...

        // --- TAMBAHAN: DATA RINCIAN BELANJA (5 BIDANG) ---
        // Pastikan saat input di Admin, sertakan kata kunci Bidang di kolom Kategori
        // Contoh: "Bidang Pemerintahan: Siltap", "Pembangunan Jalan", dll.

        // 1. Bidang Pemerintahan
        $belanja_pemerintahan = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Belanja')
            ->where('kategori', 'LIKE', '%Pemerintahan%')
            ->get();
        $total_pemerintahan = $belanja_pemerintahan->sum('anggaran');

        // 2. Bidang Pembangunan
        $belanja_pembangunan = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Belanja')
            ->where('kategori', 'LIKE', '%Pembangunan%')
            ->get();
        $total_pembangunan = $belanja_pembangunan->sum('anggaran');

        // 3. Bidang Pembinaan Kemasyarakatan
        $belanja_pembinaan = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Belanja')
            ->where('kategori', 'LIKE', '%Pembinaan%')
            ->get();
        $total_pembinaan = $belanja_pembinaan->sum('anggaran');

        // 4. Bidang Pemberdayaan Masyarakat
        $belanja_pemberdayaan = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Belanja')
            ->where('kategori', 'LIKE', '%Pemberdayaan%')
            ->get();
        $total_pemberdayaan = $belanja_pemberdayaan->sum('anggaran');

        // 5. Bidang Penanggulangan Bencana / Darurat
        $belanja_bencana = Apbd::where('tahun', $tahun_pilih)
            ->where('jenis', 'Belanja')
            ->where(function ($q) {
                $q->where('kategori', 'LIKE', '%Bencana%')
                    ->orWhere('kategori', 'LIKE', '%Darurat%')
                    ->orWhere('kategori', 'LIKE', '%Mendesak%')
                    ->orWhere('kategori', 'LIKE', '%BLT%');
            })->get();
        $total_bencana = $belanja_bencana->sum('anggaran');

        // Hitung Total Belanja Keseluruhan (untuk Persentase)
        $grand_total_belanja = $total_pemerintahan + $total_pembangunan + $total_pembinaan + $total_pemberdayaan + $total_bencana;
        // Hindari pembagian dengan nol
        $grand_total_belanja = $grand_total_belanja == 0 ? 1 : $grand_total_belanja;

        // 5. Kirim data ke View Frontend
        return view('frontend.apbdes', compact(
            'list_tahun',
            'tahun_pilih',
            'pendapatan',
            'belanja',
            'pembiayaan_penerimaan',
            'pembiayaan_pengeluaran',
            'surplus_defisit',
            // ... variabel lama ...
            'chart_labels',
            'chart_pendapatan',
            'chart_belanja',
            // ... variabel sebelumnya ...
            'pad_items',
            'total_pad',
            'transfer_items',
            'total_transfer',
            'lain_items',
            'total_lain',
            // ... variabel lama ...
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
        ));
    }
}
