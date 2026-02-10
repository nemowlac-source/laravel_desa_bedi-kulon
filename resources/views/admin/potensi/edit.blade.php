<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('potensi.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Potensi</h2>

        <form action="{{ route('potensi.update', $potensi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Potensi</label>
                <input type="text" name="judul" value="{{ $potensi->judul }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Lokasi</label>
                <input type="text" name="lokasi" value="{{ $potensi->lokasi }}" class="input input-bordered">
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Ganti Gambar (Opsional)</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*">
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $potensi->gambar) }}" class="h-20 rounded border">
                </div>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Deskripsi</label>
                <textarea name="deskripsi" class="textarea textarea-bordered h-32" required>{{ $potensi->deskripsi }}</textarea>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
