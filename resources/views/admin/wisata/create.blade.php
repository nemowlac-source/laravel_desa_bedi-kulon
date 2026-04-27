<x-layouts.admin>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <style>
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
        <a href="{{ route('wisata.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-3xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Destinasi Wisata</h2>

        @if ($errors->any())
        <div class="alert alert-error mb-4 text-white">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

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
                <input type="file" name="gambar" id="file-input" class="file-input file-input-bordered" accept="image/jpeg,image/jpg,image/png,image/webp" required>
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
                <label class="label font-bold">Deskripsi</label>
                <div id="editor-container"></div>
                <input type="hidden" name="deskripsi" id="deskripsi_wisata">
            </div>

            <!-- Loading State -->
            <div id="loading-state" class="hidden mb-4">
                <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                    <span class="loading loading-spinner loading-md text-primary"></span>
                    <div class="flex-1">
                        <p class="font-semibold text-blue-800">Mengunggah wisata...</p>
                        <p class="text-xs text-blue-600">File besar membutuhkan waktu lebih lama. Mohon tunggu.</p>
                    </div>
                </div>
                <progress class="progress progress-primary w-full mt-2" value="0" max="100" id="upload-progress"></progress>
            </div>

            <button type="submit" class="btn btn-primary w-full text-white" id="btn-submit">Simpan Wisata</button>
        </form>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
                        , ['clean']
                    ]
                }
            });

            var form = document.getElementById('form-wisata');
            var inputDeskripsi = document.getElementById('deskripsi_wisata');
            var fileInput = document.getElementById('file-input');
            var fileInfo = document.getElementById('file-info');
            var fileName = document.getElementById('file-name');
            var fileSize = document.getElementById('file-size');
            var fileWarning = document.getElementById('file-warning');
            var loadingState = document.getElementById('loading-state');
            var btnSubmit = document.getElementById('btn-submit');
            var uploadProgress = document.getElementById('upload-progress');

            const MAX_SIZE = 64 * 1024 * 1024;

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
                var htmlContent = quill.root.innerHTML;
                if (htmlContent === '<p><br></p>' || htmlContent.trim() === '') {
                    e.preventDefault();
                    alert('Deskripsi wisata tidak boleh kosong.');
                    return false;
                }
                inputDeskripsi.value = htmlContent;

                const file = fileInput.files[0];
                if (file && file.size > MAX_SIZE) {
                    e.preventDefault();
                    alert('Ukuran file terlalu besar! Maksimal 64MB.');
                    return;
                }

                loadingState.classList.remove('hidden');
                btnSubmit.disabled = true;
                btnSubmit.classList.add('btn-disabled');
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
