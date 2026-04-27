<x-layouts.admin>

    <div class="mb-6">
        <a href="{{ route('galeri.index') }}" class="btn btn-ghost gap-2">
            <i class="ph ph-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card bg-white shadow-lg border border-gray-100 max-w-2xl mx-auto">
        <div class="card-body">
            <h2 class="card-title text-2xl mb-6">Upload Foto Baru</h2>

            @if ($errors->any())
            <div class="alert alert-error mb-4 text-white">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data" id="upload-form">
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
                    <input type="file" name="gambar" id="file-input" class="file-input file-input-bordered w-full" accept="image/jpeg,image/jpg,image/png,image/webp" required />
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

                <div class="form-control w-full mb-6">
                    <label class="label">
                        <span class="label-text font-bold">Deskripsi Singkat (Opsional)</span>
                    </label>
                    <textarea name="deskripsi" class="textarea textarea-bordered h-24" placeholder="Ceritakan sedikit tentang foto ini..."></textarea>
                </div>

                <!-- Loading State -->
                <div id="loading-state" class="hidden mb-4">
                    <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                        <span class="loading loading-spinner loading-md text-primary"></span>
                        <div class="flex-1">
                            <p class="font-semibold text-blue-800">Mengunggah foto...</p>
                            <p class="text-xs text-blue-600">File besar membutuhkan waktu lebih lama. Mohon tunggu.</p>
                        </div>
                    </div>
                    <progress class="progress progress-primary w-full mt-2" value="0" max="100" id="upload-progress"></progress>
                </div>

                <div class="flex justify-end gap-2">
                    <button type="reset" class="btn btn-ghost" id="btn-reset">Reset</button>
                    <button type="submit" class="btn btn-primary text-white" id="btn-submit">
                        <i class="ph ph-upload-simple text-lg"></i> Upload Sekarang
                    </button>
                </div>

            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('upload-form');
            const fileInput = document.getElementById('file-input');
            const fileInfo = document.getElementById('file-info');
            const fileName = document.getElementById('file-name');
            const fileSize = document.getElementById('file-size');
            const fileWarning = document.getElementById('file-warning');
            const loadingState = document.getElementById('loading-state');
            const btnSubmit = document.getElementById('btn-submit');
            const btnReset = document.getElementById('btn-reset');
            const uploadProgress = document.getElementById('upload-progress');

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
                btnReset.disabled = true;
                btnReset.classList.add('btn-disabled');

                // Simulate progress (since we can't track actual upload progress easily without XMLHttpRequest)
                let progress = 0;
                const interval = setInterval(() => {
                    progress += Math.random() * 15;
                    if (progress > 90) progress = 90;
                    uploadProgress.value = progress;
                }, 500);

                // Store interval to clear later if needed
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
