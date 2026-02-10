<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Destinasi Wisata</h1>
        <a href="{{ route('wisata.create') }}" class="btn btn-primary text-white">Tambah Wisata</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($wisatas as $item)
        <div class="card bg-white shadow-sm border border-gray-100">
            <figure class="h-48 overflow-hidden">
                <img src="{{ asset('storage/' . $item->gambar) }}" class="w-full h-full object-cover" />
            </figure>
            <div class="card-body p-4">
                <h2 class="card-title text-lg">{{ $item->nama_wisata }}</h2>
                <div class="text-sm text-gray-500 mb-2">
                    <i class="ph ph-map-pin"></i> {{ $item->alamat }}
                </div>
                <div class="flex gap-2 text-xs font-bold text-gray-600 mb-4">
                    <span class="bg-gray-100 px-2 py-1 rounded">
                        <i class="ph ph-ticket"></i> {{ $item->harga_tiket ?? 'Gratis' }}
                    </span>
                    <span class="bg-gray-100 px-2 py-1 rounded">
                        <i class="ph ph-clock"></i> {{ $item->jam_buka ?? '24 Jam' }}
                    </span>
                </div>

                <div class="card-actions justify-end">
                    <a href="{{ route('wisata.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('wisata.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus wisata ini?');">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-error text-white">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center p-10 text-gray-500">Belum ada data wisata.</div>
        @endforelse
    </div>
</x-layouts.admin>
