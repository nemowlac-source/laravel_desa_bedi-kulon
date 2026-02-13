<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SdgsDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SdgsDesaController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil Tahun dari Request atau Default Tahun Ini
        $tahun_pilih = $request->get('tahun', date('Y'));

        // 2. Ambil List Tahun untuk Dropdown Filter
        $list_tahun = SdgsDesa::select('tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');

        // 3. Ambil Data SDGs Sesuai Tahun yang Dipilih
        $sdgs = SdgsDesa::where('tahun', $tahun_pilih)
            ->orderBy('goal_number', 'asc')
            ->get();
        return view('admin.sdgs.index', compact('sdgs', 'list_tahun', 'tahun_pilih'));
    }

    public function create()
    {
        return view('admin.sdgs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|integer|min:2000|max:2099', // Validasi tahun
            'goal_number' => [
                'required',
                'integer',
                // Validasi Unik Bersyarat:
                // Goal number harus unik HANYA JIKA tahunnya sama.
                // Jadi Goal 1 th 2024 boleh ada, Goal 1 th 2025 boleh ada.
                // Tapi Goal 1 th 2024 TIDAK BOLEH ada dua kali.
                Rule::unique('sdgs_desas')->where(function ($query) use ($request) {
                    return $query->where('tahun', $request->tahun);
                }),
            ],
            'title' => 'required|string',
            'score' => 'required|numeric|min:0|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ], [
            // Custom Error Message (Opsional)
            'goal_number.unique' => 'Goal nomor ini sudah ada untuk tahun tersebut.',
        ]);

        $data = $request->except(['image']);

        // Proses Upload Gambar
        if ($request->hasFile('image')) {
            // Simpan ke folder 'sdgs-images' di disk public
            $data['image'] = $request->file('image')->store('sdgs-images', 'public');
        }

        SdgsDesa::create($data);

        // Redirect kembali ke index DENGAN filter tahun yang baru diinput
        return redirect()->route('sdgs.index', ['tahun' => $request->tahun])
            ->with('success', 'Goal SDGs berhasil ditambahkan');
    }

    public function edit($id)
    {
        $sdgs = SdgsDesa::findOrFail($id);
        return view('admin.sdgs.edit', compact('sdgs'));
    }

    public function update(Request $request, $id)
    {
        $sdgs = SdgsDesa::findOrFail($id);

        $request->validate([
            'tahun'       => 'required|integer',
            'goal_number' => 'required|integer',
            'title'       => 'required',
            'score'       => 'required|numeric|min:0|max:100',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        // Ambil semua data input KECUALI image (karena image butuh proses khusus)
        $data = $request->except(['image']);

        // LOGIKA UPLOAD GAMBAR YANG BENAR
        if ($request->hasFile('image')) {

            // 1. Hapus gambar lama jika ada (Optional, tapi disarankan)
            if ($sdgs->image && Storage::exists('public/' . $sdgs->image)) {
                Storage::delete('public/' . $sdgs->image);
            }

            // 2. Upload gambar baru ke folder 'sdgs-images' di disk 'public'
            // Fungsi store() akan mengembalikan path file (misal: "sdgs-images/namafileacak.jpg")
            $path = $request->file('image')->store('sdgs-images', 'public');

            // 3. Masukkan path yang baru didapat ke dalam array $data
            $data['image'] = $path;
        }

        // Update database
        $sdgs->update($data);

        return redirect()->route('sdgs.index', ['tahun' => $request->tahun])
            ->with('success', 'Data Goal berhasil diperbarui');
    }

    public function destroy($id)
    {
        $sdgs = SdgsDesa::findOrFail($id);
        if ($sdgs->image) {
            Storage::disk('public')->delete($sdgs->image);
        }
        $sdgs->delete();
        return redirect()->route('sdgs.index')->with('success', 'Data dihapus');
    }
}
