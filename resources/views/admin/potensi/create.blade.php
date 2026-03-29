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
        <a href="{{ route('potensi.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Potensi Desa</h2>

        <form action="{{ route('potensi.store') }}" method="POST" enctype="multipart/form-data" id="form-potensi">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Nama Potensi</label>
                <input type="text" name="judul" class="input input-bordered" placeholder="Contoh: Kebun Teh Kemuning" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Lokasi (Dusun/RW)</label>
                <input type="text" name="lokasi" class="input input-bordered" placeholder="Contoh: Dusun Utara, RW 01">
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Gambar Utama</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*" required>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Deskripsi Lengkap</label>

                <div id="editor-container"></div>

                <input type="hidden" name="deskripsi" id="deskripsi_potensi">
            </div>

            <button type="submit" class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Quill
            var quill = new Quill('#editor-container', {
                theme: 'snow'
                , placeholder: 'Jelaskan tentang potensi ini...'
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
            var form = document.getElementById('form-potensi');
            var inputDeskripsi = document.getElementById('deskripsi_potensi');

            form.addEventListener('submit', function(e) {
                // Ambil struktur HTML dari editor
                var htmlContent = quill.root.innerHTML;

                // Validasi sederhana jika editor kosong
                if (htmlContent === '<p><br></p>' || htmlContent.trim() === '') {
                    e.preventDefault(); // Hentikan pengiriman form
                    alert('Deskripsi potensi tidak boleh kosong.');
                    return false;
                }

                // Masukkan nilai HTML ke input tersembunyi
                inputDeskripsi.value = htmlContent;
            });
        });

    </script>
</x-layouts.admin>
