<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('wajibpilih.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Wajib Pilih</h2>

        <form action="{{ route('wajibpilih.update', $wajibpilih->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Kategori</label>
                <select name="kategori" class="select select-bordered w-full" required>
                    <option value="Wajib Pilih Laki-laki" {{ $wajibpilih->kategori == 'Wajib Pilih Laki-laki' ? 'selected' : '' }}>Wajib Pilih Laki-laki</option>
                    <option value="Wajib Pilih Perempuan" {{ $wajibpilih->kategori == 'Wajib Pilih Perempuan' ? 'selected' : '' }}>Wajib Pilih Perempuan</option>
                    <option value="Belum Wajib Pilih" {{ $wajibpilih->kategori == 'Belum Wajib Pilih' ? 'selected' : '' }}>Belum Wajib Pilih</option>
                </select>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Orang</label>
                <input type="number" name="jumlah" value="{{ $wajibpilih->jumlah }}" class="input input-bordered" required>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
