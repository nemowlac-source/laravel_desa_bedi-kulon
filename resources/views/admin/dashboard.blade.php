<x-layouts.admin>

    <div class="flex justify-between items-end mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
            <p class="text-gray-500">Selamat datang kembali, Admin!</p>
        </div>
        <div class="bg-white px-4 py-2 rounded-lg shadow-sm text-sm font-semibold text-gray-600">
            {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="card bg-white shadow-sm hover:shadow-md transition p-6 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                <i class="ph ph-users text-2xl"></i>
            </div>
            <div>
                <div class="text-2xl font-bold text-gray-800">{{ number_format($total_penduduk, 0, ',', '.') }}</div>
                <div class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Penduduk</div>
            </div>
        </div>

        <div class="card bg-white shadow-sm hover:shadow-md transition p-6 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                <i class="ph ph-newspaper text-2xl"></i>
            </div>
            <div>
                <div class="text-2xl font-bold text-gray-800">{{ $total_berita }}</div>
                <div class="text-xs font-bold text-gray-400 uppercase tracking-wider">Berita Terbit</div>
            </div>
        </div>

        <div class="card bg-white shadow-sm hover:shadow-md transition p-6 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-600">
                <i class="ph ph-envelope-open text-2xl"></i>
            </div>
            <div>
                <div class="text-2xl font-bold text-gray-800">{{ $total_surat }}</div>
                <div class="text-xs font-bold text-gray-400 uppercase tracking-wider">Permohonan Surat</div>
            </div>
        </div>

        <div class="card bg-white shadow-sm hover:shadow-md transition p-6 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center text-purple-600">
                <i class="ph ph-eye text-2xl"></i>
            </div>
            <div>
                <div class="text-2xl font-bold text-gray-800">{{ number_format($pengunjung_bulan_ini, 0, ',', '.') }}</div>
                <div class="text-xs font-bold text-gray-400 uppercase tracking-wider">Pengunjung Bulan Ini</div>
            </div>
        </div>
    </div>

    <div class="card bg-white shadow-sm p-6">
        <h3 class="text-lg font-bold mb-4 text-gray-800">Aktivitas Terbaru</h3>

        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr class="text-gray-400 border-b border-gray-100">
                        <th class="font-semibold text-sm py-3 text-left w-10">No</th>
                        <th class="font-semibold text-sm py-3 text-left">Aktivitas</th>
                        <th class="font-semibold text-sm py-3 text-left">Waktu</th>
                        <th class="font-semibold text-sm py-3 text-right">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($activities as $index => $item)
                    <tr class="hover:bg-gray-50 group border-b border-gray-50 last:border-none">
                        <td class="py-3 text-gray-500">{{ $loop->iteration }}</td>
                        <td class="py-3 font-medium text-gray-700 group-hover:text-blue-600 transition">
                            {{ $item['message'] }}
                        </td>
                        <td class="py-3 text-sm text-gray-500">
                            {{ \Carbon\Carbon::parse($item['time'])->diffForHumans() }}
                        </td>
                        <td class="py-3 text-right">
                            <span class="badge {{ $item['color'] ?? 'badge-ghost' }} badge-sm">
                                {{ $item['status'] }}
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-6 text-gray-400">Belum ada aktivitas baru.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</x-layouts.admin>
