<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Destinasi Wisata</h1>
        <a href="{{ route('wisata.create') }}" class="btn btn-primary text-white">Tambah Wisata</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <form id="bulk-delete-form" action="{{ route('wisata.bulk-destroy') }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="flex justify-between items-center mb-4">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" id="select-all" class="checkbox checkbox-sm">
                <span class="text-sm font-semibold">Pilih Semua</span>
            </label>
            <button type="submit" id="bulk-delete-btn" class="btn btn-sm btn-error text-white hidden" onclick="return confirm('Yakin ingin menghapus wisata yang dipilih?')">
                Hapus Terpilih (<span id="selected-count">0</span>)
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($wisatas as $item)
            <div class="card bg-white shadow-sm border border-gray-100">
                <div class="p-2">
                    <input type="checkbox" name="ids[]" value="{{ $item->id }}" class="row-checkbox checkbox checkbox-sm checkbox-primary">
                </div>
                <figure class="h-48 overflow-hidden">
                    <img src="{{ asset('storage/' . $item->gambar_thumbnail) }}" class="w-full h-full object-cover" onerror="this.src='{{ asset('storage/' . $item->gambar) }}'" />
                </figure>
                <div class="card-body p-4">
                    <h2 class="card-title text-lg">{{ $item->nama_wisata }}</h2>
                    <div class="text-sm text-gray-500 mb-2">
                        <i class="ph ph-map-pin"></i> {{ $item->alamat }}
                    </div>
                    <div class="flex gap-2 text-xs font-bold text-gray-600 mb-4">
                        <span class="bg-gray-100 px-2 py-1 rounded">
                            <i class="ph ph-ticket"></i> {{ $item->harga_tiket ?? 'Gratis' }}
                        </span>
                        <span class="bg-gray-100 px-2 py-1 rounded">
                            <i class="ph ph-clock"></i> {{ $item->jam_buka ?? '24 Jam' }}
                        </span>
                    </div>

                    <div class="card-actions justify-end">
                        <a href="{{ route('wisata.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('wisata.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus wisata ini?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-error text-white">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center p-10 text-gray-500">Belum ada data wisata.</div>
            @endforelse
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAll = document.getElementById('select-all');
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

            selectAll.addEventListener('change', function() {
                rowCheckboxes.forEach(cb => cb.checked = this.checked);
                updateSelectedCount();
            });

            rowCheckboxes.forEach(cb => {
                cb.addEventListener('change', updateSelectedCount);
            });
        });

    </script>
</x-layouts.admin>
