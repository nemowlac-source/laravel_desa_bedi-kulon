<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Umkm;
use App\Models\Berita;
use App\Models\PerangkatDesa;
use App\Models\Potensi;
use App\Models\Wisata;
use App\Models\Penduduk;
use App\Models\Apbd;
use App\Models\Visitor;


use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    private const CACHE_TTL = 3600;

    public function index()
    {
        Visitor::recordVisit();
        $visitor_stats = Visitor::getStats();
        $cacheKey = 'homepage_data';

        if (Cache::has($cacheKey)) {
            $cached = Cache::get($cacheKey);
            $cached['visitor_stats'] = $visitor_stats;
            return view('frontend.dashboard', $cached);
        }

        $galeri_terbaru = Galeri::latest()->take(6)->get();
        $produk_umkm = Umkm::latest()->take(4)->get();
        $berita_terbaru = Berita::latest()->take(6)->get();
        $perangkat_desa = PerangkatDesa::take(4)->get();
        $potensi_desa = Potensi::latest()->take(6)->get();
        $wisata_desa = Wisata::latest()->take(5)->get();
        $potensis = Potensi::latest()->take(6)->get();
        $total_laki = Penduduk::sum('laki_laki');
        $total_perempuan = Penduduk::sum('perempuan');
        $total_penduduk = $total_laki + $total_perempuan;
        $total_kk = Penduduk::sum('kk');
        $total_sementara = Penduduk::sum('penduduk_sementara');
        $total_mutasi = Penduduk::sum('kelahiran');
        $tahun_ini = date('Y');
        $apbd_pendapatan = Apbd::where('tahun', $tahun_ini)->where('jenis', 'Pendapatan')->sum('anggaran');
        $apbd_belanja = Apbd::where('tahun', $tahun_ini)->where('jenis', 'Belanja')->sum('anggaran');

        $viewData = [
            'galeri_terbaru' => $galeri_terbaru,
            'produk_umkm' => $produk_umkm,
            'berita_terbaru' => $berita_terbaru,
            'perangkat_desa' => $perangkat_desa,
            'potensi_desa' => $potensi_desa,
            'potensis' => $potensis,
            'wisata_desa' => $wisata_desa,
            'total_penduduk' => $total_penduduk,
            'total_laki' => $total_laki,
            'total_perempuan' => $total_perempuan,
            'total_kk' => $total_kk,
            'total_sementara' => $total_sementara,
            'total_mutasi' => $total_mutasi,
            'apbd_pendapatan' => $apbd_pendapatan,
            'apbd_belanja' => $apbd_belanja,
            'tahun_ini' => $tahun_ini,
            'visitor_stats' => $visitor_stats,
        ];

        $cacheData = $viewData;
        unset($cacheData['visitor_stats']);
        Cache::put($cacheKey, $cacheData, self::CACHE_TTL);

        return view('frontend.dashboard', $viewData);
    }

    public function galeri()
    {
        // Ambil semua data, 9 foto per halaman
        $galeris = Galeri::latest()->paginate(6);

        return view('frontend.galeri', compact('galeris'));
    }

    public function belanja()
    {
        // Mengambil data UMKM dengan pagination, misalnya 9 produk per halaman
        $products = Umkm::latest()->paginate(6);

        // Mengirim data $products ke view frontend.belanja
        return view('frontend.belanja', compact('products'));
    }

    // FUNGSI BARU: Menampilkan Detail Belanja
    public function detailBelanja($id)
    {
        // Cari produk berdasarkan ID (Ganti 'Produk' dengan nama Model Anda, misal 'Umkm')
        $produk = Umkm::findOrFail($id);

        // Arahkan ke file blade detail-belanja
        return view('frontend.detail-belanja', compact('produk'));
    }

    public function berita()
    {
        // Ambil data berita, urutkan terbaru, 6 per halaman
        $beritas = Berita::latest()->paginate(6);

        return view('frontend.berita', compact('beritas'));
    }

    // [KODE BARU] Menampilkan Isi Detail Berita
    public function bacaBerita($id)
    {
        // 1. Cari artikel berdasarkan ID
        $berita = Berita::findOrFail($id);

        // (Opsional) Jika di database Anda ada kolom 'views', buka komentar di bawah ini:
        // $berita->increment('views');

        // 2. Ambil 5 berita terbaru untuk di Sidebar Kanan (selain berita yang sedang dibaca)
        $berita_terbaru = Berita::where('id', '!=', $id)
            ->latest() // Sama dengan orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // 3. Kirim ke file view (Pastikan Anda sudah membuat file detail-berita.blade.php di folder frontend)
        return view('frontend.detail-berita', compact('berita', 'berita_terbaru'));
    }

    public function pemerintahan()
    {
        // Ambil semua data perangkat desa
        $perangkats = PerangkatDesa::all();

        return view('frontend.pemerintahan', compact('perangkats'));
    }

    public function potensi()
    {
        // Ambil data potensi, 6 per halaman
        $potensis = Potensi::latest()->paginate(6);

        return view('frontend.potensi', compact('potensis'));
    }

    // FUNGSI BARU: Menampilkan Detail Potensi Desa
    public function detailPotensi($id)
    {
        // 1. Cari data potensi berdasarkan ID 
        // (Sesuaikan "Wisata" dengan nama Model database yang Anda gunakan)
        $potensi = Potensi::findOrFail($id);

        // 2. Ambil 4 potensi lainnya untuk di Sidebar Kanan (selain yang sedang dibuka)
        $potensi_lain = Potensi::where('id', '!=', $id)
            ->latest()
            ->take(4)
            ->get();

        // 3. Arahkan ke file blade
        return view('frontend.detail-potensi', compact('potensi', 'potensi_lain'));
    }

    public function wisata()
    {
        // Ambil data wisata, 9 item per halaman
        $wisatas = Wisata::latest()->paginate(6);

        return view('frontend.wisata', compact('wisatas'));
    }

    public function show($id)
    {
        // Ambil detail wisata berdasarkan ID
        $wisata = Wisata::findOrFail($id);

        // Ambil 4 wisata lainnya untuk sidebar
        $wisataLainnya = Wisata::where('id', '!=', $id)->limit(4)->get();

        // Tambah jumlah view (opsional jika ingin dinamis)
        $wisata->increment('views');

        return view('frontend.show', compact('wisata', 'wisataLainnya'));
    }

    public function dashboard()
    {
        Visitor::recordVisit(); // Catat setiap kunjungan

        return view('frontend.dashboard', [
            'visitor_stats' => Visitor::getStats(),
        ]);
    }
}
