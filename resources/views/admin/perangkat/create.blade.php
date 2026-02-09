<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('perangkat.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Perangkat Desa</h2>

        <form action="{{ route('perangkat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Lengkap & Gelar</label>
                <input type="text" name="nama" class="input input-bordered" placeholder="Contoh: Budi Santoso, S.Pd." required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Jabatan</label>
                <input type="text" name="jabatan" class="input input-bordered" placeholder="Contoh: Kepala Desa" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">NIAP / NIP (Opsional)</label>
                <input type="text" name="niap" class="input input-bordered" placeholder="Nomor Induk...">
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Foto Resmi</label>
                <input type="file" name="foto" class="file-input file-input-bordered" accept="image/*" required>
                <span class="text-xs text-gray-500 mt-1">Gunakan foto formal (background merah/biru disarankan).</span>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
