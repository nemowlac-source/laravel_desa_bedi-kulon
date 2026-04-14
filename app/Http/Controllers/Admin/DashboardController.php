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
        // 1. HITUNG VISITOR STATS
        $visitor_stats = Visitor::getStats();

        // 2. HITUNG TOTAL PENDUDUK
        $total_laki = Penduduk::sum('laki_laki');
        $total_perempuan = Penduduk::sum('perempuan');
        $total_penduduk = $total_laki + $total_perempuan;

        // 3. DATA LAINNYA
        $total_berita = Berita::count();
        $total_surat = Surat::where('status', 'Menunggu')->count();

        // 4. PENGUNJUNG BULAN INI (Dari visitor_stats)
        $pengunjung_bulan_ini = $visitor_stats['bulan_ini'] ?? 0;

        // 5. Ambil Aktivitas User Baru Daftar
        $activity_users = User::latest()->take(5)->get()->map(function ($item) {
            return [
                'message' => $item->name . ' (Warga) mendaftar akun baru',
                'time'    => $item->created_at,
                'status'  => 'User Baru',
                'color'   => 'badge-ghost'
            ];
        });

        // 6. Ambil Aktivitas Input Penduduk Baru
        $activity_penduduk = Penduduk::latest()->take(5)->get()->map(function ($item) {
            return [
                'message' => 'Data penduduk baru: ' . $item->nama . ' ditambahkan',
                'time'    => $item->created_at,
                'status'  => 'Kependudukan',
                'color'   => 'badge-info'
            ];
        });

        // 7. Ambil Aktivitas Bansos Baru
        $activity_bansos = Bansos::latest()->take(5)->get()->map(function ($item) {
            return [
                'message' => 'Penyaluran ' . $item->jenis_bantuan . ' kepada ' . $item->nama_penerima,
                'time'    => $item->created_at,
                'status'  => 'Bansos',
                'color'   => 'badge-success'
            ];
        });

        // 8. Ambil Aktivitas Berita
        $activity_berita = Berita::latest()->take(5)->get()->map(function ($item) {
            return [
                'message' => 'Admin menerbitkan berita: "' . \Str::limit($item->judul, 20) . '"',
                'time'    => $item->created_at,
                'status'  => 'Berita',
                'color'   => 'badge-warning'
            ];
        });

        // 9. GABUNGKAN SEMUA AKTIVITAS
        $activities = collect()
            ->merge($activity_users)
            ->merge($activity_penduduk)
            ->merge($activity_bansos)
            ->merge($activity_berita)
            ->sortByDesc('time')
            ->take(8);

        // --- KIRIM KE VIEW ---
        return view('admin.dashboard', compact(
            'visitor_stats',
            'total_penduduk',
            'total_berita',
            'total_surat',
            'pengunjung_bulan_ini',
            'activities'
        ));
    }
}
