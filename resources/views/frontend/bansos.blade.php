<x-frontend>
    <section class="infografis-page py-6 md:py-10 bg-gray-50/50 min-h-screen">
        {{-- ========================================== --}}
        {{-- 1. VERSI MOBILE & DESKTOP (Header)         --}}
        {{-- ========================================== --}}
        <div class="w-full max-w-7xl mx-auto mt-12 mb-8">

            {{-- KODE ASLI KAMU DIMULAI DARI SINI (Tidak ada yang diubah) --}}
            <div class="header-infografis">

                <div class="hidden md:block brand-title">
                    <h1>INFOGRAFIS<br>DESA Bedikulon</h1>
                </div>

                <div class="nav-menu flex w-full justify-end overflow-x-auto flex-nowrap gap-8 pb-2 hide-scroll">

                    <a href="{{ route('frontend.infografis') }}" class="nav-item flex-none {{ Route::is('frontend.infografis') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-users" style="overflow: visible;">
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                        </div>
                        <span class="nav-text">Penduduk</span>
                    </a>

                    <a href="{{ route('frontend.apbdes') }}" class="nav-item flex-none {{ Route::is('frontend.apbdes') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-cash" style="overflow: visible;">
                                <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                                <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
                            </svg>
                        </div>
                        <span class="nav-text">APBDes</span>
                    </a>

                    <a href="{{ route('frontend.stunting') }}" class="nav-item flex-none {{ Route::is('frontend.stunting') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-chart-bar" style="overflow: visible;">
                                <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M4 20l14 0"></path>
                            </svg>
                        </div>
                        <span class="nav-text">Stunting</span>
                    </a>

                    <a href="{{ route('frontend.bansos') }}" class="nav-item flex-none {{ Route::is('frontend.bansos') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-package" style="overflow: visible;">
                                <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                                <path d="M12 12l8 -4.5"></path>
                                <path d="M12 12v9"></path>
                                <path d="M12 12l-8 -4.5"></path>
                                <path d="M16 5.25l-8 4.5"></path>
                            </svg>
                        </div>
                        <span class="nav-text">Bansos</span>
                    </a>






                </div>


            </div>
            {{-- KODE ASLI KAMU BERAKHIR DI SINI --}}

        </div>

        {{-- ========================================== --}}
        {{-- VERSI DESKTOP (Jumlah Penerima Bansos)     --}}
        {{-- ========================================== --}}

        {{-- PERBAIKAN 1: Menggunakan max-w-7xl agar lurus sempurna dengan section di atasnya --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16">

            {{-- PERBAIKAN 2: Class judul disamakan persis (text-[40px], font-extrabold, uppercase) --}}
            <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-8 tracking-tight text-left drop-shadow-sm uppercase">
                Jumlah Penerima Bansos
            </h2>

            @php
            $kategori_bansos = [
            ['key' => 'bpjs', 'label' => 'BPJS PBI Ketenagakerjaan'],
            ['key' => 'pkh', 'label' => 'PKH'],
            ['key' => 'bpnt', 'label' => 'BPNT'],
            ['key' => 'pstn', 'label' => 'PSTN'],
            ['key' => 'blt', 'label' => 'BLT 2024'],
            ];
            @endphp

            {{-- Grid Layout: 2 Kolom menyamping --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($kategori_bansos as $b)
                {{-- PERBAIKAN 3: rounded-xl jadi rounded-2xl, shadow diseragamkan, dan tambah efek hover naik --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 flex items-center transition-all duration-300 hover:shadow-md hover:-translate-y-1 h-[180px] group">

                    {{-- 1. Bagian Kiri: Angka & Label Penduduk --}}
                    <div class="w-1/3 flex flex-col items-center justify-center border-r border-gray-100 pr-4">
                        <span class="text-gray-900 text-6xl font-black leading-none group-hover:text-[#2ac0b4] transition-colors duration-300">
                            {{ number_format($summary[$b['key']] ?? 0, 0, ',', '.') }}
                        </span>
                        <span class="text-gray-600 text-xl font-bold mt-2 italic">Penduduk</span>
                    </div>

                    {{-- 2. Bagian Kanan: Deskripsi & Nama Bansos --}}
                    <div class="w-2/3 pl-8 flex flex-col justify-center text-left">
                        <p class="text-gray-500 text-xl font-medium mb-1">mendapatkan bantuan</p>
                        <h3 class="text-gray-800 text-2xl font-black uppercase leading-tight">
                            {{ $b['label'] }}
                        </h3>
                    </div>

                </div>
                @endforeach
            </div>

        </div>

        {{-- ========================================== --}}
        {{-- BAGIAN PENCARIAN BANSOS (Mobile & Desktop) --}}
        {{-- ========================================== --}}

        {{-- PERBAIKAN 4: Menambahkan wrapper max-w-7xl agar fitur pencarian ikut lurus --}}
        <div class="w-full max-w-7xl mx-auto mt-16 mb-20">

            {{-- PERBAIKAN 5: Dibungkus Card Putih agar rapi dan selaras dengan desain grafik --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-10 lg:p-12">

                <div class="text-center md:text-left mb-8">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#2ac0b4] mb-2 tracking-tight uppercase">Cek Status Penerima Bansos</h2>
                    <p class="text-base text-gray-500 font-medium">Masukkan 16 digit NIK Anda untuk melihat riwayat bantuan yang diterima.</p>
                </div>

                <form action="{{ route('frontend.bansos') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
                    <input type="text" name="nik" value="{{ request('nik') }}" placeholder="Masukkan NIK Anda (Contoh: 3502...)" class="w-full px-5 py-4 bg-[#f8f9fb] border border-gray-200 focus:border-[#2ac0b4] focus:bg-white focus:ring-0 rounded-xl text-base transition-all duration-300 text-gray-800 font-medium" maxlength="16" required>

                    <button type="submit" class="bg-[#2ac0b4] hover:bg-[#209f94] text-white font-bold text-base px-8 py-4 rounded-xl transition-all duration-300 shadow-sm whitespace-nowrap">
                        Periksa Status
                    </button>
                </form>

                {{-- HASIL PENCARIAN (Konten Tidak Berubah) --}}
                @if(request()->has('nik'))
                <div class="mt-8 border-t border-gray-100 pt-8">

                    @if($hasil_cari && $hasil_cari->count() > 0)
                    {{-- Notifikasi Sukses --}}
                    <div class="bg-emerald-50 text-emerald-700 px-5 py-4 rounded-xl mb-6 border-l-4 border-emerald-500 font-medium text-sm flex items-center gap-3">
                        <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>NIK <strong class="text-emerald-900">{{ request('nik') }}</strong> terdaftar sebagai penerima bantuan.</span>
                    </div>

                    {{-- Tabel Hasil --}}
                    <div class="overflow-x-auto rounded-xl border border-gray-200">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 text-xs uppercase tracking-wider">
                                    <th class="p-4 font-bold">Nama</th>
                                    <th class="p-4 font-bold">Jenis Bantuan</th>
                                    <th class="p-4 font-bold text-center">Tahun</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach($hasil_cari as $penerima)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="p-4 text-sm text-gray-800 font-bold">
                                        {{ Str::mask($penerima->nama_penerima, '*', 3) }}
                                    </td>
                                    <td class="p-4">
                                        <span class="bg-[#2ac0b4]/10 text-[#2ac0b4] font-bold px-3 py-1.5 rounded-full text-xs">
                                            {{ $penerima->jenis_bantuan }}
                                        </span>
                                    </td>
                                    <td class="p-4 text-sm text-gray-600 text-center font-bold">
                                        {{ $penerima->tahun ?? $penerima->created_at->format('Y') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @else
                    {{-- Notifikasi Gagal/Tidak Ketemu --}}
                    <div class="bg-red-50 text-red-700 px-5 py-4 rounded-xl border-l-4 border-red-500 font-medium text-sm flex items-center gap-3">
                        <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Maaf, NIK <strong class="text-red-900">{{ request('nik') }}</strong> tidak ditemukan dalam data penerima bansos kami.</span>
                    </div>
                    @endif

                </div>
                @endif

            </div>
        </div>

    </section>
</x-frontend>
