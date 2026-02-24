<x-layouts.admin>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    Daftar Pengaduan Warga ⏺️
                </h2>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50 border-b">
                                <th class="p-4 font-bold text-gray-700">Tanggal</th>
                                <th class="p-4 font-bold text-gray-700">Pelapor</th>
                                <th class="p-4 font-bold text-gray-700">Kategori</th>
                                <th class="p-4 font-bold text-gray-700">Status</th>
                                <th class="p-4 font-bold text-gray-700 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduans as $item)
                            <tr class="border-b hover:bg-gray-50 transition">
                                <td class="p-4 text-sm">{{ $item->created_at->format('d/m/Y') }}</td>
                                <td class="p-4">
                                    <div class="font-bold">{{ $item->nama }}</div>
                                    <div class="text-xs text-gray-500">{{ $item->no_hp }}</div>
                                </td>
                                <td class="p-4 text-sm">{{ $item->kategori }}</td>
                                <td class="p-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-bold 
                                        {{ $item->status == 'pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
                                        {{ $item->status == 'proses' ? 'bg-blue-100 text-blue-700' : '' }}
                                        {{ $item->status == 'selesai' ? 'bg-green-100 text-green-700' : '' }}">
                                        {{ strtoupper($item->status) }}
                                    </span>
                                </td>
                                <td class="p-4 flex justify-center gap-2">
                                    <a href="{{ route('admin.pengaduan.show', $item->id) }}" class="text-blue-500 hover:text-blue-700">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.pengaduan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus aduan ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">{{ $pengaduans->links() }}</div>
            </div>
        </div>
    </div>
</x-layouts.admin>
