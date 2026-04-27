<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use App\Imports\PendudukImport;
use App\Exports\PendudukTemplateExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PendudukController extends Controller
{
    public function index()
    {
        // Urutkan berdasarkan wilayah
        $penduduks = Penduduk::orderBy('nama_wilayah', 'asc')->get();
        return view('admin.penduduk.index', compact('penduduks'));
    }

    public function create()
    {
        return view('admin.penduduk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wilayah' => 'required',
            'kk' => 'required|numeric',
            'laki_laki' => 'required|numeric',
            'perempuan' => 'required|numeric',
        ]);

        Penduduk::create($request->all());

        return redirect()->route('penduduk.index')->with('success', 'Data kependudukan berhasil ditambahkan');
    }

    public function import()
    {
        return view('admin.penduduk.import');
    }

    public function importStore(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        try {
            DB::beginTransaction();

            // Jika opsi clear_existing diaktifkan, hapus data lama
            if ($request->has('clear_existing') && $request->has('clear_confirm')) {
                Penduduk::query()->delete();
            }

            // Import file Excel
            Excel::import(new PendudukImport, $request->file('file'));

            DB::commit();

            return redirect()->route('penduduk.index')
                ->with('success', 'Data penduduk berhasil diimport dari Excel');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Gagal mengimport file: ' . $e->getMessage());
        }
    }

    public function downloadTemplate()
    {
        return Excel::download(new PendudukTemplateExport, 'Template_Penduduk.xlsx');
    }

    public function edit($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        return view('admin.penduduk.edit', compact('penduduk'));
    }

    public function update(Request $request, $id)
    {
        $penduduk = Penduduk::findOrFail($id);

        $request->validate([
            'nama_wilayah' => 'required',
            'kk' => 'required|numeric',
        ]);

        $penduduk->update($request->all());

        return redirect()->route('penduduk.index')->with('success', 'Data diperbarui');
    }

    public function destroy($id)
    {
        Penduduk::findOrFail($id)->delete();
        return redirect()->route('penduduk.index')->with('success', 'Data dihapus');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:penduduks,id',
        ]);

        $count = Penduduk::whereIn('id', $request->ids)->delete();

        return redirect()->route('penduduk.index')
            ->with('success', $count . ' data penduduk berhasil dihapus');
    }
}
