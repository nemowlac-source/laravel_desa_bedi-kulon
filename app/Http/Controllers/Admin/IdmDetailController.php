<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Idm;
use App\Models\IdmDetail;
use Illuminate\Http\Request;

class IdmDetailController extends Controller
{
    // Menampilkan daftar indikator untuk IDM Tahun tertentu
    public function index($idm_id)
    {
        $idm = Idm::findOrFail($idm_id);
        $details = $idm->details()->get(); // Ambil rinciannya

        return view('admin.idm.detail.index', compact('idm', 'details'));
    }

    public function create($idm_id)
    {
        $idm = Idm::findOrFail($idm_id);
        return view('admin.idm.detail.create', compact('idm'));
    }

    public function store(Request $request, $idm_id)
    {
        $request->validate([
            'indikator' => 'required',
            'skor' => 'required|numeric',
            'keterangan' => 'required',
            'nilai_plus' => 'required|numeric',
        ]);

        $data = $request->all();
        $data['idm_id'] = $idm_id; // Masukkan ID tahun otomatis

        IdmDetail::create($data);

        return redirect()->route('idm.detail.index', $idm_id)->with('success', 'Indikator berhasil ditambahkan');
    }

    public function edit($id)
    {
        $detail = IdmDetail::findOrFail($id);
        return view('admin.idm.detail.edit', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $detail = IdmDetail::findOrFail($id);

        $request->validate([
            'indikator' => 'required',
            'skor' => 'required|numeric',
            'keterangan' => 'required',
            'nilai_plus' => 'required|numeric',
        ]);

        $detail->update($request->all());

        return redirect()->route('idm.detail.index', $detail->idm_id)->with('success', 'Data diperbarui');
    }

    public function destroy($id)
    {
        $detail = IdmDetail::findOrFail($id);
        $idm_id = $detail->idm_id; // Simpan IDM ID dulu buat redirect
        $detail->delete();

        return redirect()->route('idm.detail.index', $idm_id)->with('success', 'Data dihapus');
    }
}
