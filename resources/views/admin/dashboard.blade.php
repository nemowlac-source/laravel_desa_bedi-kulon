<x-layouts.admin>

    {{-- HEADER (Disesuaikan agar numpuk di Mobile, sejajar di Desktop) --}}
    <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-4 mb-6 md:mb-8">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Dashboard</h1>
            <p class="text-sm md:text-base text-gray-500">Selamat datang kembali, Admin!</p>
        </div>
        {{-- self-start di mobile agar tidak memanjang penuh --}}
        <div class="bg-white px-4 py-2 rounded-lg shadow-sm text-xs md:text-sm font-semibold text-gray-600 self-start md:self-auto">
            {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}
        </div>
    </div>

    {{-- KOTAK STATISTIK (Dibuat 2 Kolom di Mobile, 4 Kolom di Desktop) --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 md:gap-6 mb-8 px-1 md:px-0">

        {{-- Kotak 1: Total Penduduk --}}
        <div class="card bg-white shadow-[0_2px_10px_rgba(0,0,0,0.03)] hover:shadow-md transition p-4 md:p-6 flex flex-col items-center justify-center text-center rounded-xl md:rounded-2xl border border-gray-50">
            <div class="w-10 h-10 md:w-12 md:h-12 flex-shrink-0 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mb-2 md:mb-3">
                <i class="ph ph-users text-xl md:text-2xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-bold text-gray-800 leading-none mb-1 md:mb-2">{{ number_format($total_penduduk, 0, ',', '.') }}</div>
            <div class="text-[9px] md:text-xs font-bold text-gray-400 uppercase tracking-widest">Total Penduduk</div>
        </div>

        {{-- Kotak 2: Berita Terbit --}}
        <div class="card bg-white shadow-[0_2px_10px_rgba(0,0,0,0.03)] hover:shadow-md transition p-4 md:p-6 flex flex-col items-center justify-center text-center rounded-xl md:rounded-2xl border border-gray-50">
            <div class="w-10 h-10 md:w-12 md:h-12 flex-shrink-0 rounded-full bg-green-100 flex items-center justify-center text-green-600 mb-2 md:mb-3">
                <i class="ph ph-newspaper text-xl md:text-2xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-bold text-gray-800 leading-none mb-1 md:mb-2">{{ number_format($total_berita, 0, ',', '.') }}</div>
            <div class="text-[9px] md:text-xs font-bold text-gray-400 uppercase tracking-widest">Berita Terbit</div>
        </div>

        {{-- Kotak 3: Permohonan Surat --}}
        <div class="card bg-white shadow-[0_2px_10px_rgba(0,0,0,0.03)] hover:shadow-md transition p-4 md:p-6 flex flex-col items-center justify-center text-center rounded-xl md:rounded-2xl border border-gray-50">
            <div class="w-10 h-10 md:w-12 md:h-12 flex-shrink-0 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 mb-2 md:mb-3">
                <i class="ph ph-envelope-open text-xl md:text-2xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-bold text-gray-800 leading-none mb-1 md:mb-2">{{ number_format($total_surat, 0, ',', '.') }}</div>
            <div class="text-[9px] md:text-xs font-bold text-gray-400 uppercase tracking-widest">Permohonan Surat</div>
        </div>

        {{-- Kotak 4: Pengunjung Bulan Ini --}}
        <div class="card bg-white shadow-[0_2px_10px_rgba(0,0,0,0.03)] hover:shadow-md transition p-4 md:p-6 flex flex-col items-center justify-center text-center rounded-xl md:rounded-2xl border border-gray-50">
            <div class="w-10 h-10 md:w-12 md:h-12 flex-shrink-0 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 mb-2 md:mb-3">
                <i class="ph ph-eye text-xl md:text-2xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-bold text-gray-800 leading-none mb-1 md:mb-2">{{ number_format($pengunjung_bulan_ini, 0, ',', '.') }}</div>
            <div class="text-[9px] md:text-xs font-bold text-gray-400 uppercase tracking-widest">Pengunjung<br>Bulan Ini</div>
        </div>

    </div>

    {{-- BAGIAN AKTIVITAS --}}
    <div class="card bg-white shadow-sm rounded-xl md:rounded-2xl p-4 md:p-6 border border-gray-50">
        <h3 class="text-base md:text-lg font-bold mb-4 md:mb-6 text-gray-800">Aktivitas Terbaru</h3>

        {{-- ========================================== --}}
        {{-- ZONA DESKTOP (Tabel Utuh)                  --}}
        {{-- ========================================== --}}
        <div class="hidden md:block overflow-x-auto">
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
                        <td colspan="4" class="text-center py-8 text-gray-400">Belum ada aktivitas baru.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- ========================================== --}}
        {{-- ZONA MOBILE (List Cards Tanpa Scroll Kanan) --}}
        {{-- ========================================== --}}
        <div class="block md:hidden flex flex-col gap-3">
            @forelse($activities as $index => $item)
            <div class="bg-gray-50 rounded-xl p-3.5 border border-gray-100 flex flex-col gap-2">
                {{-- Baris Atas: Pesan dan Badge --}}
                <div class="flex justify-between items-start gap-3">
                    <span class="font-medium text-gray-800 text-[13px] leading-snug">
                        {{ $item['message'] }}
                    </span>
                    <span class="badge {{ $item['color'] ?? 'badge-ghost' }} badge-sm flex-shrink-0 text-[10px]">
                        {{ $item['status'] }}
                    </span>
                </div>
                {{-- Baris Bawah: Waktu --}}
                <div class="text-[11px] text-gray-500 font-medium">
                    {{ \Carbon\Carbon::parse($item['time'])->diffForHumans() }}
                </div>
            </div>
            @empty
            <div class="text-center py-6 bg-gray-50 rounded-xl text-sm text-gray-400">
                Belum ada aktivitas baru.
            </div>
            @endforelse
        </div>

    </div>

</x-layouts.admin>
