<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PendudukUsia; // Pastikan Model ini di-import
use App\Models\Visitor;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Bansos;
use App\Models\Galeri;
use App\Models\Umkm;
use App\Models\Berita;
use App\Models\PerangkatDesa;
use App\Models\Potensi;
use App\Models\Wisata;
use App\Models\Penduduk;
use App\Models\Apbd;
use App\Models\Surat;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. HITUNG TOTAL PENDUDUK
        // (Pastikan Anda sudah punya data di tabel penduduk_usias, jika belum isi 0 dulu)
        $total_laki = Penduduk::sum('laki_laki');
        $total_perempuan = Penduduk::sum('perempuan');
        $total_penduduk = $total_laki + $total_perempuan;
        // Jika tabel PendudukUsia masih kosong, uncomment baris bawah ini agar tidak error:
        // $total_penduduk = 0; 

        // 2. DATA LAINNYA (Dummy sementara jika model belum ada)
        $total_berita = Berita::count(); // Hitung semua karena semua sudah pasti terbit
        // Total Surat (Biasanya di dashboard yang ditampilkan adalah yg "Perlu Diproses" / Menunggu)
        $total_surat = Surat::where('status', 'Menunggu')->count();

        // 3. PENGUNJUNG BULAN INI
        $pengunjung_bulan_ini = Visitor::whereMonth('date', Carbon::now()->month)
            ->whereYear('date', Carbon::now()->year)
            ->count();

        // 1. Ambil Aktivitas User Baru Daftar
        $activity_users = User::latest()->take(5)->get()->map(function ($item) {
            return [
                'message' => $item->name . ' (Warga) mendaftar akun baru',
                'time'    => $item->created_at,
                'status'  => 'User Baru',
                'color'   => 'badge-ghost' // Abu-abu
            ];
        });

        // 2. Ambil Aktivitas Input Penduduk Baru
        $activity_penduduk = Penduduk::latest()->take(5)->get()->map(function ($item) {
            return [
                'message' => 'Data penduduk baru: ' . $item->nama . ' ditambahkan',
                'time'    => $item->created_at,
                'status'  => 'Kependudukan',
                'color'   => 'badge-info' // Biru
            ];
        });

        // 3. Ambil Aktivitas Bansos Baru
        $activity_bansos = Bansos::latest()->take(5)->get()->map(function ($item) {
            return [
                'message' => 'Penyaluran ' . $item->jenis_bantuan . ' kepada ' . $item->nama_penerima,
                'time'    => $item->created_at, // Pastikan tabel bansos punya timestamps
                'status'  => 'Bansos',
                'color'   => 'badge-success' // Hijau
            ];
        });

        // /* // CONTOH JIKA ADA MODEL BERITA (Uncomment jika sudah buat)
        $activity_berita = Berita::latest()->take(5)->get()->map(function ($item) {
            return [
                'message' => 'Admin menerbitkan berita: "' . \Str::limit($item->judul, 20) . '"',
                'time'    => $item->created_at,
                'status'  => 'Berita',
                'color'   => 'badge-warning'
            ];
        });


        // 4. GABUNGKAN SEMUA (MERGE)
        // Kita gunakan collect() kosong, lalu merge satu per satu
        $activities = collect()
            ->merge($activity_users)
            ->merge($activity_penduduk)
            ->merge($activity_bansos)
            // ->merge($activity_berita) // Uncomment jika ada
            ->sortByDesc('time') // Urutkan dari yang paling baru
            ->take(8); // Ambil 8 aktivitas teratas saja untuk ditampilkan


        // --- KIRIM KE VIEW ---
        return view('admin.dashboard', compact(
            'total_penduduk',
            'total_berita',
            'total_surat',
            'pengunjung_bulan_ini',

            'activities' // <--- Variabel baru ini yang dikirim
        ));
    }
}
