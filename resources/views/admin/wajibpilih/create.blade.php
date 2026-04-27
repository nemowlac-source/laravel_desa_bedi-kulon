<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('wajibpilih.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Data Wajib Pemilih</h2>

        <form action="{{ route('wajibpilih.store') }}" method="POST">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Tahun</label>
                <input type="number" name="tahun" class="input input-bordered" placeholder="2026" required min="1900" max="{{ date('Y') }}">
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Wajib Pemilih</label>
                <input type="number" name="jumlah_pemilih" class="input input-bordered" placeholder="0" required>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
