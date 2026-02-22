<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppid; // Sesuaikan dengan nama Model Anda
use Illuminate\Support\Facades\Storage;
use App\Models\PermohonanInformasi;

class PpidController extends Controller
{
    public function index(Request $request)
    {
        // 1. Cek Update Terakhir (Untuk teks "Update terakhir ...")
        // Saya menggunakan Model 'Ppid' sesuai kode asli Anda
        $last_update_data = Ppid::latest('updated_at')->first();
        $last_update_text = $last_update_data
            ? $last_update_data->updated_at->diffForHumans()
            : 'Belum ada data';

        // ==========================================================
        // CABANG A: Jika User Mengklik Salah Satu Kategori (Berkala, Serta Merta, dsb)
        // ==========================================================
        if ($request->has('kategori')) {

            $kategori = $request->kategori;

            // Menentukan subjudul otomatis
            $subtitles = [
                'Berkala' => 'Informasi yang wajib disediakan dan diumumkan secara berkala.',
                'Serta Merta' => 'Informasi yang dapat mengancam hajat hidup orang banyak dan ketertiban umum.',
                'Setiap Saat' => 'Informasi yang wajib disediakan oleh Badan Publik.'
            ];
            $subtitle = $subtitles[$kategori] ?? 'Daftar informasi publik desa.';

            // Ambil data tanpa paginate, lalu KELOMPOKKAN berdasarkan sub_kategori
            // Pastikan Anda memiliki kolom 'sub_kategori' di tabel ppid database Anda
            $documents = Ppid::where('kategori', $kategori)
                ->orderBy('tanggal_upload', 'desc')
                ->get()
                ->groupBy('sub_kategori');

            // Arahkan ke file view ACCORDION yang baru saja kita buat
            return view('frontend.ppid-kategori', compact('documents', 'last_update_text', 'kategori', 'subtitle'));
        }

        // ==========================================================
        // CABANG B: Jika Membuka Halaman Utama PPID (Tidak ada kategori yang dipilih)
        // ==========================================================
        else {
            // Ambil Data Terbaru dengan pagination (seperti kode asli Anda)
            $documents = Ppid::orderBy('tanggal_upload', 'desc')->paginate(10);

            // Arahkan ke file view UTAMA (yang berisi 3 kotak kategori di atas)
            return view('frontend.ppid', compact('documents', 'last_update_text'));
        }
    }

    // Fungsi untuk Download + Hitung Counter
    public function download($id)
    {
        $doc = Ppid::findOrFail($id);

        // Tambah counter download
        $doc->increment('jumlah_unduh');

        // Proses download file
        // Pastikan path file di database sesuai (misal: 'ppid/file.pdf')
        $filePath = 'public/' . $doc->file_path;

        if (Storage::exists($filePath)) {
            return Storage::download($filePath, $doc->judul . '.' . pathinfo($doc->file_path, PATHINFO_EXTENSION));
        } else {
            return back()->with('error', 'File tidak ditemukan.');
        }
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
