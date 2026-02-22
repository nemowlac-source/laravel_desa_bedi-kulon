<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ppid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PermohonanInformasi;

class PpidController extends Controller
{
    public function index()
    {
        // Urutkan file terbaru
        $ppid = Ppid::latest('tanggal_upload')->get();
        return view('admin.ppid.index', compact('ppid'));
    }

    public function create()
    {
        return view('admin.ppid.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx,jpg,png|max:5120', // Max 5MB
            'tanggal_upload' => 'required|date',
        ]);

        $data = $request->all();

        // Upload File
        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('ppid_docs', 'public');
        }

        Ppid::create($data);

        return redirect()->route('ppid.index')->with('success', 'Dokumen berhasil dipublikasikan');
    }

    public function edit($id)
    {
        $ppid = Ppid::findOrFail($id);
        return view('admin.ppid.edit', compact('ppid'));
    }

    public function update(Request $request, $id)
    {
        $ppid = Ppid::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'file' => 'mimes:pdf,doc,docx,xls,xlsx,jpg,png|max:5120', // Opsional saat edit
            'tanggal_upload' => 'required|date',
        ]);

        $data = $request->all();

        // Cek jika ada file baru
        if ($request->hasFile('file')) {
            // Hapus file lama
            if ($ppid->file) {
                Storage::disk('public')->delete($ppid->file);
            }
            $data['file'] = $request->file('file')->store('ppid_docs', 'public');
        }

        $ppid->update($data);

        return redirect()->route('ppid.index')->with('success', 'Dokumen berhasil diperbarui');
    }

    public function destroy($id)
    {
        $ppid = Ppid::findOrFail($id);

        // Hapus fisik file
        if ($ppid->file) {
            Storage::disk('public')->delete($ppid->file);
        }

        $ppid->delete();
        return redirect()->route('ppid.index')->with('success', 'Dokumen dihapus');
    }
    // 1. Fungsi Menampilkan Tabel Permohonan
    public function permohonanMasuk()
    {
        // Mengambil data terbaru dan membaginya 10 per halaman (pagination)
        $permohonan = PermohonanInformasi::latest()->paginate(10);
        return view('admin.ppid.permohonan-masuk', compact('permohonan'));
    }

    // 2. Fungsi Menghapus Permohonan
    public function destroyPermohonan($id)
    {
        PermohonanInformasi::findOrFail($id)->delete();
        return back()->with('success', 'Data permohonan informasi berhasil dihapus.');
    }
}
