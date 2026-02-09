<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Berita Desa</h1>
        <a href="{{ route('berita.create') }}" class="btn btn-primary text-white">Tulis Berita</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($beritas as $item)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="w-16 h-12 object-cover rounded">
                        </td>
                        <td class="font-bold max-w-xs truncate">{{ $item->judul }}</td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                        <td class="flex gap-2">
                            <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus berita ini?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-error text-white">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center p-4">Belum ada berita.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin>
