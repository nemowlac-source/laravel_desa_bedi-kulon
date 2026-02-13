<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bansos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BansosController extends Controller
{
    public function index()
    {
        $bansos = Bansos::latest()->get();
        return view('admin.bansos.index', compact('bansos'));
    }

    public function create()
    {
        return view('admin.bansos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penerima' => 'required',
            'alamat' => 'required',
            'jenis_bantuan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048', // Validasi foto
        ]);

        $data = $request->all();

        // Proses Upload Foto
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('bansos', 'public');
        }

        Bansos::create($data);

        return redirect()->route('bansos.index')->with('success', 'Data penerima bantuan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $bansos = Bansos::findOrFail($id);
        return view('admin.bansos.edit', compact('bansos'));
    }

    public function update(Request $request, $id)
    {
        $bansos = Bansos::findOrFail($id);

        $request->validate([
            'nama_penerima' => 'required',
            'alamat' => 'required',
            'jenis_bantuan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        // Cek jika ada foto baru diupload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($bansos->foto) {
                Storage::disk('public')->delete($bansos->foto);
            }
            $data['foto'] = $request->file('foto')->store('bansos', 'public');
        }

        $bansos->update($data);

        return redirect()->route('bansos.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $bansos = Bansos::findOrFail($id);

        // Hapus foto dari storage saat data dihapus
        if ($bansos->foto) {
            Storage::disk('public')->delete($bansos->foto);
        }

        $bansos->delete();
        return redirect()->route('bansos.index')->with('success', 'Data dihapus');
    }
}
