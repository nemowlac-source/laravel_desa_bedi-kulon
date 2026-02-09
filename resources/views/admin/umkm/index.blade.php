<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">UMKM & Produk Desa</h1>
        <a href="{{ route('umkm.create') }}" class="btn btn-primary text-white">Tambah Produk</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Penjual</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="font-bold">{{ $item->nama_produk }}</td>
                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>
                        <div>{{ $item->penjual }}</div>
                        <div class="text-xs text-gray-500">{{ $item->no_hp }}</div>
                    </td>
                    <td class="flex gap-2">
                        <a href="{{ route('umkm.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('umkm.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus produk ini?');">
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
