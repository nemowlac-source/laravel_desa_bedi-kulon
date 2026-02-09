<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('umkm.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-4">Edit Produk</h2>

        <form action="{{ route('umkm.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-control mb-3">
                <label class="label font-bold">Nama Produk</label>
                <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" class="input input-bordered" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-3">
                <div class="form-control">
                    <label class="label font-bold">Harga</label>
                    <input type="number" name="harga" value="{{ $product->harga }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Nama Penjual</label>
                    <input type="text" name="penjual" value="{{ $product->penjual }}" class="input input-bordered" required>
                </div>
            </div>

            <div class="form-control mb-3">
                <label class="label font-bold">No HP</label>
                <input type="number" name="no_hp" value="{{ $product->no_hp }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-3">
                <label class="label font-bold">Ganti Foto (Opsional)</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*">
                <span class="text-xs text-gray-500">Biarkan kosong jika tidak ingin mengganti foto.</span>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Deskripsi</label>
                <textarea name="deskripsi" class="textarea textarea-bordered h-24">{{ $product->deskripsi }}</textarea>
            </div>

            <button class="btn btn-warning w-full text-white">Update Produk</button>
        </form>
    </div>
</x-layouts.admin>
