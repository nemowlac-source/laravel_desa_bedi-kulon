<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('berita.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-4">Tulis Berita Baru</h2>

        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Berita</label>
                <input type="text" name="judul" class="input input-bordered text-lg" placeholder="Contoh: Kerja Bakti Massal..." required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Gambar Utama</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*" required>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Isi Berita</label>
                <textarea name="isi" class="textarea textarea-bordered h-64 text-base" placeholder="Tulis isi berita di sini..." required></textarea>
            </div>

            <button class="btn btn-primary w-full text-white">Terbitkan Berita</button>
        </form>
    </div>
</x-layouts.admin>
