<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
