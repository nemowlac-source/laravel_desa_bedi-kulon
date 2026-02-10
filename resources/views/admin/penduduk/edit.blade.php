<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('penduduk.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-4xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Wilayah</h2>

        <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Wilayah</label>
                <input type="text" name="nama_wilayah" value="{{ $penduduk->nama_wilayah }}" class="input input-bordered" required>
            </div>

            <div class="divider">Data Kependudukan</div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Jumlah KK</label>
                    <input type="number" name="kk" value="{{ $penduduk->kk }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Laki-laki</label>
                    <input type="number" name="laki_laki" value="{{ $penduduk->laki_laki }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Perempuan</label>
                    <input type="number" name="perempuan" value="{{ $penduduk->perempuan }}" class="input input-bordered" required>
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Penduduk Sementara</label>
                <input type="number" name="penduduk_sementara" value="{{ $penduduk->penduduk_sementara }}" class="input input-bordered">
            </div>

            <div class="divider">Data Mutasi</div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                <div class="form-control">
                    <label class="label text-sm">Kelahiran</label>
                    <input type="number" name="kelahiran" value="{{ $penduduk->kelahiran }}" class="input input-bordered input-sm">
                </div>
                <div class="form-control">
                    <label class="label text-sm">Kematian</label>
                    <input type="number" name="kematian" value="{{ $penduduk->kematian }}" class="input input-bordered input-sm">
                </div>
                <div class="form-control">
                    <label class="label text-sm">Pindah Masuk</label>
                    <input type="number" name="mutasi_masuk" value="{{ $penduduk->mutasi_masuk }}" class="input input-bordered input-sm">
                </div>
                <div class="form-control">
                    <label class="label text-sm">Pindah Keluar</label>
                    <input type="number" name="mutasi_keluar" value="{{ $penduduk->mutasi_keluar }}" class="input input-bordered input-sm">
                </div>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
