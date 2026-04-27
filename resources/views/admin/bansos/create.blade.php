<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('bansos.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Penerima Bansos</h2>

        @if ($errors->any())
        <div class="alert alert-error mb-4 text-white">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('bansos.store') }}" method="POST" enctype="multipart/form-data" id="upload-form">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Nama Penerima</label>
                    <input type="text" name="nama_penerima" class="input input-bordered" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">NIK (Opsional)</label>
                    <input type="text" name="nik" class="input input-bordered" placeholder="Nomor Induk Kependudukan">
                </div>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Alamat</label>
                <input type="text" name="alamat" class="input input-bordered" placeholder="Dusun / RT / RW" required>
            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Jenis Bantuan</label>
                <select name="jenis_bantuan" class="select select-bordered" required>
                    <option value="" disabled selected>Pilih Jenis Bantuan...</option>
                    <option value="BLT Dana Desa">BLT Dana Desa</option>
                    <option value="PKH (Program Keluarga Harapan)">PKH</option>
                    <option value="BPNT (Sembako)">BPNT (Sembako)</option>
                    <option value="BST (Bantuan Sosial Tunai)">BST</option>
                    <option value="Bedah Rumah">Bedah Rumah</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="form-control mb-6">
                <label class="label font-bold">Foto Dokumentasi (Opsional)</label>
                <input type="file" name="foto" id="file-input" class="file-input file-input-bordered w-full" accept="image/jpeg,image/jpg,image/png,image/webp">
                <label class="label">
                    <span class="label-text-alt text-gray-500">Bukti penyerahan bantuan. Maksimal 64MB (JPEG, PNG, WebP)</span>
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

            <!-- Loading State -->
            <div id="loading-state" class="hidden mb-4">
                <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                    <span class="loading loading-spinner loading-md text-primary"></span>
                    <div class="flex-1">
                        <p class="font-semibold text-blue-800">Mengunggah data bansos...</p>
                        <p class="text-xs text-blue-600">File besar membutuhkan waktu lebih lama. Mohon tunggu.</p>
                    </div>
                </div>
                <progress class="progress progress-primary w-full mt-2" value="0" max="100" id="upload-progress"></progress>
            </div>

            <button class="btn btn-primary w-full text-white" id="btn-submit">Simpan Data</button>
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
