<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('penduduk.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-2">Import Data Penduduk dari Excel</h2>
        <p class="text-gray-500 text-sm mb-6">Upload file Excel dengan format yang sesuai untuk menambahkan data penduduk secara massal.</p>

        @if ($errors->any())
        <div class="alert alert-error mb-4 text-white">
            <div>
                <h3 class="font-bold">Kesalahan Validasi:</h3>
                <ul class="list-disc list-inside mt-2">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <div class="card bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
            <h3 class="font-bold text-blue-900 mb-2">Format File Excel:</h3>
            <p class="text-sm text-blue-800 mb-2">Kolom yang diperlukan (sesuai urutan):</p>
            <ol class="text-sm text-blue-800 list-decimal list-inside space-y-1">
                <li><strong>nama_wilayah</strong> - Nama wilayah/dusun (wajib)</li>
                <li><strong>kk</strong> - Jumlah kepala keluarga (wajib)</li>
                <li><strong>laki_laki</strong> - Jumlah penduduk laki-laki (wajib)</li>
                <li><strong>perempuan</strong> - Jumlah penduduk perempuan (wajib)</li>
                <li><strong>penduduk_sementara</strong> - Penduduk sementara (opsional)</li>
                <li><strong>mutasi_masuk</strong> - Mutasi masuk (opsional)</li>
                <li><strong>mutasi_keluar</strong> - Mutasi keluar (opsional)</li>
                <li><strong>kelahiran</strong> - Kelahiran (opsional)</li>
                <li><strong>kematian</strong> - Kematian (opsional)</li>
            </ol>
            <div class="mt-4">
                <a href="{{ route('penduduk.download-template') }}" class="btn btn-sm btn-info text-white">
                    Download Template Excel
                </a>
            </div>
        </div>

        <form action="{{ route('penduduk.import-store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control mb-6">
                <label class="label font-bold">Pilih File Excel</label>
                <input type="file" name="file" class="file-input file-input-bordered w-full" accept=".xlsx,.xls,.csv" required>
                <label class="label">
                    <span class="label-text-alt">Format: .xlsx, .xls, .csv</span>
                </label>
            </div>

            <div class="form-control mb-4">
                <label class="flex gap-2 cursor-pointer items-center">
                    <input type="checkbox" name="clear_existing" id="clear_existing" class="checkbox checkbox-warning" value="1">
                    <span class="label-text font-semibold">Hapus data penduduk yang sudah ada sebelum import</span>
                </label>
                <label class="label">
                    <span class="label-text-alt text-orange-600">⚠️ Hati-hati! Data lama akan dihapus jika opsi ini diaktifkan</span>
                </label>
            </div>

            <div class="form-control mb-6 pl-8 hidden" id="confirm_box">
                <label class="flex gap-2 cursor-pointer items-center bg-red-50 p-3 rounded border border-red-200">
                    <input type="checkbox" name="clear_confirm" id="clear_confirm" class="checkbox checkbox-error" value="1">
                    <span class="label-text text-red-700 font-bold">Saya yakin ingin menghapus semua data penduduk yang sudah ada</span>
                </label>
            </div>

            <script>
                document.getElementById('clear_existing').addEventListener('change', function() {
                    const confirmBox = document.getElementById('confirm_box');
                    const confirmCheck = document.getElementById('clear_confirm');
                    if (this.checked) {
                        confirmBox.classList.remove('hidden');
                    } else {
                        confirmBox.classList.add('hidden');
                        confirmCheck.checked = false;
                    }
                });

                document.querySelector('form').addEventListener('submit', function(e) {
                    const clearExisting = document.getElementById('clear_existing').checked;
                    const clearConfirm = document.getElementById('clear_confirm').checked;
                    if (clearExisting && !clearConfirm) {
                        e.preventDefault();
                        alert('Anda harus mencentang konfirmasi penghapusan data jika ingin menghapus data lama.');
                        document.getElementById('confirm_box').classList.remove('hidden');
                        document.getElementById('clear_confirm').focus();
                    }
                });

            </script>

            <div class="flex gap-2">
                <button type="submit" class="btn btn-primary text-white flex-1">Import Data</button>
                <a href="{{ route('penduduk.index') }}" class="btn btn-ghost flex-1">Batal</a>
            </div>
        </form>

        <div class="divider my-8"></div>

        <div class="bg-gray-50 p-4 rounded">
            <h3 class="font-bold text-gray-800 mb-3"> Contoh File Excel</h3>
            <p class="text-sm text-gray-600 mb-4">Berikut adalah contoh format file Excel yang benar:</p>
            <div class="overflow-x-auto">
                <table class="table table-sm w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th>nama_wilayah</th>
                            <th>kk</th>
                            <th>laki_laki</th>
                            <th>perempuan</th>
                            <th>penduduk_sementara</th>
                            <th>mutasi_masuk</th>
                            <th>mutasi_keluar</th>
                            <th>kelahiran</th>
                            <th>kematian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dusun 1</td>
                            <td>150</td>
                            <td>520</td>
                            <td>480</td>
                            <td>5</td>
                            <td>10</td>
                            <td>3</td>
                            <td>8</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Dusun 2</td>
                            <td>200</td>
                            <td>680</td>
                            <td>650</td>
                            <td>8</td>
                            <td>15</td>
                            <td>5</td>
                            <td>12</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.admin>
