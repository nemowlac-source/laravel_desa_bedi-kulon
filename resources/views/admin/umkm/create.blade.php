<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('umkm.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-4">Tambah Produk Baru</h2>

        <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-control mb-3">
                <label class="label font-bold">Nama Produk</label>
                <input type="text" name="nama_produk" class="input input-bordered" placeholder="Contoh: Keripik Singkong" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-3">
                <div class="form-control">
                    <label class="label font-bold">Harga (Rp)</label>
                    <input type="number" name="harga" class="input input-bordered" placeholder="15000" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Nama Penjual</label>
                    <input type="text" name="penjual" class="input input-bordered" placeholder="Ibu Siti" required>
                </div>
            </div>

            <div class="form-control mb-3">
                <label class="label font-bold">No HP (WhatsApp)</label>
                <input type="number" name="no_hp" class="input input-bordered" placeholder="081234567890" required>
                <span class="text-xs text-gray-500 mt-1">Nomor ini akan digunakan untuk tombol pembelian via WA.</span>
            </div>

            <div class="form-control mb-3">
                <label class="label font-bold">Foto Produk</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*" required>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Deskripsi</label>
                <textarea name="deskripsi" class="textarea textarea-bordered h-24" placeholder="Jelaskan detail produk..."></textarea>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Produk</button>
        </form>
    </div>
</x-layouts.admin>
