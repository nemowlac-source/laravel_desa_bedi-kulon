<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('bansos.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Bansos</h2>

        <form action="{{ route('bansos.update', $bansos->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Nama Penerima</label>
                    <input type="text" name="nama_penerima" value="{{ $bansos->nama_penerima }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">NIK</label>
                    <input type="text" name="nik" value="{{ $bansos->nik }}" class="input input-bordered">
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Alamat</label>
                <input type="text" name="alamat" value="{{ $bansos->alamat }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Jenis Bantuan</label>
                <select name="jenis_bantuan" class="select select-bordered" required>
                    <option value="BLT Dana Desa" {{ $bansos->jenis_bantuan == 'BLT Dana Desa' ? 'selected' : '' }}>BLT Dana Desa</option>
                    <option value="PKH (Program Keluarga Harapan)" {{ $bansos->jenis_bantuan == 'PKH (Program Keluarga Harapan)' ? 'selected' : '' }}>PKH</option>
                    <option value="BPNT (Sembako)" {{ $bansos->jenis_bantuan == 'BPNT (Sembako)' ? 'selected' : '' }}>BPNT</option>
                    <option value="BST (Bantuan Sosial Tunai)" {{ $bansos->jenis_bantuan == 'BST (Bantuan Sosial Tunai)' ? 'selected' : '' }}>BST</option>
                    <option value="Bedah Rumah" {{ $bansos->jenis_bantuan == 'Bedah Rumah' ? 'selected' : '' }}>Bedah Rumah</option>
                    <option value="Lainnya" {{ $bansos->jenis_bantuan == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Foto Dokumentasi</label>
                @if($bansos->foto)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $bansos->foto) }}" alt="Current Foto" class="h-20 w-auto rounded">
                </div>
                @endif
                <input type="file" name="foto" class="file-input file-input-bordered w-full">
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
