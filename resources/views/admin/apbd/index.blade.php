<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manajemen Data APBD 📂</h2>
        <a href="{{ route('apbd.create') }}" class="btn btn-primary text-white">+ Tambah Data</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success shadow-lg mb-6">
        <div><span>{{ session('success') }}</span></div>
    </div>
    @endif

    <div class="card bg-white shadow overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr class="bg-gray-100">
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
                    <td colspan="6" class="text-center py-10 text-gray-400">Belum ada data APBD. Klik 'Tambah Data' untuk memulai.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layouts.admin>
