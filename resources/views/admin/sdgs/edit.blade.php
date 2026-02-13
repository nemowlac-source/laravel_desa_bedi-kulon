<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('sdgs.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Goal SDGs</h2>

        <form action="{{ route('sdgs.update', $sdgs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Nomor Goal</label>
                <input type="number" name="goal_number" value="{{ $sdgs->goal_number }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Goal</label>
                <input type="text" name="title" value="{{ $sdgs->title }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Nilai Capaian (%)</label>
                <input type="number" step="0.01" name="score" value="{{ $sdgs->score }}" class="input input-bordered" required>
                <input type="range" min="0" max="100" value="{{ $sdgs->score }}" class="range range-xs range-success mt-2" oninput="this.previousElementSibling.value = this.value">
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Deskripsi</label>
                <textarea name="description" class="textarea textarea-bordered h-24">{{ $sdgs->description }}</textarea>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Ganti Icon</label>
                @if($sdgs->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $sdgs->image) }}" class="w-16 h-16 object-contain bg-gray-100 rounded p-1">
                </div>
                @endif
                <input type="file" name="image" class="file-input file-input-bordered w-full">
            </div>

            <button class="btn btn-warning w-full text-white">Update Data</button>
        </form>
    </div>
</x-layouts.admin>
