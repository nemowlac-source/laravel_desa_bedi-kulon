<x-layouts.admin>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <style>
        /* Penyesuaian desain agar menyatu dengan border input DaisyUI */
        .ql-toolbar.ql-snow {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            border-color: oklch(var(--b3));
            /* Menyesuaikan border standar DaisyUI */
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
        <h2 class="text-xl font-bold mb-4 text-gray-800">Tulis Berita Baru</h2>

        @if ($errors->any())
        <div class="alert alert-error mb-4 text-white">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" id="form-berita">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold text-gray-700">Judul Berita</label>
                <input type="text" name="judul" class="input input-bordered text-lg bg-white" placeholder="Contoh: Kerja Bakti Massal..." required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold text-gray-700">Gambar Utama</label>
                <input type="file" name="gambar" id="file-input" class="file-input file-input-bordered bg-white" accept="image/jpeg,image/jpg,image/png,image/webp" required>
                <label class="label">
                    <span class="label-text-alt text-gray-500">Maksimal ukuran 64MB (JPEG, PNG, WebP)</span>
                </label>
                <div id="file-info" class="hidden mt-2 p-3 rounded-lg bg-blue-50 text-sm">
                    <div class="flex justify-between">
                        <span id="file-name" class="font-medium text-blue-800"></span>
                        <span id="file-size" class="font-bold text-blue-600"></span>
                    </div>
                    <div id="file-warning" class="hidden mt-1 text-red-600 font-semibold text-xs">
                        ⚠️ Ukuran file melebihi 64MB!
                    </div>
                </div>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold text-gray-700">Isi Berita</label>

                <div id="editor-container"></div>

                <input type="hidden" name="isi" id="isi_berita">
            </div>

            <!-- Loading State -->
            <div id="loading-state" class="hidden mb-4">
                <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                    <span class="loading loading-spinner loading-md text-primary"></span>
                    <div class="flex-1">
                        <p class="font-semibold text-blue-800">Mengunggah berita...</p>
                        <p class="text-xs text-blue-600">File besar membutuhkan waktu lebih lama. Mohon tunggu.</p>
                    </div>
                </div>
                <progress class="progress progress-primary w-full mt-2" value="0" max="100" id="upload-progress"></progress>
            </div>

            <button type="submit" class="btn btn-primary w-full text-white" id="btn-submit">Terbitkan Berita</button>
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
            var fileInput = document.getElementById('file-input');
            var fileInfo = document.getElementById('file-info');
            var fileName = document.getElementById('file-name');
            var fileSize = document.getElementById('file-size');
            var fileWarning = document.getElementById('file-warning');
            var loadingState = document.getElementById('loading-state');
            var btnSubmit = document.getElementById('btn-submit');
            var uploadProgress = document.getElementById('upload-progress');

            const MAX_SIZE = 64 * 1024 * 1024; // 64MB

            fileInput.addEventListener('change', function() {
                const file = this.files[0];
                if (!file) {
                    fileInfo.classList.add('hidden');
                    return;
                }

                fileInfo.classList.remove('hidden');
                fileName.textContent = file.name;
                fileSize.textContent = formatBytes(file.size);

                if (file.size > MAX_SIZE) {
                    fileWarning.classList.remove('hidden');
                    btnSubmit.disabled = true;
                    btnSubmit.classList.add('btn-disabled');
                } else {
                    fileWarning.classList.add('hidden');
                    btnSubmit.disabled = false;
                    btnSubmit.classList.remove('btn-disabled');
                }
            });

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

                const file = fileInput.files[0];
                if (file && file.size > MAX_SIZE) {
                    e.preventDefault();
                    alert('Ukuran file terlalu besar! Maksimal 64MB.');
                    return;
                }

                // Show loading state
                loadingState.classList.remove('hidden');
                btnSubmit.disabled = true;
                btnSubmit.classList.add('btn-disabled');

                // Simulate progress
                let progress = 0;
                const interval = setInterval(() => {
                    progress += Math.random() * 15;
                    if (progress > 90) progress = 90;
                    uploadProgress.value = progress;
                }, 500);

                form.dataset.progressInterval = interval;
            });

            function formatBytes(bytes, decimals = 2) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const dm = decimals < 0 ? 0 : decimals;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
            }
        });

    </script>
</x-layouts.admin>
