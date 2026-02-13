<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('stunting.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Balita</h2>

        <form action="{{ route('stunting.update', $stunting->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Nama Anak</label>
                    <input type="text" name="nama_anak" value="{{ $stunting->nama_anak }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Nama Orang Tua</label>
                    <input type="text" name="nama_orangtua" value="{{ $stunting->nama_orangtua }}" class="input input-bordered" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="select select-bordered" required>
                        <option value="L" {{ $stunting->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $stunting->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Umur (Bulan)</label>
                    <input type="number" name="umur_bulan" value="{{ $stunting->umur_bulan }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Posyandu</label>
                    <input type="text" name="posyandu" value="{{ $stunting->posyandu }}" class="input input-bordered">
                </div>
            </div>

            <div class="divider">Data Pengukuran</div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Tinggi (cm)</label>
                    <input type="number" step="0.1" name="tinggi_badan" value="{{ $stunting->tinggi_badan }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Berat (kg)</label>
                    <input type="number" step="0.1" name="berat_badan" value="{{ $stunting->berat_badan }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Tanggal Ukur</label>
                    <input type="date" name="tanggal_ukur" value="{{ $stunting->tanggal_ukur }}" class="input input-bordered" required>
                </div>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Status</label>
                <select name="status" class="select select-bordered select-primary" required>
                    <option value="Normal" {{ $stunting->status == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Kurang Gizi" {{ $stunting->status == 'Kurang Gizi' ? 'selected' : '' }}>Kurang Gizi</option>
                    <option value="Stunting" {{ $stunting->status == 'Stunting' ? 'selected' : '' }}>Stunting</option>
                    <option value="Sangat Pendek" {{ $stunting->status == 'Sangat Pendek' ? 'selected' : '' }}>Sangat Pendek</option>
                </select>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
