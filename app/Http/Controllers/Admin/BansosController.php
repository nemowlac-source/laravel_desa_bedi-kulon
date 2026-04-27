<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bansos;
use App\Imports\BansosImport;
use App\Exports\BansosTemplateExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

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

        if ($request->hasFile('foto')) {
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

        if ($bansos->foto) {
            Storage::disk('public')->delete($bansos->foto);
        }

        $bansos->delete();
        return redirect()->route('bansos.index')->with('success', 'Data dihapus');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:bansos,id',
        ]);

        $items = Bansos::whereIn('id', $request->ids)->get();

        foreach ($items as $item) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $item->delete();
        }

        return redirect()->route('bansos.index')
            ->with('success', $items->count() . ' data bansos berhasil dihapus');
    }

    public function import()
    {
        return view('admin.bansos.import');
    }

    public function importStore(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv'
        ]);

        try {
            if ($request->has('clear_existing') && $request->has('clear_confirm')) {
                DB::transaction(function () {
                    Bansos::query()->delete();
                });
            }

            Excel::import(new BansosImport, $request->file('file'));

            return redirect()->route('bansos.index')
                ->with('success', 'Data bansos berhasil diimport dari Excel');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal mengimport file: ' . $e->getMessage());
        }
    }

    public function downloadTemplate()
    {
        return Excel::download(new BansosTemplateExport, 'Template_Bansos.xlsx');
    }
}
