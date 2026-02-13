<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('sdgs.index', ['tahun' => request('tahun')]) }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow-xl max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Goal SDGs</h2>

        <form action="{{ route('sdgs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Tahun Data</label>
                    <input type="number" name="tahun" value="{{ request('tahun', date('Y')) }}" class="input input-bordered" min="2020" max="2099" required>
                </div>

                <div class="form-control">
                    <label class="label font-bold">Nomor Goal (1-18)</label>
                    <input type="number" name="goal_number" class="input input-bordered" placeholder="Contoh: 1" min="1" max="18" required>
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Goal</label>
                <input type="text" name="title" class="input input-bordered" placeholder="Contoh: Desa Tanpa Kemiskinan" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Nilai Capaian (0 - 100)</label>
                <div class="flex items-center gap-4">
                    <input type="number" id="scoreInput" step="0.01" name="score" class="input input-bordered w-32 font-bold text-center" placeholder="0.00" required>

                    <input type="range" id="scoreRange" min="0" max="100" step="0.01" value="0" class="range range-success flex-1">
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Deskripsi (Opsional)</label>
                <textarea name="description" class="textarea textarea-bordered h-24" placeholder="Penjelasan singkat tentang capaian goal ini..."></textarea>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Icon SDGs (Upload)</label>
                <div class="border border-dashed border-gray-300 rounded-lg p-4 text-center">
                    <input type="file" name="image" class="file-input file-input-bordered w-full max-w-xs">
                    <p class="text-xs text-gray-500 mt-2">Format: PNG/JPG/SVG. Disarankan background transparan.</p>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>

    <script>
        const scoreInput = document.getElementById('scoreInput');
        const scoreRange = document.getElementById('scoreRange');

        // Jika Slider digeser -> Update Input Angka
        scoreRange.addEventListener('input', function() {
            scoreInput.value = this.value;
        });

        // Jika Input Angka diketik -> Update Slider
        scoreInput.addEventListener('input', function() {
            scoreRange.value = this.value;
        });

    </script>
</x-layouts.admin>
