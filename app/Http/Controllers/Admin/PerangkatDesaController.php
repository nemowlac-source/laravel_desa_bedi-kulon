<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PerangkatDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerangkatDesaController extends Controller
{
    public function index()
    {
        // Urutkan berdasarkan yang terbaru
        $perangkats = PerangkatDesa::latest()->get();
        return view('admin.perangkat.index', compact('perangkats'));
    }

    public function create()
    {
        return view('admin.perangkat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|image|max:2048', // Maks 2MB
        ]);

        $path = $request->file('foto')->store('perangkat', 'public');

        PerangkatDesa::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'niap' => $request->niap,
            'foto' => $path,
        ]);

        return redirect()->route('perangkat.index')->with('success', 'Perangkat desa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $perangkat = PerangkatDesa::findOrFail($id);
        return view('admin.perangkat.edit', compact('perangkat'));
    }

    public function update(Request $request, $id)
    {
        $perangkat = PerangkatDesa::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('foto');

        // Cek jika ganti foto
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($perangkat->foto && Storage::disk('public')->exists($perangkat->foto)) {
                Storage::disk('public')->delete($perangkat->foto);
            }
            // Upload baru
            $data['foto'] = $request->file('foto')->store('perangkat', 'public');
        }

        $perangkat->update($data);

        return redirect()->route('perangkat.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $perangkat = PerangkatDesa::findOrFail($id);

        if ($perangkat->foto && Storage::disk('public')->exists($perangkat->foto)) {
            Storage::disk('public')->delete($perangkat->foto);
        }

        $perangkat->delete();

        return redirect()->route('perangkat.index')->with('success', 'Data dihapus');
    }
}
