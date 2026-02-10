<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Umkm;
use App\Models\Berita;
use App\Models\PerangkatDesa;
use App\Models\Potensi;
use App\Models\Wisata;


class HomeController extends Controller
{
    public function index()
    {
        // 2. Ambil 6 foto terbaru dari database
        $galeri_terbaru = Galeri::latest()->take(6)->get();
        // 2. AMBIL 4 PRODUK UMKM TERBARU
        $produk_umkm = Umkm::latest()->take(4)->get();
        // 3. BERITA (3 artikel terbaru)
        $berita_terbaru = Berita::latest()->take(3)->get();
        // 4. PERANGKAT DESA (Ambil 4 orang)
        $perangkat_desa = PerangkatDesa::take(4)->get();
        // 5. AMBIL DATA POTENSI (Ambil 6 terbaru)
        $potensi_desa = Potensi::latest()->take(6)->get();
        // 6. AMBIL DATA WISATA (Ambil 5 untuk slider)
        $wisata_desa = Wisata::latest()->take(5)->get();

        // 3. Kirim data ke view (welcome / home)
        return view('frontend.dashboard', compact(
            'galeri_terbaru',
            'produk_umkm',
            'berita_terbaru',
            'perangkat_desa',
            'potensi_desa',
            'wisata_desa'
        ));
    }

    public function galeri()
    {
        // Ambil semua data, 9 foto per halaman
        $galeris = Galeri::latest()->paginate(9);

        return view('frontend.galeri', compact('galeris'));
    }

    public function belanja()
    {
        // Mengambil data UMKM dengan pagination, misalnya 9 produk per halaman
        $products = Umkm::latest()->paginate(9);

        // Mengirim data $products ke view frontend.belanja
        return view('frontend.belanja', compact('products'));
    }

    public function berita()
    {
        // Ambil data berita, urutkan terbaru, 6 per halaman
        $beritas = Berita::latest()->paginate(6);

        return view('frontend.berita', compact('beritas'));
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

    public function wisata()
    {
        // Ambil data wisata, 9 item per halaman
        $wisatas = Wisata::latest()->paginate(9);

        return view('frontend.wisata', compact('wisatas'));
    }
}
