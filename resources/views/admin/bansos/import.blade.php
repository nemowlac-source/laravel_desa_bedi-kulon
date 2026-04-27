<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('bansos.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-2">Import Data Bansos dari Excel</h2>
        <p class="text-gray-500 text-sm mb-6">Upload file Excel (.xlsx / .xls / .csv) sesuai template.</p>

        @if(session('error'))
        <div class="alert alert-error mb-4 text-white">{{ session('error') }}</div>
        @endif

        <form action="{{ route('bansos.import-store') }}" method="POST" enctype="multipart/form-data" id="import-form">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Pilih File Excel</label>
                <input type="file" name="file" class="file-input file-input-bordered w-full" accept=".xlsx,.xls,.csv" required>
                @error('file')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-control mb-4">
                <label class="flex items-center gap-3 cursor-pointer p-3 rounded-lg hover:bg-red-50 transition-colors">
                    <input type="checkbox" name="clear_existing" id="clear-existing" class="checkbox checkbox-sm checkbox-error" value="1">
                    <div>
                        <span class="label-text font-semibold text-red-700">Hapus data bansos yang sudah ada sebelum import</span>
                        <p class="text-xs text-red-500">Data lama akan dihapus secara permanen!</p>
                    </div>
                </label>
            </div>

            <div id="confirm-clear-box" class="form-control mb-6 hidden">
                <label class="flex items-center gap-3 cursor-pointer p-3 rounded-lg bg-red-100 border border-red-300">
                    <input type="checkbox" name="clear_confirm" id="clear-confirm" class="checkbox checkbox-sm checkbox-error">
                    <span class="label-text font-bold text-red-800">Saya yakin ingin menghapus semua data bansos yang sudah ada</span>
                </label>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn btn-primary text-white flex-1">🚀 Import Data</button>
                <a href="{{ route('bansos.download-template') }}" class="btn btn-outline btn-secondary">📥 Download Template</a>
            </div>
        </form>
    </div>

    <script>
        const clearExisting = document.getElementById('clear-existing');
        const confirmBox = document.getElementById('confirm-clear-box');
        const clearConfirm = document.getElementById('clear-confirm');
        const form = document.getElementById('import-form');

        clearExisting.addEventListener('change', function() {
            if (this.checked) {
                confirmBox.classList.remove('hidden');
            } else {
                confirmBox.classList.add('hidden');
                clearConfirm.checked = false;
            }
        });

        form.addEventListener('submit', function(e) {
            if (clearExisting.checked && !clearConfirm.checked) {
                e.preventDefault();
                alert('Anda harus mencentang konfirmasi penghapusan untuk melanjutkan!');
                clearConfirm.focus();
            }
        });

    </script>
</x-layouts.admin>
