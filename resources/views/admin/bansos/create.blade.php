<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('bansos.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Penerima Bansos</h2>

        <form action="{{ route('bansos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Nama Penerima</label>
                    <input type="text" name="nama_penerima" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">NIK (Opsional)</label>
                    <input type="text" name="nik" class="input input-bordered" placeholder="Nomor Induk Kependudukan">
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Alamat</label>
                <input type="text" name="alamat" class="input input-bordered" placeholder="Dusun / RT / RW" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Jenis Bantuan</label>
                <select name="jenis_bantuan" class="select select-bordered" required>
                    <option value="" disabled selected>Pilih Jenis Bantuan...</option>
                    <option value="BLT Dana Desa">BLT Dana Desa</option>
                    <option value="PKH (Program Keluarga Harapan)">PKH</option>
                    <option value="BPNT (Sembako)">BPNT (Sembako)</option>
                    <option value="BST (Bantuan Sosial Tunai)">BST</option>
                    <option value="Bedah Rumah">Bedah Rumah</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Foto Dokumentasi (Opsional)</label>
                <input type="file" name="foto" class="file-input file-input-bordered w-full">
                <span class="text-xs text-gray-500 mt-1">Bukti penyerahan bantuan. Max 2MB.</span>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
