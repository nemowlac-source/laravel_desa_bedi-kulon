<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('wajibpilih.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Wajib Pemilih</h2>

        <form action="{{ route('wajibpilih.update', $wajibpilih->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Tahun</label>
                <input type="number" name="tahun" value="{{ $wajibpilih->tahun }}" class="input input-bordered" required min="1900" max="{{ date('Y') }}">
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Wajib Pemilih</label>
                <input type="number" name="jumlah_pemilih" value="{{ $wajibpilih->jumlah_pemilih }}" class="input input-bordered" required>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
