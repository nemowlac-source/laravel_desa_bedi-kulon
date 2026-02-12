<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('kawin.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Status Perkawinan</h2>

        <form action="{{ route('kawin.store') }}" method="POST">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Status</label>
                <select name="status" class="select select-bordered w-full" required>
                    <option value="" disabled selected>Pilih Status...</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Cerai Hidup">Cerai Hidup</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                    <option value="Kawin Tercatat">Kawin Tercatat</option>
                    <option value="Kawin Tidak Tercatat">Kawin Tidak Tercatat</option>
                </select>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Penduduk</label>
                <input type="number" name="jumlah" class="input input-bordered" placeholder="0" required>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
