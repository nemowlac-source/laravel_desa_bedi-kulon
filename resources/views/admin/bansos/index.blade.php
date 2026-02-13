<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Data Penerima Bansos</h1>
        <a href="{{ route('bansos.create') }}" class="btn btn-primary text-white">Tambah Penerima</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4 overflow-x-auto">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
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
</x-layouts.admin>
