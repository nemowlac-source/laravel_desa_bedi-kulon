<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Statistik Agama</h1>
        <a href="{{ route('agama.create') }}" class="btn btn-primary text-white">Tambah Data</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Agama</th>
                    <th>Jumlah Pemeluk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agamas as $item)
                <tr class="hover">
                    <td class="font-bold">{{ $item->agama }}</td>
                    <td>{{ number_format($item->jumlah, 0, ',', '.') }} Jiwa</td>
                    <td class="flex gap-2">
                        <a href="{{ route('agama.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('agama.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-error text-white">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>
