<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('kawin.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Status Perkawinan</h2>

        <form action="{{ route('kawin.update', $kawin->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Status</label>
                <select name="status" class="select select-bordered w-full" required>
                    <option value="Belum Kawin" {{ $kawin->status == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                    <option value="Kawin" {{ $kawin->status == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                    <option value="Cerai Hidup" {{ $kawin->status == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                    <option value="Cerai Mati" {{ $kawin->status == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                    <option value="Kawin Tercatat" {{ $kawin->status == 'Kawin Tercatat' ? 'selected' : '' }}>Kawin Tercatat</option>
                    <option value="Kawin Tidak Tercatat" {{ $kawin->status == 'Kawin Tidak Tercatat' ? 'selected' : '' }}>Kawin Tidak Tercatat</option>
                </select>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Penduduk</label>
                <input type="number" name="jumlah" value="{{ $kawin->jumlah }}" class="input input-bordered" required>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
