<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('berita.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-4">Edit Berita</h2>

        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Berita</label>
                <input type="text" name="judul" value="{{ $berita->judul }}" class="input input-bordered text-lg" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Ganti Gambar (Opsional)</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*">
                <div class="mt-2">
                    <span class="text-xs">Gambar saat ini:</span><br>
                    <img src="{{ asset('storage/' . $berita->gambar) }}" class="h-20 rounded border">
                </div>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Isi Berita</label>
                <textarea name="isi" class="textarea textarea-bordered h-64 text-base" required>{{ $berita->isi }}</textarea>
            </div>

            <button class="btn btn-warning w-full text-white">Update Berita</button>
        </form>
    </div>
</x-layouts.admin>
