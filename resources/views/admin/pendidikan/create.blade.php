<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('pendidikan.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Data Pendidikan</h2>

        <form action="{{ route('pendidikan.store') }}" method="POST">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Tingkat Pendidikan</label>
                <input type="text" name="tingkat_pendidikan" class="input input-bordered" placeholder="Contoh: Tamat SD/Sederajat" required>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Orang</label>
                <input type="number" name="jumlah" class="input input-bordered" placeholder="0" required>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
