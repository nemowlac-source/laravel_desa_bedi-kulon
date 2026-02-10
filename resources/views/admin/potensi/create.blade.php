<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('potensi.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Potensi Desa</h2>

        <form action="{{ route('potensi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Potensi</label>
                <input type="text" name="judul" class="input input-bordered" placeholder="Contoh: Kebun Teh Kemuning" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Lokasi (Dusun/RW)</label>
                <input type="text" name="lokasi" class="input input-bordered" placeholder="Contoh: Dusun Utara, RW 01">
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Gambar Utama</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*" required>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Deskripsi Lengkap</label>
                <textarea name="deskripsi" class="textarea textarea-bordered h-32" placeholder="Jelaskan tentang potensi ini..." required></textarea>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
