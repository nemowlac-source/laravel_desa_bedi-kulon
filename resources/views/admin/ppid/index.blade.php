<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Dokumen PPID Desa</h1>
        <a href="{{ route('ppid.create') }}" class="btn btn-primary text-white">Upload Dokumen</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Tanggal</th>
                    <th>Judul Informasi</th>
                    <th>Kategori</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ppid as $item)
                <tr class="hover">
                    <td class="text-sm">{{ \Carbon\Carbon::parse($item->tanggal_upload)->format('d/m/Y') }}</td>
                    <td class="font-bold">{{ $item->judul }}</td>
                    <td>
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
</x-layouts.admin>
