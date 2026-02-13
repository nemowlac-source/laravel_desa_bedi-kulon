<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('stunting.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Input Data Balita</h2>

        <form action="{{ route('stunting.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Nama Anak</label>
                    <input type="text" name="nama_anak" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Nama Orang Tua (Ibu)</label>
                    <input type="text" name="nama_orangtua" class="input input-bordered" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="select select-bordered" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Umur (Bulan)</label>
                    <input type="number" name="umur_bulan" class="input input-bordered" placeholder="Contoh: 12" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Posyandu</label>
                    <input type="text" name="posyandu" class="input input-bordered" placeholder="Nama Posyandu">
                </div>
            </div>

            <div class="divider">Data Pengukuran</div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Tinggi Badan (cm)</label>
                    <input type="number" step="0.1" name="tinggi_badan" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Berat Badan (kg)</label>
                    <input type="number" step="0.1" name="berat_badan" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Tanggal Ukur</label>
                    <input type="date" name="tanggal_ukur" class="input input-bordered" value="{{ date('Y-m-d') }}" required>
                </div>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Status Gizi / Pertumbuhan</label>
                <select name="status" class="select select-bordered select-primary" required>
                    <option value="Normal">Normal</option>
                    <option value="Kurang Gizi">Kurang Gizi</option>
                    <option value="Stunting">Stunting (Pendek)</option>
                    <option value="Sangat Pendek">Sangat Pendek (Severely Stunted)</option>
                </select>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
