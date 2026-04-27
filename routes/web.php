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
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\Admin\PendudukAgamaController;
use App\Http\Controllers\Admin\PendudukKawinController;
use App\Http\Controllers\Admin\PendudukPekerjaanController;
use App\Http\Controllers\Admin\PendudukPendidikanController;
use App\Http\Controllers\Admin\PendudukUsiaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ApbdesController;
use App\Http\Controllers\StuntingController;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\PengaduanController;

Route::get('/ppid/dokumen/{id}', [App\Http\Controllers\PpidController::class, 'lihatDokumen'])->name('ppid.lihat-dokumen');
Route::get('/ppid/dasar-hukum', [PpidController::class, 'dasarHukum'])->name('frontend.ppid.dasar-hukum');
Route::get('/ppid', [PpidController::class, 'index'])->name('frontend.ppid');
Route::get('/ppid/permohonan', [App\Http\Controllers\PpidController::class, 'permohonan'])->name('frontend.ppid.permohonan');
Route::post('/ppid/permohonan', [App\Http\Controllers\PpidController::class, 'storePermohonan'])->name('frontend.ppid.permohonan.store');
Route::get('/ppid/permohonan', [App\Http\Controllers\PpidController::class, 'permohonan'])->name('frontend.ppid.permohonan');
Route::get('/ppid/download/{id}', [App\Http\Controllers\PpidController::class, 'download'])->name('ppid.download');
Route::get('/bansos', [BansosController::class, 'index'])->name('frontend.bansos');
Route::get('/stunting', [StuntingController::class, 'index'])->name('frontend.stunting');
Route::get('/apbdes', [ApbdesController::class, 'index'])->name('frontend.apbdes');
Route::get('/', [HomeController::class, 'index'])->name('frontend.dashboard');
Route::get('/wisata', [HomeController::class, 'wisata'])->name('frontend.wisata');
Route::get('/test-form', [PengaduanController::class, 'index'])->name('frontend.pengaduan');
Route::post('/pengaduan/kirim', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/wisata/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('frontend.show');
Route::get('/potensi', [HomeController::class, 'potensi'])->name('frontend.potensi');
Route::get('/potensi/{id}', [HomeController::class, 'detailPotensi'])->name('frontend.potensi.detail');
Route::get('/pemerintahan', [HomeController::class, 'pemerintahan'])->name('frontend.pemerintahan');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('frontend.galeri');
Route::get('/infografis/penduduk', [InfografisController::class, 'index'])->name('frontend.infografis');
Route::get('/belanja', [HomeController::class, 'belanja'])->name('frontend.belanja');
Route::get('/belanja/{id}', [App\Http\Controllers\HomeController::class, 'detailBelanja'])->name('frontend.belanja.detail');
Route::get('/berita', [HomeController::class, 'berita'])->name('frontend.berita');
Route::get('/berita/{id}', [HomeController::class, 'bacaBerita'])->name('frontend.berita.detail');
Route::get('/profile-desa', function () {
    $total_laki = \App\Models\Penduduk::sum('laki_laki');
    $total_perempuan = \App\Models\Penduduk::sum('perempuan');
    $total_penduduk = $total_laki + $total_perempuan;
    $total_kk = \App\Models\Penduduk::sum('kk');

    return view('frontend.profile', compact('total_penduduk', 'total_kk'));
})->name('frontend.profile');
Route::get('/listing', function () {
    return view('frontend.listing');
})->name('frontend.listing');

Route::middleware('auth')->group(function () {
    // 1. DASHBOARD ADMIN (Hanya untuk role 'admin')
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/ppid/permohonan-masuk', [\App\Http\Controllers\Admin\PpidController::class, 'permohonanMasuk'])->name('admin.ppid.permohonan');
        Route::delete('/ppid/permohonan-masuk/{id}', [\App\Http\Controllers\Admin\PpidController::class, 'destroyPermohonan'])->name('admin.ppid.permohonan.destroy');
        Route::resource('galeri', GaleriController::class);
        Route::delete('galeri/bulk-destroy', [GaleriController::class, 'bulkDestroy'])->name('galeri.bulk-destroy');
        Route::resource('umkm', UmkmController::class);
        Route::delete('umkm/bulk-destroy', [UmkmController::class, 'bulkDestroy'])->name('umkm.bulk-destroy');
        Route::resource('berita', BeritaController::class);
        Route::delete('berita/bulk-destroy', [BeritaController::class, 'bulkDestroy'])->name('berita.bulk-destroy');
        Route::resource('perangkat', PerangkatDesaController::class);
        Route::delete('perangkat/bulk-destroy', [PerangkatDesaController::class, 'bulkDestroy'])->name('perangkat.bulk-destroy');
        Route::resource('potensi', PotensiController::class);
        Route::delete('potensi/bulk-destroy', [PotensiController::class, 'bulkDestroy'])->name('potensi.bulk-destroy');
        Route::resource('wisata', WisataController::class);
        Route::delete('wisata/bulk-destroy', [WisataController::class, 'bulkDestroy'])->name('wisata.bulk-destroy');

        // Penduduk routes dengan import
        Route::get('penduduk/import', [PendudukController::class, 'import'])->name('penduduk.import');
        Route::post('penduduk/import-store', [PendudukController::class, 'importStore'])->name('penduduk.import-store');
        Route::get('penduduk/download-template', [PendudukController::class, 'downloadTemplate'])->name('penduduk.download-template');
        Route::delete('penduduk/bulk-destroy', [PendudukController::class, 'bulkDestroy'])->name('penduduk.bulk-destroy');
        Route::resource('penduduk', PendudukController::class);

        Route::resource('apbd', ApbdController::class);
        Route::delete('apbd/bulk-destroy', [ApbdController::class, 'bulkDestroy'])->name('apbd.bulk-destroy');
        Route::resource('agama', PendudukAgamaController::class);
        Route::delete('agama/bulk-destroy', [PendudukAgamaController::class, 'bulkDestroy'])->name('agama.bulk-destroy');
        Route::resource('kawin', controller: PendudukKawinController::class);
        Route::delete('kawin/bulk-destroy', [PendudukKawinController::class, 'bulkDestroy'])->name('kawin.bulk-destroy');
        Route::resource('pekerjaan', PendudukPekerjaanController::class);
        Route::delete('pekerjaan/bulk-destroy', [PendudukPekerjaanController::class, 'bulkDestroy'])->name('pekerjaan.bulk-destroy');
        Route::resource('pendidikan', PendudukPendidikanController::class);
        Route::delete('pendidikan/bulk-destroy', [PendudukPendidikanController::class, 'bulkDestroy'])->name('pendidikan.bulk-destroy');
        Route::resource('usia', PendudukUsiaController::class);
        Route::delete('usia/bulk-destroy', [PendudukUsiaController::class, 'bulkDestroy'])->name('usia.bulk-destroy');
        Route::resource('wajibpilih', \App\Http\Controllers\Admin\PendudukWajibPilihController::class);
        Route::delete('wajibpilih/bulk-destroy', [\App\Http\Controllers\Admin\PendudukWajibPilihController::class, 'bulkDestroy'])->name('wajibpilih.bulk-destroy');
        // Bansos routes dengan import
        Route::get('bansos/import', [\App\Http\Controllers\Admin\BansosController::class, 'import'])->name('bansos.import');
        Route::post('bansos/import-store', [\App\Http\Controllers\Admin\BansosController::class, 'importStore'])->name('bansos.import-store');
        Route::get('bansos/download-template', [\App\Http\Controllers\Admin\BansosController::class, 'downloadTemplate'])->name('bansos.download-template');
        Route::delete('bansos/bulk-destroy', [\App\Http\Controllers\Admin\BansosController::class, 'bulkDestroy'])->name('bansos.bulk-destroy');
        Route::resource('bansos', \App\Http\Controllers\Admin\BansosController::class);
        Route::resource('stunting', \App\Http\Controllers\Admin\StuntingController::class);
        Route::delete('stunting/bulk-destroy', [\App\Http\Controllers\Admin\StuntingController::class, 'bulkDestroy'])->name('stunting.bulk-destroy');
        Route::resource('ppid', \App\Http\Controllers\Admin\PpidController::class);
        Route::delete('ppid/bulk-destroy', [\App\Http\Controllers\Admin\PpidController::class, 'bulkDestroy'])->name('ppid.bulk-destroy');
        Route::resource('pengaduan', \App\Http\Controllers\Admin\PengaduanController::class)->names('admin.pengaduan');
        Route::delete('pengaduan/bulk-destroy', [\App\Http\Controllers\Admin\PengaduanController::class, 'bulkDestroy'])->name('admin.pengaduan.bulk-destroy');
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
