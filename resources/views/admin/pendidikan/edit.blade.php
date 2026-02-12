<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('pendidikan.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Pendidikan</h2>

        <form action="{{ route('pendidikan.update', $pendidikan->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Tingkat Pendidikan</label>
                <input type="text" name="tingkat_pendidikan" value="{{ $pendidikan->tingkat_pendidikan }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Orang</label>
                <input type="number" name="jumlah" value="{{ $pendidikan->jumlah }}" class="input input-bordered" required>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
