<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Struktur Organisasi Desa</h1>
        <a href="{{ route('perangkat.create') }}" class="btn btn-primary text-white">Tambah Perangkat</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($perangkats as $item)
        <div class="card bg-white shadow border border-gray-100 flex flex-row p-4 items-center gap-4">
            <div class="avatar">
                <div class="w-20 h-20 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}" />
                </div>
            </div>
            <div class="flex-1">
                <h2 class="font-bold text-lg">{{ $item->nama }}</h2>
                <p class="text-blue-600 text-sm font-semibold uppercase">{{ $item->jabatan }}</p>
                <p class="text-xs text-gray-500 mt-1">NIAP: {{ $item->niap ?? '-' }}</p>

                <div class="flex gap-2 mt-3">
                    <a href="{{ route('perangkat.edit', $item->id) }}" class="btn btn-xs btn-warning">Edit</a>
                    <form action="{{ route('perangkat.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
                        @csrf @method('DELETE')
                        <button class="btn btn-xs btn-error text-white">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layouts.admin>
