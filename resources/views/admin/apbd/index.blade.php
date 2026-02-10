<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Transparansi APBD Desa</h1>
        <a href="{{ route('apbd.create') }}" class="btn btn-primary text-white">Tambah Data APBD</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4 overflow-x-auto">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Tahun</th>
                    <th>Jenis</th>
                    <th>Uraian / Kategori</th>
                    <th class="text-right">Anggaran (Rp)</th>
                    <th class="text-right">Realisasi (Rp)</th>
                    <th class="text-center">%</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($apbds as $item)
                <tr class="hover">
                    <td class="font-bold">{{ $item->tahun }}</td>
                    <td>
                        @if($item->jenis == 'Pendapatan')
                        <span class="badge badge-success text-white">Pendapatan</span>
                        @elseif($item->jenis == 'Belanja')
                        <span class="badge badge-error text-white">Belanja</span>
                        @else
                        <span class="badge badge-info text-white">Pembiayaan</span>
                        @endif
                    </td>
                    <td>{{ $item->kategori }}</td>
                    <td class="text-right font-mono">{{ number_format($item->anggaran, 0, ',', '.') }}</td>
                    <td class="text-right font-mono">{{ number_format($item->realisasi, 0, ',', '.') }}</td>

                    <td class="text-center">
                        <div class="tooltip" data-tip="{{ $item->persentase }}%">
                            <progress class="progress progress-primary w-16" value="{{ $item->persentase }}" max="100"></progress>
                        </div>
                    </td>

                    <td class="flex justify-center gap-2">
                        <a href="{{ route('apbd.edit', $item->id) }}" class="btn btn-xs btn-warning">Edit</a>
                        <form action="{{ route('apbd.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-xs btn-error text-white">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>
