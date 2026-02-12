<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Statistik Wajib Pilih</h1>
        <a href="{{ route('wajibpilih.create') }}" class="btn btn-primary text-white">Tambah Data</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wajibpilih as $item)
                <tr class="hover">
                    <td class="font-bold">{{ $item->kategori }}</td>
                    <td>{{ number_format($item->jumlah, 0, ',', '.') }} Jiwa</td>
                    <td class="flex gap-2">
                        <a href="{{ route('wajibpilih.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('wajibpilih.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
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
