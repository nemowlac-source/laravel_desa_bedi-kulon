<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('idm.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Input Skor IDM</h2>

        <form action="{{ route('idm.store') }}" method="POST">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Tahun Anggaran</label>
                <input type="number" name="tahun" class="input input-bordered" value="{{ date('Y') }}" required>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold text-green-700">Skor IKS (Sosial)</label>
                    <input type="number" step="0.0001" min="0" max="1" name="iks" class="input input-bordered input-success" placeholder="0.xxxx" required>
                    <span class="text-xs text-gray-500 mt-1">Gunakan titik (.) untuk desimal</span>
                </div>
                <div class="form-control">
                    <label class="label font-bold text-yellow-700">Skor IKE (Ekonomi)</label>
                    <input type="number" step="0.0001" min="0" max="1" name="ike" class="input input-bordered input-warning" placeholder="0.xxxx" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold text-blue-700">Skor IKL (Lingkungan)</label>
                    <input type="number" step="0.0001" min="0" max="1" name="ikl" class="input input-bordered input-info" placeholder="0.xxxx" required>
                </div>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Status Desa</label>
                <select name="status" class="select select-bordered w-full" required>
                    <option value="" disabled selected>Pilih Status...</option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="Maju">Maju</option>
                    <option value="Berkembang">Berkembang</option>
                    <option value="Tertinggal">Tertinggal</option>
                    <option value="Sangat Tertinggal">Sangat Tertinggal</option>
                </select>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
