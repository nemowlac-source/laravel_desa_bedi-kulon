<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Potensi Desa</h1>
        <a href="{{ route('potensi.create') }}" class="btn btn-primary text-white">Tambah Potensi</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <form id="bulk-delete-form" action="{{ route('potensi.bulk-destroy') }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="card bg-white shadow p-4">
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
                        <th>Gambar</th>
                        <th>Nama Potensi</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($potensis as $item)
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="ids[]" value="{{ $item->id }}" class="row-checkbox checkbox checkbox-sm checkbox-primary">
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="w-20 h-16 object-cover rounded">
                        </td>
                        <td class="font-bold">{{ $item->judul }}</td>
                        <td>{{ $item->lokasi ?? '-' }}</td>
                        <td class="flex gap-2">
                            <a href="{{ route('potensi.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('potensi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-error text-white">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center p-4">Belum ada data potensi.</td>
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
