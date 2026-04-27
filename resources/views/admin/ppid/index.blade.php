<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Dokumen PPID Desa</h1>
        <a href="{{ route('ppid.create') }}" class="btn btn-primary text-white">Upload Dokumen</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <form id="bulk-delete-form" action="{{ route('ppid.bulk-destroy') }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="card bg-white shadow p-4 overflow-x-auto">
            <div class="flex justify-between items-center mb-3">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" id="select-all" class="checkbox checkbox-sm">
                    <span class="text-sm font-semibold">Pilih Semua</span>
                </label>
                <button type="submit" id="bulk-delete-btn" class="btn btn-sm btn-error text-white hidden" onclick="return confirm('Yakin ingin menghapus dokumen yang dipilih?')">
                    Hapus Terpilih (<span id="selected-count">0</span>)
                </button>
            </div>
            <table class="table w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="w-12 text-center">
                            <input type="checkbox" id="select-all-header" class="checkbox checkbox-sm">
                        </th>
                        <th>Tanggal</th>
                        <th>Judul Informasi</th>
                        <th>Kategori Utama</th>
                        <th>Sub Kategori</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ppid as $item)
                    <tr class="hover">
                        <td class="text-center">
                            <input type="checkbox" name="ids[]" value="{{ $item->id }}" class="row-checkbox checkbox checkbox-sm checkbox-primary">
                        </td>
                        <td class="text-sm whitespace-nowrap">{{ \Carbon\Carbon::parse($item->tanggal_upload)->format('d/m/Y') }}</td>
                        <td class="font-bold">{{ $item->judul }}</td>

                        <td class="whitespace-nowrap">
                            @if($item->kategori == 'Berkala')
                            <span class="badge badge-info">Berkala</span>
                            @elseif($item->kategori == 'Serta Merta')
                            <span class="badge badge-warning">Serta Merta</span>
                            @elseif($item->kategori == 'Setiap Saat')
                            <span class="badge badge-success">Setiap Saat</span>
                            @else
                            <span class="badge badge-error">Dikecualikan</span>
                            @endif
                        </td>

                        <td class="text-sm text-gray-600">
                            {{ $item->sub_kategori ?? '-' }}
                        </td>

                        <td>
                            <a href="{{ asset('storage/' . $item->file) }}" target="_blank" class="btn btn-xs btn-outline">
                                <i class="ph ph-download-simple"></i> Lihat
                            </a>
                        </td>

                        <td class="flex gap-2">
                            <a href="{{ route('ppid.edit', $item->id) }}" class="btn btn-xs btn-warning">Edit</a>
                            <form action="{{ route('ppid.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus dokumen ini?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-xs btn-error text-white">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
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
