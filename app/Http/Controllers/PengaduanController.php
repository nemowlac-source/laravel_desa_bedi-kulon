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
            'isi_pengaduan' => 'required|min:10',
            'lampiran' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('lampiran')) {
            $data['lampiran'] = $request->file('lampiran')->store('pengaduan/lampiran', 'public');
        }

        Pengaduan::create($data);
        return redirect()->back()->with('success_pengaduan', 'Aduan berhasil dikirim!');
    }
}
