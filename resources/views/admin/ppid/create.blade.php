<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('ppid.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Upload Dokumen PPID</h2>

        <form action="{{ route('ppid.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Informasi</label>
                <input type="text" name="judul" class="input input-bordered" placeholder="Contoh: APBDes Tahun 2025" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Kategori Informasi</label>
                <select name="kategori" class="select select-bordered" required>
                    <option value="" disabled selected>Pilih Kategori...</option>
                    <option value="Berkala">Informasi Berkala</option>
                    <option value="Serta Merta">Informasi Serta Merta</option>
                    <option value="Setiap Saat">Informasi Setiap Saat</option>
                    <option value="Dikecualikan">Informasi Dikecualikan</option>
                </select>
                <span class="text-xs text-gray-500 mt-1">Sesuai UU KIP No 14 Tahun 2008</span>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Deskripsi (Opsional)</label>
                <textarea name="deskripsi" class="textarea textarea-bordered h-24"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="form-control">
                    <label class="label font-bold">Tanggal Upload</label>
                    <input type="date" name="tanggal_upload" class="input input-bordered" value="{{ date('Y-m-d') }}" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">File Dokumen</label>
                    <input type="file" name="file" class="file-input file-input-bordered w-full" required>
                    <span class="text-xs text-gray-500 mt-1">PDF, Word, Excel. Max 5MB.</span>
                </div>
            </div>

            <button class="btn btn-primary w-full text-white">Publikasikan</button>
        </form>
    </div>
</x-layouts.admin>
