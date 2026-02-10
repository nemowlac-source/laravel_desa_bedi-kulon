<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UmkmController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PerangkatDesaController;
use App\Http\Controllers\Admin\PotensiController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\ApbdController;

Route::get('/', [HomeController::class, 'index'])->name('frontend.dashboard');
Route::get('/profile-desa', function () {
    return view('frontend.profile');
})->name('frontend.profile');
Route::get('/apbdes', function () {
    return view('frontend.apbdes');
})->name('frontend.apbdes');
Route::get('/bansos', function () {
    return view('frontend.bansos');
})->name('frontend.bansos');
Route::get('/belanja', [HomeController::class, 'belanja'])->name('frontend.belanja');
Route::get('/berita', [HomeController::class, 'berita'])->name('frontend.berita');
Route::get('/idm', function () {
    return view('frontend.idm');
})->name('frontend.idm');
Route::get('/infografis', function () {
    return view('frontend.infografis');
})->name('frontend.infografis');
Route::get('/listing', function () {
    return view('frontend.listing');
})->name('frontend.listing');
Route::get('/ppid', function () {
    return view('frontend.ppid');
})->name('frontend.ppid');
Route::get('/sdgs', function () {
    return view('frontend.sdgs');
})->name('frontend.sdgs');
Route::get('/stunting', function () {
    return view('frontend.stunting');
})->name('frontend.stunting');
Route::get('/wisata', [HomeController::class, 'wisata'])->name('frontend.wisata');
Route::get('/potensi', [HomeController::class, 'potensi'])->name('frontend.potensi');
Route::get('/pemerintahan', [HomeController::class, 'pemerintahan'])->name('frontend.pemerintahan');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('frontend.galeri');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // 1. DASHBOARD ADMIN (Hanya untuk role 'admin')
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard'); // Buat view ini nanti
        })->name('admin.dashboard');

        // Tambahkan route lain khusus admin di sini (misal: kelola penduduk)
        Route::resource('galeri', GaleriController::class);
        Route::resource('umkm', UmkmController::class);
        Route::resource('berita', BeritaController::class);
        Route::resource('perangkat', PerangkatDesaController::class);
        Route::resource('potensi', PotensiController::class);
        Route::resource('wisata', WisataController::class);
        Route::resource('penduduk', PendudukController::class);
        Route::resource('apbd', ApbdController::class);
    });

    // 2. AREA ANGGOTA (Bisa diakses 'admin' DAN 'anggota')
    Route::middleware(['role:admin,anggota'])->prefix('anggota')->group(function () {
        Route::get('/dashboard', function () {
            return view('anggota.dashboard'); // Halaman list buku
        })->name('anggota.dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
