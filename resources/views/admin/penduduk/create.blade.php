<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('penduduk.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-4xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Data Wilayah</h2>

        <form action="{{ route('penduduk.store') }}" method="POST">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Wilayah / Dusun / RT</label>
                <input type="text" name="nama_wilayah" class="input input-bordered" placeholder="Contoh: Dusun Krajan RW 01" required>
            </div>

            <div class="divider text-primary">Data Kependudukan</div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Jumlah KK</label>
                    <input type="number" name="kk" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Jumlah Laki-laki</label>
                    <input type="number" name="laki_laki" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Jumlah Perempuan</label>
                    <input type="number" name="perempuan" class="input input-bordered" required>
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Penduduk Sementara (Domisili)</label>
                <input type="number" name="penduduk_sementara" class="input input-bordered" value="0">
            </div>

            <div class="divider text-primary">Data Mutasi (Bulan Ini)</div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                <div class="form-control">
                    <label class="label text-sm">Kelahiran</label>
                    <input type="number" name="kelahiran" class="input input-bordered input-sm" value="0">
                </div>
                <div class="form-control">
                    <label class="label text-sm">Kematian</label>
                    <input type="number" name="kematian" class="input input-bordered input-sm" value="0">
                </div>
                <div class="form-control">
                    <label class="label text-sm">Pindah Masuk</label>
                    <input type="number" name="mutasi_masuk" class="input input-bordered input-sm" value="0">
                </div>
                <div class="form-control">
                    <label class="label text-sm">Pindah Keluar</label>
                    <input type="number" name="mutasi_keluar" class="input input-bordered input-sm" value="0">
                </div>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
