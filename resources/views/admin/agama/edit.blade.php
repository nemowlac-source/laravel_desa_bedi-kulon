<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('agama.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Data Agama</h2>

        <form action="{{ route('agama.update', $agama->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Agama</label>
                <select name="agama" class="select select-bordered w-full" required>
                    <option value="Islam" {{ $agama->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ $agama->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Katolik" {{ $agama->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="Hindu" {{ $agama->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Buddha" {{ $agama->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="Konghucu" {{ $agama->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    <option value="Kepercayaan Lainnya" {{ $agama->agama == 'Kepercayaan Lainnya' ? 'selected' : '' }}>Kepercayaan Lainnya</option>
                </select>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Jumlah Pemeluk</label>
                <input type="number" name="jumlah" value="{{ $agama->jumlah }}" class="input input-bordered" required>
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
