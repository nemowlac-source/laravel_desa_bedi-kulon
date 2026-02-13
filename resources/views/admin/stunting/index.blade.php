<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Data Stunting & Gizi Balita</h1>
        <a href="{{ route('stunting.create') }}" class="btn btn-primary text-white">Tambah Data</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4 overflow-x-auto">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Tgl Ukur</th>
                    <th>Nama Anak / Ortu</th>
                    <th>JK</th>
                    <th>Umur</th>
                    <th>Pengukuran</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stunting as $item)
                <tr class="hover">
                    <td class="text-sm">{{ \Carbon\Carbon::parse($item->tanggal_ukur)->format('d/m/Y') }}</td>
                    <td>
                        <div class="font-bold">{{ $item->nama_anak }}</div>
                        <div class="text-xs text-gray-500">Ortu: {{ $item->nama_orangtua }}</div>
                        <div class="text-xs text-gray-500">Pos: {{ $item->posyandu }}</div>
                    </td>
                    <td>
                        @if($item->jenis_kelamin == 'L')
                        <span class="badge badge-info badge-outline">L</span>
                        @else
                        <span class="badge badge-secondary badge-outline">P</span>
                        @endif
                    </td>
                    <td>{{ $item->umur_bulan }} Bln</td>
                    <td>
                        <div class="text-xs">TB: {{ $item->tinggi_badan }} cm</div>
                        <div class="text-xs">BB: {{ $item->berat_badan }} kg</div>
                    </td>
                    <td>
                        @if($item->status == 'Normal')
                        <span class="badge badge-success text-white">Normal</span>
                        @elseif($item->status == 'Stunting')
                        <span class="badge badge-error text-white">Stunting</span>
                        @elseif($item->status == 'Sangat Pendek')
                        <span class="badge badge-error text-white font-bold">Sangat Pendek</span>
                        @else
                        <span class="badge badge-warning text-white">Kurang Gizi</span>
                        @endif
                    </td>
                    <td class="flex gap-2">
                        <a href="{{ route('stunting.edit', $item->id) }}" class="btn btn-xs btn-warning">Edit</a>
                        <form action="{{ route('stunting.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-xs btn-error text-white">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $stunting->links() }}
        </div>
    </div>
</x-layouts.admin>
