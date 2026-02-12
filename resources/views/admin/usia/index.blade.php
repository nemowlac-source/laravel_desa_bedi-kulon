<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Statistik Umur (Piramida)</h1>
        <a href="{{ route('usia.create') }}" class="btn btn-primary text-white">Tambah Kelompok</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Kelompok Umur</th>
                    <th class="text-center text-blue-600">Laki-laki</th>
                    <th class="text-center text-pink-600">Perempuan</th>
                    <th class="text-center">Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usia as $item)
                <tr class="hover">
                    <td class="font-bold">{{ $item->kelompok_umur }} Tahun</td>
                    <td class="text-center">{{ number_format($item->laki_laki, 0, ',', '.') }}</td>
                    <td class="text-center">{{ number_format($item->perempuan, 0, ',', '.') }}</td>
                    <td class="text-center font-bold">{{ number_format($item->laki_laki + $item->perempuan, 0, ',', '.') }}</td>
                    <td class="flex gap-2">
                        <a href="{{ route('usia.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('usia.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
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
