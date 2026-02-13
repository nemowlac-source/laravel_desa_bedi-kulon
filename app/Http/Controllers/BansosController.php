<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bansos;
use Illuminate\Support\Facades\DB;

class BansosController extends Controller
{
    public function index(Request $request)
    {
        // 1. STATISTIK UTAMA (Untuk Kartu & Grafik)
        $total_penerima = Bansos::count();

        // Mengelompokkan jumlah penerima berdasarkan Jenis Bantuan
        // Hasil: [{'jenis_bantuan': 'BLT', 'total': 50}, {'jenis_bantuan': 'PKH', 'total': 20}]
        $statistik = Bansos::select('jenis_bantuan', DB::raw('count(*) as total'))
            ->groupBy('jenis_bantuan')
            ->get();

        // 2. DATA TABEL PENERIMA (Dengan Fitur Pencarian)
        $query = Bansos::query();

        // Filter Pencarian Nama
        if ($request->has('cari')) {
            $query->where('nama_penerima', 'LIKE', '%' . $request->cari . '%');
        }

        // Filter Jenis Bantuan (Dropdown)
        if ($request->has('jenis') && $request->jenis != '') {
            $query->where('jenis_bantuan', $request->jenis);
        }

        // Ambil data (Pagination 10 per halaman)
        $penerima = $query->latest()->paginate(10)->withQueryString();

        // 3. AMBIL LIST JENIS BANTUAN (Untuk Dropdown Filter)
        $list_jenis = Bansos::select('jenis_bantuan')->distinct()->pluck('jenis_bantuan');
        $statistik = Bansos::select('jenis_bantuan', DB::raw('count(*) as total'))
            ->groupBy('jenis_bantuan')
            ->get();

        // TAMBAHAN: Siapkan data khusus untuk chart di sini
        $chart_labels = $statistik->pluck('jenis_bantuan');
        $chart_data   = $statistik->pluck('total');
        return view('frontend.bansos', compact(
            'total_penerima',
            'statistik',
            'penerima',
            'list_jenis',
            // Kirim variabel baru ini
            'chart_labels',
            'chart_data'
        ));
    }
}
