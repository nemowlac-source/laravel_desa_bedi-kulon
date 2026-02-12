<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('usia.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Umur</h2>

        <form action="{{ route('usia.update', $usium->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Rentang Umur</label>
                <input type="text" name="kelompok_umur" value="{{ $usium->kelompok_umur }}" class="input input-bordered" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="form-control">
                    <label class="label font-bold text-blue-600">Jumlah Laki-laki</label>
                    <input type="number" name="laki_laki" value="{{ $usium->laki_laki }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold text-pink-600">Jumlah Perempuan</label>
                    <input type="number" name="perempuan" value="{{ $usium->perempuan }}" class="input input-bordered" required>
                </div>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
