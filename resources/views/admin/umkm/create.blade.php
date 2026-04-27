<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('umkm.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-4">Tambah Produk Baru</h2>

        @if ($errors->any())
        <div class="alert alert-error mb-4 text-white">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data" id="upload-form">
            @csrf
            <div class="form-control mb-3">
                <label class="label font-bold">Nama Produk</label>
                <input type="text" name="nama_produk" class="input input-bordered" placeholder="Contoh: Keripik Singkong" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-3">
                <div class="form-control">
                    <label class="label font-bold">Harga (Rp)</label>
                    <input type="number" name="harga" class="input input-bordered" placeholder="15000" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Nama Penjual</label>
                    <input type="text" name="penjual" class="input input-bordered" placeholder="Ibu Siti" required>
                </div>
            </div>

            <div class="form-control mb-3">
                <label class="label font-bold">No HP (WhatsApp)</label>
                <input type="number" name="no_hp" class="input input-bordered" placeholder="081234567890" required>
                <span class="text-xs text-gray-500 mt-1">Nomor ini akan digunakan untuk tombol pembelian via WA.</span>
            </div>

            <div class="form-control mb-3">
                <label class="label font-bold">Foto Produk</label>
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
                <textarea name="deskripsi" class="textarea textarea-bordered h-24" placeholder="Jelaskan detail produk..."></textarea>
            </div>

            <!-- Loading State -->
            <div id="loading-state" class="hidden mb-4">
                <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                    <span class="loading loading-spinner loading-md text-primary"></span>
                    <div class="flex-1">
                        <p class="font-semibold text-blue-800">Mengunggah produk...</p>
                        <p class="text-xs text-blue-600">File besar membutuhkan waktu lebih lama. Mohon tunggu.</p>
                    </div>
                </div>
                <progress class="progress progress-primary w-full mt-2" value="0" max="100" id="upload-progress"></progress>
            </div>

            <button class="btn btn-primary w-full text-white" id="btn-submit">Simpan Produk</button>
        </form>
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
            const uploadProgress = document.getElementById('upload-progress');

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
