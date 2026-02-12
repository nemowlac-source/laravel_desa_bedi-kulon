<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('agama.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Data Agama</h2>

        <form action="{{ route('agama.store') }}" method="POST">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Agama</label>
                <select name="agama" class="select select-bordered w-full" required>
                    <option value="" disabled selected>Pilih Agama...</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Kepercayaan Lainnya">Kepercayaan Lainnya</option>
                </select>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Pemeluk</label>
                <input type="number" name="jumlah" class="input input-bordered" placeholder="0" required>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
