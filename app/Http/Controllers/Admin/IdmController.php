<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Idm;
use Illuminate\Http\Request;

class IdmController extends Controller
{
    public function index()
    {
        // Urutkan dari tahun terbaru
        $idm = Idm::orderBy('tahun', 'desc')->get();
        return view('admin.idm.index', compact('idm'));
    }

    public function create()
    {
        return view('admin.idm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|numeric|unique:idms,tahun',
            'iks' => 'required|numeric|min:0|max:1',
            'ike' => 'required|numeric|min:0|max:1',
            'ikl' => 'required|numeric|min:0|max:1',
            'status' => 'required',
        ]);

        $data = $request->all();

        // Hitung Rumus IDM Otomatis: (IKS + IKE + IKL) / 3
        $nilai_akhir = ($request->iks + $request->ike + $request->ikl) / 3;
        $data['nilai_idm'] = round($nilai_akhir, 4); // Pembulatan 4 desimal

        Idm::create($data);

        return redirect()->route('idm.index')->with('success', 'Data IDM berhasil ditambahkan');
    }

    public function edit($id)
    {
        $idm = Idm::findOrFail($id);
        return view('admin.idm.edit', compact('idm'));
    }

    public function update(Request $request, $id)
    {
        $idm = Idm::findOrFail($id);

        $request->validate([
            'tahun' => 'required|numeric|unique:idms,tahun,' . $id,
            'iks' => 'required|numeric|min:0|max:1',
            'ike' => 'required|numeric|min:0|max:1',
            'ikl' => 'required|numeric|min:0|max:1',
            'status' => 'required',
        ]);

        $data = $request->all();

        // Hitung Ulang Nilai IDM
        $nilai_akhir = ($request->iks + $request->ike + $request->ikl) / 3;
        $data['nilai_idm'] = round($nilai_akhir, 4);

        $idm->update($data);

        return redirect()->route('idm.index')->with('success', 'Data IDM diperbarui');
    }

    public function destroy($id)
    {
        Idm::findOrFail($id)->delete();
        return redirect()->route('idm.index')->with('success', 'Data dihapus');
    }
}
