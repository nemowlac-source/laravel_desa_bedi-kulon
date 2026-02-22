<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Manajemen Statistik Stunting 📂</h1>
        <a href="{{ route('stunting.create') }}" class="btn btn-primary text-white">Tambah Data Tahunan</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">
        <span>{{ session('success') }} ⏺️</span>
    </div>
    @endif

    <div class="card bg-white shadow p-4 overflow-x-auto">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
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
                @forelse($stunting as $item)
                <tr class="hover">
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
                    <td colspan="8" class="text-center py-10 text-gray-400">
                        Belum ada data statistik stunting. Klik "Tambah Data Tahunan" untuk memulai 📂
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        @if($stunting->hasPages())
        <div class="mt-4">
            {{ $stunting->links() }}
        </div>
        @endif
    </div>
</x-layouts.admin>
