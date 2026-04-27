<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ppid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PermohonanInformasi;

class PpidController extends Controller
{
    public function index()
    {
        $ppid = Ppid::latest('tanggal_upload')->get();
        return view('admin.ppid.index', compact('ppid'));
    }

    public function create()
    {
        return view('admin.ppid.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx,jpg,png|max:5120',
            'tanggal_upload' => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('ppid_docs', 'public');
        }

        Ppid::create($data);

        return redirect()->route('ppid.index')->with('success', 'Dokumen berhasil dipublikasikan');
    }

    public function edit($id)
    {
        $ppid = Ppid::findOrFail($id);
        return view('admin.ppid.edit', compact('ppid'));
    }

    public function update(Request $request, $id)
    {
        $ppid = Ppid::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'file' => 'mimes:pdf,doc,docx,xls,xlsx,jpg,png|max:5120',
            'tanggal_upload' => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('file')) {
            if ($ppid->file) {
                Storage::disk('public')->delete($ppid->file);
            }
            $data['file'] = $request->file('file')->store('ppid_docs', 'public');
        }

        $ppid->update($data);

        return redirect()->route('ppid.index')->with('success', 'Dokumen berhasil diperbarui');
    }

    public function destroy($id)
    {
        $ppid = Ppid::findOrFail($id);

        if ($ppid->file) {
            Storage::disk('public')->delete($ppid->file);
        }

        $ppid->delete();
        return redirect()->route('ppid.index')->with('success', 'Dokumen dihapus');
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:ppids,id',
        ]);

        $items = Ppid::whereIn('id', $request->ids)->get();

        foreach ($items as $item) {
            if ($item->file) {
                Storage::disk('public')->delete($item->file);
            }
            $item->delete();
        }

        return redirect()->route('ppid.index')
            ->with('success', $items->count() . ' dokumen berhasil dihapus');
    }

    public function permohonanMasuk()
    {
        $permohonan = PermohonanInformasi::latest()->paginate(10);
        return view('admin.ppid.permohonan-masuk', compact('permohonan'));
    }

    public function destroyPermohonan($id)
    {
        PermohonanInformasi::findOrFail($id)->delete();
        return back()->with('success', 'Data permohonan informasi berhasil dihapus.');
    }
}
