<x-layouts.admin>

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Kelola Galeri Desa</h1>
        <a href="{{ route('galeri.create') }}" class="btn btn-primary text-white">
            <i class="ph ph-plus-circle text-lg"></i> Tambah Foto
        </a>
    </div>

    @if(session('success'))
    <div role="alert" class="alert alert-success mb-4 text-white">
        <i class="ph ph-check-circle text-xl"></i>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <div class="card bg-white shadow-sm border border-gray-100">
        <div class="card-body">

            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="bg-gray-50">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul & Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($galeris as $key => $item)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>
                                <div class="avatar">
                                    <div class="mask mask-squircle w-20 h-20">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="font-bold">{{ $item->judul }}</div>
                                <div class="text-sm opacity-50">{{ Str::limit($item->deskripsi, 50) }}</div>
                            </td>
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>
                                <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-error btn-xs text-white">
                                        <i class="ph ph-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-8 text-gray-500">
                                Belum ada foto galeri. Silakan tambah foto baru.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-layouts.admin>
