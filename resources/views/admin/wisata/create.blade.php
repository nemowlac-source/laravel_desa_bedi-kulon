<x-layouts.admin>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <style>
        /* Penyesuaian desain agar menyatu dengan border input DaisyUI */
        .ql-toolbar.ql-snow {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            border-color: oklch(var(--b3));
            background-color: #ffffff;
            font-family: inherit;
        }

        .ql-container.ql-snow {
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            border-color: oklch(var(--b3));
            background-color: #ffffff;
            min-height: 250px;
            /* Sedikit lebih pendek dari berita agar form tidak terlalu panjang */
            font-family: inherit;
            font-size: 1rem;
        }

        .ql-editor {
            min-height: 250px;
        }

        .ql-editor.ql-blank::before {
            font-style: normal;
            color: #9ca3af;
        }

    </style>

    <div class="mb-4">
        <a href="{{ route('wisata.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Destinasi Wisata</h2>

        <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data" id="form-wisata">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Wisata</label>
                <input type="text" name="nama_wisata" class="input input-bordered" placeholder="Contoh: Pantai Biru" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Harga Tiket</label>
                    <input type="text" name="harga_tiket" class="input input-bordered" placeholder="Contoh: Rp 5.000 / Gratis">
                </div>
                <div class="form-control">
                    <label class="label font-bold">Jam Buka</label>
                    <input type="text" name="jam_buka" class="input input-bordered" placeholder="Contoh: 08:00 - 17:00">
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Alamat / Lokasi</label>
                <input type="text" name="alamat" class="input input-bordered" placeholder="Contoh: Dusun Selatan, RT 05" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Foto Wisata</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*" required>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Deskripsi</label>

                <div id="editor-container"></div>

                <input type="hidden" name="deskripsi" id="deskripsi_wisata">
            </div>

            <button type="submit" class="btn btn-primary w-full text-white">Simpan Wisata</button>
        </form>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Quill
            var quill = new Quill('#editor-container', {
                theme: 'snow'
                , placeholder: 'Tulis deskripsi wisata di sini...'
                , modules: {
                    toolbar: [
                        [{
                            'header': [1, 2, 3, false]
                        }]
                        , ['bold', 'italic', 'underline', 'strike']
                        , [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }]
                        , ['link', 'blockquote']
                        , ['clean'] // Tombol hapus format
                    ]
                }
            });

            // Sinkronisasi data saat tombol submit ditekan
            var form = document.getElementById('form-wisata');
            var inputDeskripsi = document.getElementById('deskripsi_wisata');

            form.addEventListener('submit', function(e) {
                // Ambil struktur HTML dari editor
                var htmlContent = quill.root.innerHTML;

                // Validasi sederhana jika editor kosong
                if (htmlContent === '<p><br></p>' || htmlContent.trim() === '') {
                    e.preventDefault(); // Hentikan pengiriman form
                    alert('Deskripsi wisata tidak boleh kosong.');
                    return false;
                }

                // Masukkan nilai HTML ke input tersembunyi
                inputDeskripsi.value = htmlContent;
            });
        });

    </script>
</x-layouts.admin>
