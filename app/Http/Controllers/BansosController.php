<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bansos;
use Illuminate\Support\Facades\DB;

class BansosController extends Controller
{
    public function index(Request $request)
    {
        // 1. Hitung Ringkasan (Gunakan 'jenis_bantuan')
        $summary = [
            'bpjs' => Bansos::where('jenis_bantuan', 'LIKE', '%BPJS%')->count(),
            'pkh'  => Bansos::where('jenis_bantuan', 'LIKE', '%PKH%')->count(),
            'bpnt' => Bansos::where('jenis_bantuan', 'LIKE', '%BPNT%')->count(),
            'blt'  => Bansos::where('jenis_bantuan', 'LIKE', '%BLT%')->count(),
            'pstn' => Bansos::where('jenis_bantuan', 'LIKE', '%PSTN%')->count(),
        ];

        // 2. Logika Pencarian NIK
        $hasil_cari = null;
        if ($request->filled('nik')) {
            $hasil_cari = Bansos::where('nik', $request->nik)->get();
        }
        return view('frontend.bansos', compact('summary', 'hasil_cari'));
    }
}
