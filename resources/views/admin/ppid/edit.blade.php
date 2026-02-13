<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('ppid.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Edit Dokumen PPID</h2>

        <form action="{{ route('ppid.update', $ppid->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Informasi</label>
                <input type="text" name="judul" value="{{ $ppid->judul }}" class="input input-bordered" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Kategori Informasi</label>
                <select name="kategori" class="select select-bordered" required>
                    <option value="Berkala" {{ $ppid->kategori == 'Berkala' ? 'selected' : '' }}>Informasi Berkala</option>
                    <option value="Serta Merta" {{ $ppid->kategori == 'Serta Merta' ? 'selected' : '' }}>Informasi Serta Merta</option>
                    <option value="Setiap Saat" {{ $ppid->kategori == 'Setiap Saat' ? 'selected' : '' }}>Informasi Setiap Saat</option>
                    <option value="Dikecualikan" {{ $ppid->kategori == 'Dikecualikan' ? 'selected' : '' }}>Informasi Dikecualikan</option>
                </select>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Deskripsi</label>
                <textarea name="deskripsi" class="textarea textarea-bordered h-24">{{ $ppid->deskripsi }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="form-control">
                    <label class="label font-bold">Tanggal</label>
                    <input type="date" name="tanggal_upload" value="{{ $ppid->tanggal_upload }}" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Ganti File (Opsional)</label>
                    <input type="file" name="file" class="file-input file-input-bordered w-full">
                    <div class="mt-2">
                        <a href="{{ asset('storage/' . $ppid->file) }}" target="_blank" class="text-blue-600 text-sm underline">Lihat File Saat Ini</a>
                    </div>
                </div>
            </div>

            <button class="btn btn-warning w-full text-white">Update Dokumen</button>
        </form>
    </div>
</x-layouts.admin>
