<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('idm.detail.index', $idm->id) }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-4xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Indikator IDM {{ $idm->tahun }}</h2>

        <form action="{{ route('idm.detail.store', $idm->id) }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                <div class="col-span-2 form-control">
                    <label class="label font-bold">Indikator IDM</label>
                    <input type="text" name="indikator" class="input input-bordered" placeholder="Contoh: Skor Dokter" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Skor</label>
                    <input type="number" name="skor" class="input input-bordered" placeholder="0" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Nilai Plus (+)</label>
                    <input type="number" step="0.0001" name="nilai_plus" class="input input-bordered" placeholder="0.0000" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Keterangan</label>
                    <textarea name="keterangan" class="textarea textarea-bordered h-24" placeholder="Contoh: Jumlah Dokter Tidak ada" required></textarea>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Kegiatan yang dapat dilakukan</label>
                    <textarea name="kegiatan" class="textarea textarea-bordered h-24" placeholder="Contoh: Pengadaan Min 1 org Dokter"></textarea>
                </div>
            </div>

            <div class="divider text-sm text-gray-500">Yang Dapat Melaksanakan Kegiatan (Isi Nama Instansi)</div>

            <div class="grid grid-cols-2 md:grid-cols-6 gap-2 mb-6">
                <div class="form-control">
                    <label class="label text-xs">Pusat</label>
                    <input type="text" name="pelaksana_pusat" class="input input-bordered input-sm">
                </div>
                <div class="form-control">
                    <label class="label text-xs">Provinsi</label>
                    <input type="text" name="pelaksana_provinsi" class="input input-bordered input-sm">
                </div>
                <div class="form-control">
                    <label class="label text-xs">Kabupaten</label>
                    <input type="text" name="pelaksana_kabupaten" class="input input-bordered input-sm" placeholder="Dinkes">
                </div>
                <div class="form-control">
                    <label class="label text-xs">Desa</label>
                    <input type="text" name="pelaksana_desa" class="input input-bordered input-sm">
                </div>
                <div class="form-control">
                    <label class="label text-xs">CSR</label>
                    <input type="text" name="pelaksana_csr" class="input input-bordered input-sm">
                </div>
                <div class="form-control">
                    <label class="label text-xs">Lainnya</label>
                    <input type="text" name="pelaksana_lainnya" class="input input-bordered input-sm" placeholder="BPJS">
                </div>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Indikator</button>
        </form>
    </div>
</x-layouts.admin>
