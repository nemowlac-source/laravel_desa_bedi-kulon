<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('perangkat.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Perangkat</h2>

        <form action="{{ route('perangkat.update', $perangkat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Lengkap</label>
                <input type="text" name="nama" value="{{ $perangkat->nama }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Jabatan</label>
                <input type="text" name="jabatan" value="{{ $perangkat->jabatan }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">NIAP / NIP</label>
                <input type="text" name="niap" value="{{ $perangkat->niap }}" class="input input-bordered">
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Ganti Foto (Opsional)</label>
                <input type="file" name="foto" class="file-input file-input-bordered" accept="image/*">

                <div class="avatar mt-4">
                    <div class="w-20 rounded">
                        <img src="{{ asset('storage/' . $perangkat->foto) }}" />
                    </div>
                </div>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
