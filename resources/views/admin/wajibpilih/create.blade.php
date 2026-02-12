<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('wajibpilih.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Data Wajib Pilih</h2>

        <form action="{{ route('wajibpilih.store') }}" method="POST">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Kategori</label>
                <select name="kategori" class="select select-bordered w-full" required>
                    <option value="" disabled selected>Pilih Kategori...</option>
                    <option value="Wajib Pilih Laki-laki">Wajib Pilih Laki-laki</option>
                    <option value="Wajib Pilih Perempuan">Wajib Pilih Perempuan</option>
                    <option value="Belum Wajib Pilih">Belum Wajib Pilih</option>
                </select>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Orang</label>
                <input type="number" name="jumlah" class="input input-bordered" placeholder="0" required>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
