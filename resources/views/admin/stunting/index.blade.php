<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Manajemen Statistik Stunting </h1>
        <a href="{{ route('stunting.create') }}" class="btn btn-primary text-white">Tambah Data Tahunan</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">
        <span>{{ session('success') }} </span>
    </div>
    @endif

    <form id="bulk-delete-form" action="{{ route('stunting.bulk-destroy') }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="card bg-white shadow p-4 overflow-x-auto">
            <div class="flex justify-between items-center mb-3">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" id="select-all" class="checkbox checkbox-sm">
                    <span class="text-sm font-semibold">Pilih Semua</span>
                </label>
                <button type="submit" id="bulk-delete-btn" class="btn btn-sm btn-error text-white hidden" onclick="return confirm('Yakin ingin menghapus data yang dipilih?')">
                    Hapus Terpilih (<span id="selected-count">0</span>)
                </button>
            </div>
            <table class="table w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="w-12 text-center">
                            <input type="checkbox" id="select-all-header" class="checkbox checkbox-sm">
                        </th>
                        <th class="text-center">Tahun</th>
                        <th>Keluarga Sasaran</th>
                        <th>Berisiko</th>
                        <th>Baduta</th>
                        <th>Balita</th>
                        <th>PUS</th>
                        <th>PUS Hamil</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($stuntings as $item)
                    <tr class="hover">
                        <td class="text-center">
                            <input type="checkbox" name="ids[]" value="{{ $item->id }}" class="row-checkbox checkbox checkbox-sm checkbox-primary">
                        </td>
                        <td class="text-center font-bold text-lg">{{ $item->tahun }}</td>
                        <td>{{ number_format($item->keluarga_sasaran) }} Orang</td>
                        <td>
                            <span class="badge badge-warning text-white">{{ number_format($item->berisiko) }}</span>
                        </td>
                        <td>{{ number_format($item->baduta) }}</td>
                        <td>{{ number_format($item->balita) }}</td>
                        <td>{{ number_format($item->pus) }}</td>
                        <td>
                            <span class="badge badge-info badge-outline">{{ number_format($item->pus_hamil) }}</span>
                        </td>
                        <td class="flex justify-center gap-2">
                            <a href="{{ route('stunting.edit', $item->id) }}" class="btn btn-xs btn-warning">Edit</a>
                            <form action="{{ route('stunting.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data statistik tahun {{ $item->tahun }}?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-xs btn-error text-white">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center py-10 text-gray-400">
                            Belum ada data statistik stunting. Klik "Tambah Data Tahunan" untuk memulai
                        </td>
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
