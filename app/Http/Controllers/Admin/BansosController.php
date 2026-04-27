<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bansos;
use App\Imports\BansosImport;
use App\Exports\BansosTemplateExport;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class BansosController extends Controller
{
    protected ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

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
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100',
        ], [
            'foto.image' => 'File yang diunggah harus berupa gambar.',
            'foto.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'foto.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'foto.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $result = $this->imageService->storeWithThumbnail(
                $request->file('foto'),
                'bansos',
                'bansos'
            );

            $data['foto_thumbnail'] = $result['thumbnail_path'];
            $data['foto_master'] = $result['master_path'];
            unset($data['foto']);
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
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:64000|dimensions:min_width=100,min_height=100',
        ], [
            'foto.image' => 'File yang diunggah harus berupa gambar.',
            'foto.mimes' => 'Format gambar harus JPEG, PNG, atau WebP.',
            'foto.max' => 'Ukuran foto terlalu besar, maksimal adalah 64MB.',
            'foto.dimensions' => 'Ukuran gambar minimal 100x100 pixel.',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $this->imageService->deleteFromModel($bansos, 'foto_thumbnail', 'foto_master');

            $result = $this->imageService->storeWithThumbnail(
                $request->file('foto'),
                'bansos',
                'bansos'
            );

            $data['foto_thumbnail'] = $result['thumbnail_path'];
            $data['foto_master'] = $result['master_path'];
            unset($data['foto']);
        }

        $bansos->update($data);

        return redirect()->route('bansos.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $bansos = Bansos::findOrFail($id);

        $this->imageService->deleteFromModel($bansos, 'foto_thumbnail', 'foto_master');

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
            $this->imageService->deleteFromModel($item, 'foto_thumbnail', 'foto_master');
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
