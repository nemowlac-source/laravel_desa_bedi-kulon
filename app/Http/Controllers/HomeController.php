<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri; // <--- 1. JANGAN LUPA IMPORT MODEL INI
use App\Models\Umkm;
use App\Models\Berita;

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

        // 3. Kirim data ke view (welcome / home)
        return view('frontend.dashboard', compact('galeri_terbaru', 'produk_umkm', 'berita_terbaru'));
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
}
