<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manajemen Data APBD </h2>
        <a href="{{ route('apbd.create') }}" class="btn btn-primary text-white">+ Tambah Data</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success shadow-lg mb-6">
        <div><span>{{ session('success') }}</span></div>
    </div>
    @endif

    <form id="bulk-delete-form" action="{{ route('apbd.bulk-destroy') }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="card bg-white shadow overflow-x-auto">
            <div class="flex justify-between items-center p-4 pb-0">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" id="select-all" class="checkbox checkbox-sm">
                    <span class="text-sm font-semibold">Pilih Semua</span>
                </label>
                <button type="submit" id="bulk-delete-btn" class="btn btn-sm btn-error text-white hidden" onclick="return confirm('Yakin ingin menghapus data yang dipilih?')">
                    Hapus Terpilih (<span id="selected-count">0</span>)
                </button>
            </div>
            <table class="table w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="w-12 text-center">
                            <input type="checkbox" id="select-all-header" class="checkbox checkbox-sm">
                        </th>
                        <th>Tahun</th>
                        <th>Jenis</th>
                        <th>Kategori / Bidang</th>
                        <th>Uraian Detail</th>
                        <th class="text-right">Anggaran</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($apbds as $data)
                    <tr class="hover">
                        <td class="text-center">
                            <input type="checkbox" name="ids[]" value="{{ $data->id }}" class="row-checkbox checkbox checkbox-sm checkbox-primary">
                        </td>
                        <td>{{ $data->tahun }}</td>
                        <td>
                            <span class="badge {{ $data->jenis == 'Pendapatan' ? 'badge-success' : 'badge-error' }} text-white">
                                {{ $data->jenis }}
                            </span>
                        </td>
                        <td class="text-xs font-semibold">{{ $data->kategori }}</td>
                        <td>{{ $data->uraian }}</td>
                        <td class="text-right font-bold text-sm">
                            Rp{{ number_format($data->anggaran, 0, ',', '.') }}
                        </td>
                        <td class="text-center">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('apbd.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('apbd.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-error text-white">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-10 text-gray-400">Belum ada data APBD. Klik 'Tambah Data' untuk memulai.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAll = document.getElementById('select-all');
            const selectAllHeader = document.getElementById('select-all-header');
            const rowCheckboxes = document.querySelectorAll('.row-checkbox');
            const bulkDeleteBtn = document.getElementById('bulk-delete-btn');
            const selectedCount = document.getElementById('selected-count');

            function updateSelectedCount() {
                const checked = document.querySelectorAll('.row-checkbox:checked').length;
                selectedCount.textContent = checked;
                if (checked > 0) {
                    bulkDeleteBtn.classList.remove('hidden');
                } else {
                    bulkDeleteBtn.classList.add('hidden');
                }
            }

            function toggleAll(checked) {
                rowCheckboxes.forEach(cb => cb.checked = checked);
                updateSelectedCount();
            }

            selectAll.addEventListener('change', function() {
                toggleAll(this.checked);
                selectAllHeader.checked = this.checked;
            });

            selectAllHeader.addEventListener('change', function() {
                toggleAll(this.checked);
                selectAll.checked = this.checked;
            });

            rowCheckboxes.forEach(cb => {
                cb.addEventListener('change', updateSelectedCount);
            });
        });

    </script>
</x-layouts.admin>
