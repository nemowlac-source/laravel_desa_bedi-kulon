<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idm;
use App\Models\IdmDetail; // Pastikan Model Detail di-import

class IdmController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil Tahun (Default: Tahun terbaru)
        $tahun_terbaru = Idm::max('tahun') ?? date('Y');
        $tahun_pilih = $request->get('tahun', $tahun_terbaru);

        // 2. Ambil Data Utama IDM (Skor Total)
        $idm = Idm::where('tahun', $tahun_pilih)->first();

        // List tahun untuk dropdown
        $list_tahun = Idm::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');

        // 3. Siapkan Variabel Kosong untuk Rincian
        $details_iks = collect(); // Kosongkan dulu biar gak error kalau data null
        $details_ike = collect();
        $details_ikl = collect();

        // 4. LOGIKA AMBIL RINCIAN (PENTING!)
        if ($idm) {
            // Ambil semua rincian milik IDM tahun ini, urutkan no_urut
            $all_details = IdmDetail::where('idm_id', $idm->id)
                ->orderBy('no_urut', 'asc')
                ->get();

            // Filter pisahkan ke 3 wadah
            $details_iks = $all_details->where('jenis', 'IKS');
            $details_ike = $all_details->where('jenis', 'IKE');
            $details_ikl = $all_details->where('jenis', 'IKL');
        }

        // 5. Logika Tambahan (Target & Penambahan)
        $target_status = '-';
        $min_skor_target = 0;
        $penambahan = 0;

        if ($idm) {
            $skor = $idm->skor_idm;
            // (Logika if-else status IDM yang sebelumnya saya berikan...)
            if ($skor <= 0.4907) {
                $target_status = 'TERTINGGAL';
                $min_skor_target = 0.4908;
            } elseif ($skor <= 0.5989) {
                $target_status = 'BERKEMBANG';
                $min_skor_target = 0.5990;
            } elseif ($skor <= 0.7072) {
                $target_status = 'MAJU';
                $min_skor_target = 0.7073;
            } elseif ($skor <= 0.8155) {
                $target_status = 'MANDIRI';
                $min_skor_target = 0.8156;
            } else {
                $target_status = 'PERTAHANKAN';
                $min_skor_target = 0.8156;
            }
            if ($skor < $min_skor_target) $penambahan = $min_skor_target - $skor;
        }

        // Data Grafik
        $history = Idm::orderBy('tahun', 'asc')->get();
        $chart_labels = $history->pluck('tahun');
        $chart_data   = $history->pluck('skor_idm');

        // Kirim Semua ke View
        return view('frontend.idm', compact(
            'idm',
            'list_tahun',
            'tahun_pilih',
            'target_status',
            'min_skor_target',
            'penambahan',
            'chart_labels',
            'chart_data',
            'details_iks',
            'details_ike',
            'details_ikl' // <--- Ini yang penting buat tabel
        ));
    }
}
