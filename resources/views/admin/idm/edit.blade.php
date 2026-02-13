<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('idm.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Skor IDM</h2>

        <form action="{{ route('idm.update', $idm->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Tahun</label>
                <input type="number" name="tahun" value="{{ $idm->tahun }}" class="input input-bordered" required>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold text-green-700">Skor IKS</label>
                    <input type="number" step="0.0001" min="0" max="1" name="iks" value="{{ $idm->iks }}" class="input input-bordered input-success" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold text-yellow-700">Skor IKE</label>
                    <input type="number" step="0.0001" min="0" max="1" name="ike" value="{{ $idm->ike }}" class="input input-bordered input-warning" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold text-blue-700">Skor IKL</label>
                    <input type="number" step="0.0001" min="0" max="1" name="ikl" value="{{ $idm->ikl }}" class="input input-bordered input-info" required>
                </div>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Status Desa</label>
                <select name="status" class="select select-bordered w-full" required>
                    <option value="Mandiri" {{ $idm->status == 'Mandiri' ? 'selected' : '' }}>Mandiri</option>
                    <option value="Maju" {{ $idm->status == 'Maju' ? 'selected' : '' }}>Maju</option>
                    <option value="Berkembang" {{ $idm->status == 'Berkembang' ? 'selected' : '' }}>Berkembang</option>
                    <option value="Tertinggal" {{ $idm->status == 'Tertinggal' ? 'selected' : '' }}>Tertinggal</option>
                    <option value="Sangat Tertinggal" {{ $idm->status == 'Sangat Tertinggal' ? 'selected' : '' }}>Sangat Tertinggal</option>
                </select>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
