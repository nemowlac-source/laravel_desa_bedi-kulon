<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('usia.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Kelompok Umur</h2>

        <form action="{{ route('usia.store') }}" method="POST">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Rentang Umur</label>
                <input type="text" name="kelompok_umur" class="input input-bordered" placeholder="Contoh: 0-4" required>
                <span class="text-xs text-gray-500 mt-1">Cukup tulis angkanya saja, misal: 0-4, 5-9, atau 75+</span>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="form-control">
                    <label class="label font-bold text-blue-600">Jumlah Laki-laki</label>
                    <input type="number" name="laki_laki" class="input input-bordered" placeholder="0" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold text-pink-600">Jumlah Perempuan</label>
                    <input type="number" name="perempuan" class="input input-bordered" placeholder="0" required>
                </div>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
