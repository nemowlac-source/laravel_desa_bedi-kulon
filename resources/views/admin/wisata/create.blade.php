<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('wisata.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Destinasi Wisata</h2>

        <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Wisata</label>
                <input type="text" name="nama_wisata" class="input input-bordered" placeholder="Contoh: Pantai Biru" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Harga Tiket</label>
                    <input type="text" name="harga_tiket" class="input input-bordered" placeholder="Contoh: Rp 5.000 / Gratis">
                </div>
                <div class="form-control">
                    <label class="label font-bold">Jam Buka</label>
                    <input type="text" name="jam_buka" class="input input-bordered" placeholder="Contoh: 08:00 - 17:00">
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Alamat / Lokasi</label>
                <input type="text" name="alamat" class="input input-bordered" placeholder="Contoh: Dusun Selatan, RT 05" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Foto Wisata</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*" required>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Deskripsi</label>
                <textarea name="deskripsi" class="textarea textarea-bordered h-32" required></textarea>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Wisata</button>
        </form>
    </div>
</x-layouts.admin>
