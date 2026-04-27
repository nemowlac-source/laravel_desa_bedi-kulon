<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use App\Models\PermohonanInformasi;

class PpidController extends Controller
{
    /**
     * Cache duration in seconds (30 minutes for PPID)
     */
    private const CACHE_TTL = 1800;

    public function lihatDokumen($id)
    {
        $doc = Ppid::findOrFail($id);

        // 1. Tambah jumlah unduh
        $doc->increment('jumlah_unduh');

        // 2. Path Final sesuai gambar struktur folder
        $path = public_path('storage/' . $doc->file);

        // 3. Cek file
        if (!file_exists($path)) {
            abort(404, 'Maaf, file dokumen tidak ditemukan di folder public/storage.');
        }

        // 4. Tampilkan PDF
        return response()->file($path);
    }

    public function dasarHukum()
    {
        return view('frontend.dasar-hukum');
    }

    public function index(Request $request)
    {
        // 1. Cek Update Terakhir (dari cache)
        $last_update_text = Cache::remember('ppid_last_update', self::CACHE_TTL, function () {
            $last = Ppid::latest('updated_at')->first();
            return $last ? $last->updated_at->diffForHumans() : 'Belum ada data';
        });

        // ==========================================================
        // CABANG A: Jika User Mengklik Salah Satu Kategori
        // ==========================================================
        if ($request->has('kategori')) {
            $kategori = $request->kategori;

            $subtitles = [
                'Berkala' => 'Informasi yang wajib disediakan dan diumumkan secara berkala.',
                'Serta Merta' => 'Informasi yang dapat mengancam hajat hidup orang banyak dan ketertiban umum.',
                'Setiap Saat' => 'Informasi yang wajib disediakan oleh Badan Publik.'
            ];
            $subtitle = $subtitles[$kategori] ?? 'Daftar informasi publik desa.';

            // Cache dokumen per kategori
            $cacheKey = 'ppid_kategori_' . $kategori;
            $documents = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($kategori) {
                return Ppid::where('kategori', $kategori)
                    ->orderBy('tanggal_upload', 'desc')
                    ->get()
                    ->groupBy('sub_kategori');
            });

            return view('frontend.ppid-kategori', compact('documents', 'last_update_text', 'kategori', 'subtitle'));
        }

        // ==========================================================
        // CABANG B: Halaman Utama PPID
        // ==========================================================
        else {
            // Cache dokumen utama dengan pagination
            $documents = Cache::remember('ppid_main_page', self::CACHE_TTL, function () {
                return Ppid::orderBy('tanggal_upload', 'desc')->paginate(10);
            });

            return view('frontend.ppid', compact('documents', 'last_update_text'));
        }
    }

    // Fungsi untuk Download + Hitung Counter
    public function download($id)
    {
        $doc = Ppid::findOrFail($id);

        // 1. Tambah angka jumlah unduhan di database
        $doc->increment('jumlah_unduh');

        // 2. Gunakan jalur path yang terbukti berhasil
        $path = public_path('storage/' . $doc->file);

        // 3. Pengecekan keamanan
        if (!file_exists($path)) {
            abort(404, 'Maaf, file dokumen tidak ditemukan di server.');
        }

        // 4. Perintah sakti untuk MEMAKSA browser mengunduh file
        return response()->download($path);
    }

    public function permohonan()
    {
        return view('frontend.ppid-permohonan');
    }

    public function storePermohonan(Request $request)
    {
        // 1. Validasi inputan form
        $request->validate([
            'nama' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'permohonan' => 'required|string',
        ]);

        // 2. Simpan ke database
        PermohonanInformasi::create($request->all());

        // 3. Kembalikan ke halaman form dengan pesan sukses
        return back()->with('success', 'Permohonan informasi Anda berhasil dikirim. Kami akan segera memprosesnya!');
    }
}
