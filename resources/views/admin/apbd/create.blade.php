<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('apbd.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Data APBD</h2>

        <form action="{{ route('apbd.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Tahun Anggaran</label>
                    <input type="number" name="tahun" class="input input-bordered" value="{{ date('Y') }}" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Jenis Anggaran</label>
                    <select name="jenis" class="select select-bordered" required>
                        <option value="Pendapatan">Pendapatan (Uang Masuk)</option>
                        <option value="Belanja">Belanja (Pengeluaran)</option>
                        <option value="Pembiayaan">Pembiayaan (SiLPA dll)</option>
                    </select>
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Uraian / Kategori</label>
                <input type="text" name="kategori" class="input input-bordered" placeholder="Contoh: Dana Desa / Bidang Pembangunan Jalan" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="form-control">
                    <label class="label font-bold">Jumlah Anggaran (Rp)</label>
                    <input type="number" name="anggaran" class="input input-bordered" placeholder="0" required>
                    <span class="text-xs text-gray-500 mt-1">Isi angka saja tanpa titik/koma.</span>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Realisasi (Rp)</label>
                    <input type="number" name="realisasi" class="input input-bordered" placeholder="0" required>
                    <span class="text-xs text-gray-500 mt-1">Berapa yang sudah terpakai/diterima?</span>
                </div>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
