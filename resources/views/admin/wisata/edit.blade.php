<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('wisata.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Wisata</h2>

        <form action="{{ route('wisata.update', $wisata->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Wisata</label>
                <input type="text" name="nama_wisata" value="{{ $wisata->nama_wisata }}" class="input input-bordered" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Harga Tiket</label>
                    <input type="text" name="harga_tiket" value="{{ $wisata->harga_tiket }}" class="input input-bordered">
                </div>
                <div class="form-control">
                    <label class="label font-bold">Jam Buka</label>
                    <input type="text" name="jam_buka" value="{{ $wisata->jam_buka }}" class="input input-bordered">
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Alamat</label>
                <input type="text" name="alamat" value="{{ $wisata->alamat }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Ganti Foto (Opsional)</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*">
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $wisata->gambar) }}" class="h-24 rounded">
                </div>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Deskripsi</label>
                <textarea name="deskripsi" class="textarea textarea-bordered h-32" required>{{ $wisata->deskripsi }}</textarea>
            </div>

            <button class="btn btn-warning w-full text-white">Update Wisata</button>
        </form>
    </div>
</x-layouts.admin>
