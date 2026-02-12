<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('pekerjaan.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Pekerjaan</h2>

        <form action="{{ route('pekerjaan.update', $pekerjaan->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Pekerjaan</label>
                <input type="text" name="nama_pekerjaan" value="{{ $pekerjaan->nama_pekerjaan }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Orang</label>
                <input type="number" name="jumlah" value="{{ $pekerjaan->jumlah }}" class="input input-bordered" required>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
