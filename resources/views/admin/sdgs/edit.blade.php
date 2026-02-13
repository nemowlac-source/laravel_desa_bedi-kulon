<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('sdgs.index', ['tahun' => $sdgs->tahun]) }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow-xl max-w-2xl mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Edit Goal SDGs</h2>
            <div class="badge badge-primary text-white">Goal #{{ $sdgs->goal_number }}</div>
        </div>

        <form action="{{ route('sdgs.update', $sdgs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Nomor Goal (1-18)</label>
                    <input type="number" name="goal_number" value="{{ $sdgs->goal_number }}" class="input input-bordered" min="1" max="18" required>
                </div>

                <div class="form-control">
                    <label class="label font-bold">Tahun Data</label>
                    <input type="number" name="tahun" value="{{ $sdgs->tahun }}" class="input input-bordered" min="2020" max="2099" required>
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Goal</label>
                <input type="text" name="title" value="{{ $sdgs->title }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Nilai Capaian (%)</label>
                <div class="flex items-center gap-4">
                    <input type="number" id="scoreInput" step="0.01" name="score" value="{{ $sdgs->score }}" class="input input-bordered w-32 font-bold text-center" required>

                    <input type="range" id="scoreRange" min="0" max="100" step="0.01" value="{{ $sdgs->score }}" class="range range-success flex-1">
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Deskripsi</label>
                <textarea name="description" class="textarea textarea-bordered h-24">{{ $sdgs->description }}</textarea>
            </div>

            <div class="form-control mb-8">
                <label class="label font-bold">Ganti Icon (Opsional)</label>
                <div class="flex items-center gap-4 border p-3 rounded-lg bg-gray-50">
                    @if($sdgs->image)
                    <div class="avatar">
                        <div class="w-16 rounded bg-white border p-1">
                            <img src="{{ asset('storage/' . $sdgs->image) }}" alt="Icon Saat Ini">
                        </div>
                    </div>
                    <div class="text-sm text-gray-500">
                        <p>Icon saat ini.</p>
                        <p>Biarkan kosong jika tidak ingin mengubah.</p>
                    </div>
                    @else
                    <span class="text-gray-400 text-sm">Belum ada icon</span>
                    @endif
                </div>
                <input type="file" name="image" class="file-input file-input-bordered w-full mt-2">
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn btn-warning flex-1 text-white">Simpan Perubahan</button>
            </div>
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
