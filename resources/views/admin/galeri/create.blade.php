<x-layouts.admin>

    <div class="mb-6">
        <a href="{{ route('galeri.index') }}" class="btn btn-ghost gap-2">
            <i class="ph ph-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card bg-white shadow-lg border border-gray-100 max-w-2xl mx-auto">
        <div class="card-body">
            <h2 class="card-title text-2xl mb-6">Upload Foto Baru</h2>

            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text font-bold">Judul Foto</span>
                    </label>
                    <input type="text" name="judul" placeholder="Contoh: Kerja Bakti RT 01" class="input input-bordered w-full" required />
                </div>

                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text font-bold">Pilih Foto</span>
                    </label>
                    <input type="file" name="gambar" class="file-input file-input-bordered w-full" accept="image/*" required />
                    <label class="label">
                        <span class="label-text-alt text-gray-500">Maksimal ukuran 2MB (JPG, PNG)</span>
                    </label>
                </div>

                <div class="form-control w-full mb-6">
                    <label class="label">
                        <span class="label-text font-bold">Deskripsi Singkat (Opsional)</span>
                    </label>
                    <textarea name="deskripsi" class="textarea textarea-bordered h-24" placeholder="Ceritakan sedikit tentang foto ini..."></textarea>
                </div>

                <div class="flex justify-end gap-2">
                    <button type="reset" class="btn btn-ghost">Reset</button>
                    <button type="submit" class="btn btn-primary text-white">
                        <i class="ph ph-upload-simple text-lg"></i> Upload Sekarang
                    </button>
                </div>

            </form>
        </div>
    </div>

</x-layouts.admin>
