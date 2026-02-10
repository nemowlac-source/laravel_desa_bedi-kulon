<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Potensi Desa</h1>
        <a href="{{ route('potensi.create') }}" class="btn btn-primary text-white">Tambah Potensi</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Potensi</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($potensis as $item)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="w-20 h-16 object-cover rounded">
                    </td>
                    <td class="font-bold">{{ $item->judul }}</td>
                    <td>{{ $item->lokasi ?? '-' }}</td>
                    <td class="flex gap-2">
                        <a href="{{ route('potensi.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('potensi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-error text-white">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center p-4">Belum ada data potensi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layouts.admin>
