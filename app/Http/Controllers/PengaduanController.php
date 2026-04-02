<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('frontend.pengaduan');
    }
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|numeric',
            'kategori' => 'required',
            'isi_pengaduan' => 'required|min:1',
            'lampiran' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('lampiran')) {
            $data['lampiran'] = $request->file('lampiran')->store('pengaduan/lampiran', 'public');
        }

        Pengaduan::create($data);
        // Jika datang dari halaman mobile (test-form)
        if ($request->header('referer') && str_contains($request->header('referer'), 'test-form')) {
            // Ganti 'frontend.pengaduan.mobile' dengan nama route mobile Anda
            return redirect()->route('frontend.pengaduan')->with('success_pengaduan', 'Aduan berhasil dikirim!');
        }

        // Jika dari desktop
        return redirect()->route('frontend.dashboard')->with('success_pengaduan', 'Aduan berhasil dikirim!');
    }
}
