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
            min-height: 300px;
            font-family: inherit;
            font-size: 1rem;
        }

        .ql-editor {
            min-height: 300px;
        }

        .ql-editor.ql-blank::before {
            font-style: normal;
            color: #9ca3af;
        }

    </style>

    <div class="mb-4">
        <a href="{{ route('berita.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-4">Edit Berita</h2>

        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" id="form-berita">
            @csrf @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Berita</label>
                <input type="text" name="judul" value="{{ $berita->judul }}" class="input input-bordered text-lg" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Ganti Gambar (Opsional)</label>
                <input type="file" name="gambar" class="file-input file-input-bordered" accept="image/*">
                <div class="mt-2">
                    <span class="text-xs">Gambar saat ini:</span><br>
                    <img src="{{ asset('storage/' . $berita->gambar) }}" class="h-20 rounded border">
                </div>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Isi Berita</label>

                <div id="editor-container">{!! $berita->isi !!}</div>

                <input type="hidden" name="isi" id="isi_berita">
            </div>

            <button type="submit" class="btn btn-warning w-full text-white">Update Berita</button>
        </form>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Quill
            var quill = new Quill('#editor-container', {
                theme: 'snow'
                , placeholder: 'Tulis isi berita di sini...'
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
            var form = document.getElementById('form-berita');
            var inputIsi = document.getElementById('isi_berita');

            form.addEventListener('submit', function(e) {
                // Ambil struktur HTML dari editor
                var htmlContent = quill.root.innerHTML;

                // Validasi sederhana jika editor kosong
                if (htmlContent === '<p><br></p>' || htmlContent.trim() === '') {
                    e.preventDefault(); // Hentikan pengiriman form
                    alert('Isi berita tidak boleh kosong.');
                    return false;
                }

                // Masukkan nilai HTML ke input tersembunyi
                inputIsi.value = htmlContent;
            });
        });

    </script>
</x-layouts.admin>
