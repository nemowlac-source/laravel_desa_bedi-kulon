<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('sdgs.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Goal SDGs</h2>

        <form action="{{ route('sdgs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Nomor Goal (1-18)</label>
                <input type="number" name="goal_number" class="input input-bordered" placeholder="1" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Goal</label>
                <input type="text" name="title" class="input input-bordered" placeholder="Contoh: Desa Tanpa Kemiskinan" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Nilai Capaian (0 - 100)</label>
                <input type="number" step="0.01" name="score" class="input input-bordered" placeholder="75.5" required>
                <input type="range" min="0" max="100" value="0" class="range range-xs range-success mt-2" oninput="this.previousElementSibling.value = this.value">
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Deskripsi (Opsional)</label>
                <textarea name="description" class="textarea textarea-bordered h-24"></textarea>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Icon SDGs (Upload)</label>
                <input type="file" name="image" class="file-input file-input-bordered w-full">
                <span class="text-xs text-gray-500 mt-1">Format PNG/JPG/SVG. Disarankan background transparan.</span>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
</x-layouts.admin>
