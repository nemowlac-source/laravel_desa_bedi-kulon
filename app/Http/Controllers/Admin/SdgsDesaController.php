<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SdgsDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SdgsDesaController extends Controller
{
    public function index()
    {
        // Urutkan berdasarkan nomor goal (1, 2, 3...)
        $sdgs = SdgsDesa::orderBy('goal_number', 'asc')->get();
        return view('admin.sdgs.index', compact('sdgs'));
    }

    public function create()
    {
        return view('admin.sdgs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'goal_number' => 'required|numeric|unique:sdgs_desas,goal_number',
            'title' => 'required',
            'score' => 'required|numeric|min:0|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:2048', // SVG bagus untuk icon
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sdgs', 'public');
        }

        SdgsDesa::create($data);

        return redirect()->route('sdgs.index')->with('success', 'Goal SDGs berhasil ditambahkan');
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
            'goal_number' => 'required|numeric|unique:sdgs_desas,goal_number,' . $id,
            'title' => 'required',
            'score' => 'required|numeric|min:0|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($sdgs->image) {
                Storage::disk('public')->delete($sdgs->image);
            }
            $data['image'] = $request->file('image')->store('sdgs', 'public');
        }

        $sdgs->update($data);

        return redirect()->route('sdgs.index')->with('success', 'Data berhasil diperbarui');
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
