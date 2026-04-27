<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Data Penerima Bansos</h1>
        <div class="flex gap-2">
            <a href="{{ route('bansos.import') }}" class="btn btn-secondary text-white">Import Excel</a>
            <a href="{{ route('bansos.create') }}" class="btn btn-primary text-white">Tambah Penerima</a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <form id="bulk-delete-form" action="{{ route('bansos.bulk-destroy') }}" method="POST">
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
                        <th>Foto</th>
                        <th>Nama Penerima</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Jenis Bantuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bansos as $item)
                    <tr class="hover">
                        <td class="text-center">
                            <input type="checkbox" name="ids[]" value="{{ $item->id }}" class="row-checkbox checkbox checkbox-sm checkbox-primary">
                        </td>
                        <td>
                            @if($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" class="w-12 h-12 rounded object-cover">
                            @else
                            <span class="text-gray-400 text-xs">No Img</span>
                            @endif
                        </td>
                        <td class="font-bold">{{ $item->nama_penerima }}</td>
                        <td>{{ $item->nik ?? '-' }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <span class="badge badge-outline badge-primary">{{ $item->jenis_bantuan }}</span>
                        </td>
                        <td class="flex gap-2 items-center h-full">
                            <a href="{{ route('bansos.edit', $item->id) }}" class="btn btn-xs btn-warning">Edit</a>
                            <form action="{{ route('bansos.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
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
