<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri; // <--- 1. JANGAN LUPA IMPORT MODEL INI

class HomeController extends Controller
{
    public function index()
    {
        // 2. Ambil 6 foto terbaru dari database
        $galeri_terbaru = Galeri::latest()->take(6)->get();

        // 3. Kirim data ke view (welcome / home)
        return view('frontend.dashboard', compact('galeri_terbaru'));
    }

    public function galeri()
    {
        // Ambil semua data, 9 foto per halaman
        $galeris = Galeri::latest()->paginate(9);

        return view('frontend.galeri', compact('galeris'));
    }
}
