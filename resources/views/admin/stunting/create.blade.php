<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('stunting.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Input Statistik Stunting Tahunan </h2>

        <form action="{{ route('stunting.store') }}" method="POST">
            @csrf

            <div class="form-control mb-6">
                <label class="label font-bold">Tahun Anggaran</label>
                <input type="number" name="tahun" class="input input-bordered w-full md:w-1/3" value="{{ date('Y') }}" required>
                <span class="text-xs text-gray-500 mt-1">Data akan diperbarui jika tahun yang sama sudah ada </span>
            </div>

            <div class="divider text-primary font-bold">Data Sasaran & Risiko</div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="form-control">
                    <label class="label font-bold">Keluarga Sasaran</label>
                    <input type="number" name="keluarga_sasaran" class="input input-bordered" placeholder="0" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Keluarga Berisiko Stunting</label>
                    <input type="number" name="berisiko" class="input input-bordered" placeholder="0" required>
                </div>
            </div>

            <div class="divider text-primary font-bold">Data Balita & Anak</div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="form-control">
                    <label class="label font-bold">Jumlah Baduta (0-23 Bulan)</label>
                    <input type="number" name="baduta" class="input input-bordered" placeholder="0" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Jumlah Balita (0-59 Bulan)</label>
                    <input type="number" name="balita" class="input input-bordered" placeholder="0" required>
                </div>
            </div>

            <div class="divider text-primary font-bold">Data Pasangan Usia Subur (PUS)</div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="form-control">
                    <label class="label font-bold">Total PUS</label>
                    <input type="number" name="pus" class="input input-bordered" placeholder="0" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">PUS Hamil</label>
                    <input type="number" name="pus_hamil" class="input input-bordered" placeholder="0" required>
                </div>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Statistik Tahunan </button>
        </form>
    </div>
</x-layouts.admin>
