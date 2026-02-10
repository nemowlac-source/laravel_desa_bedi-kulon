<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('apbd.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data APBD</h2>

        <form action="{{ route('apbd.update', $apbd->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Tahun</label>
                    <input type="number" name="tahun" value="{{ $apbd->tahun }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Jenis</label>
                    <select name="jenis" class="select select-bordered" required>
                        <option value="Pendapatan" {{ $apbd->jenis == 'Pendapatan' ? 'selected' : '' }}>Pendapatan</option>
                        <option value="Belanja" {{ $apbd->jenis == 'Belanja' ? 'selected' : '' }}>Belanja</option>
                        <option value="Pembiayaan" {{ $apbd->jenis == 'Pembiayaan' ? 'selected' : '' }}>Pembiayaan</option>
                    </select>
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Uraian / Kategori</label>
                <input type="text" name="kategori" value="{{ $apbd->kategori }}" class="input input-bordered" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="form-control">
                    <label class="label font-bold">Anggaran (Rp)</label>
                    <input type="number" name="anggaran" value="{{ $apbd->anggaran }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Realisasi (Rp)</label>
                    <input type="number" name="realisasi" value="{{ $apbd->realisasi }}" class="input input-bordered" required>
                </div>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
