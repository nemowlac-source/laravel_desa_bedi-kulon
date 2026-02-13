<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Indeks Desa Membangun (IDM)</h1>
        <a href="{{ route('idm.create') }}" class="btn btn-primary text-white">Tambah Data Tahun Ini</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4">
        <table class="table w-full text-center">
            <thead class="bg-gray-100">
                <tr>
                    <th>Tahun</th>
                    <th class="text-green-600">IKS (Sosial)</th>
                    <th class="text-yellow-600">IKE (Ekonomi)</th>
                    <th class="text-blue-600">IKL (Lingkungan)</th>
                    <th class="font-extrabold bg-gray-200">NILAI IDM</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($idm as $item)
                <tr class="hover">
                    <td class="font-bold">{{ $item->tahun }}</td>
                    <td>{{ $item->iks }}</td>
                    <td>{{ $item->ike }}</td>
                    <td>{{ $item->ikl }}</td>
                    <td class="font-bold bg-gray-50 text-lg">{{ $item->nilai_idm }}</td>
                    <td>
                        @if($item->status == 'Mandiri')
                        <span class="badge badge-success text-white">Mandiri</span>
                        @elseif($item->status == 'Maju')
                        <span class="badge badge-info text-white">Maju</span>
                        @elseif($item->status == 'Berkembang')
                        <span class="badge badge-warning text-white">Berkembang</span>
                        @else
                        <span class="badge badge-error text-white">Tertinggal</span>
                        @endif
                    </td>
                    <td class="flex justify-center gap-2">
                        <a href="{{ route('idm.edit', $item->id) }}" class="btn btn-xs btn-warning">Edit</a>
                        <form action="{{ route('idm.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-xs btn-error text-white">Hapus</button>
                        </form>
                    </td>
                    <td class="flex justify-center gap-2">
                        <a href="{{ route('idm.detail.index', $item->id) }}" class="btn btn-xs btn-info text-white" title="Lihat Indikator">
                            <i class="ph ph-list-magnifying-glass"></i> Rincian
                        </a>

                        <a href="{{ route('idm.edit', $item->id) }}" class="btn btn-xs btn-warning">Edit</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>
