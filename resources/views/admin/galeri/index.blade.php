<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Kelola Galeri Desa</h1>
        <a href="{{ route('galeri.create') }}" class="btn btn-primary text-white">
            <i class="ph ph-plus-circle text-lg"></i> Tambah Foto
        </a>
    </div>

    @if(session('success'))
    <div role="alert" class="alert alert-success mb-4 text-white">
        <i class="ph ph-check-circle text-xl"></i>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <form id="bulk-delete-form" action="{{ route('galeri.bulk-destroy') }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="card bg-white shadow-sm border border-gray-100">
            <div class="card-body">
                <div class="flex justify-between items-center mb-3">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" id="select-all" class="checkbox checkbox-sm">
                        <span class="text-sm font-semibold">Pilih Semua</span>
                    </label>
                    <button type="submit" id="bulk-delete-btn" class="btn btn-sm btn-error text-white hidden" onclick="return confirm('Yakin ingin menghapus foto yang dipilih?')">
                        Hapus Terpilih (<span id="selected-count">0</span>)
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="w-12 text-center">
                                    <input type="checkbox" id="select-all-header" class="checkbox checkbox-sm checkbox-primary">
                                </th>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul & Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($galeris as $key => $item)
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" name="ids[]" value="{{ $item->id }}" class="row-checkbox checkbox checkbox-sm checkbox-primary">
                                </td>
                                <th>{{ $key + 1 }}</th>
                                <td>
                                    <div class="avatar">
                                        <div class="mask mask-squircle w-20 h-20">
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" />
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-bold">{{ $item->judul }}</div>
                                    <div class="text-sm opacity-50">{{ Str::limit($item->deskripsi, 50) }}</div>
                                </td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>
                                    <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-error btn-xs text-white">
                                            <i class="ph ph-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-8 text-gray-500">
                                    Belum ada foto galeri. Silakan tambah foto baru.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
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
