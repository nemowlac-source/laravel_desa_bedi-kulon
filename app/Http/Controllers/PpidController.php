<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppid; // Sesuaikan dengan nama Model Anda
use Illuminate\Support\Facades\Storage;

class PpidController extends Controller
{
    public function index(Request $request)
    {
        // 1. Query Dasar
        $query = Ppid::query();

        // 2. Filter Kategori (Jika diklik dari kartu kategori)
        // Kategori: 'Berkala', 'Serta Merta', 'Setiap Saat'
        if ($request->has('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        // 3. Ambil Data (Terbaru di atas)
        $documents = $query->orderBy('tanggal_upload', 'desc')->paginate(10);

        // 4. Cek Update Terakhir (Untuk teks "Update terakhir ...")
        $last_update_data = Ppid::latest('updated_at')->first();
        $last_update_text = $last_update_data
            ? $last_update_data->updated_at->diffForHumans()
            : 'Belum ada data';

        return view('frontend.ppid', compact('documents', 'last_update_text'));
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
}
