<x-frontend>

    @php
    // Menggunakan helper collect() bawaan Laravel agar aman untuk Array maupun Collection

    // 1. Data Wajib Pilih (Variabel dari Controller: $wp_labels & $wp_values)
    $labels = !empty($wp_labels) && count($wp_labels) > 0 ? $wp_labels : ['2024', '2025', '2026'];
    $values = !empty($wp_values) && count($wp_values) > 0 ? $wp_values : [0, 0, 0];
    // Pengganti array_filter: ubah ke collection -> filter nilai 0 -> cek apakah masih ada isinya
    $hasWpData = collect($values)->filter()->isNotEmpty();

    // 2. Data Pendidikan (Variabel dari Controller: $pendidikan_labels & $pendidikan_values)
    $eduLabels = !empty($pendidikan_labels) && count($pendidikan_labels) > 0 ? $pendidikan_labels : [
    'Tidak/Belum Sekolah', 'Belum Tamat SD/Sederajat', 'Tamat SD/Sederajat',
    'SLTP/Sederajat', 'SLTA/Sederajat', 'Diploma I/II',
    'Diploma III/Sarjana Muda', 'Diploma IV/Strata I', 'Strata II', 'Strata III'
    ];
    $eduData = !empty($pendidikan_values) && count($pendidikan_values) > 0 ? $pendidikan_values : array_fill(0, 10, 0);
    $hasEduData = collect($eduData)->filter()->isNotEmpty();

    // 3. Data Dusun (Variabel dari Controller: $dusun_labels & $dusun_totals)
    $dusunLabels = !empty($dusun_labels) && count($dusun_labels) > 0 ? $dusun_labels : ['Belum Ada Dusun'];
    $dusunData = !empty($dusun_totals) && count($dusun_totals) > 0 ? $dusun_totals : [0];
    $hasDusunData = collect($dusunData)->filter()->isNotEmpty();

    // 4. Data Piramida Penduduk (Variabel dari Controller: $categories, $data_laki, $data_perempuan)
    $piramidaLabels = !empty($categories) && count($categories) > 0 ? $categories : [
    '0-4', '5-9', '10-14', '15-19', '20-24', '25-29', '30-34', '35-39',
    '40-44', '45-49', '50-54', '55-59', '60-64', '65-69', '70-74', '75-79', '80-84', '85+'
    ];
    $lakiLaki = !empty($data_laki) && count($data_laki) > 0 ? $data_laki : array_fill(0, 18, 0);
    $perempuan = !empty($data_perempuan) && count($data_perempuan) > 0 ? $data_perempuan : array_fill(0, 18, 0);
    $hasPiramidaData = collect($lakiLaki)->filter()->isNotEmpty() || collect($perempuan)->filter()->isNotEmpty();

    // 5. Ikon Status Perkawinan & Agama (Tetap sama)
    $icons = [
    'Belum Kawin' => asset('assets/img/icon-belum-kawin-B6LGf_QT.svg'),
    'Kawin' => asset('assets/img/icon-kawin-DDA193Z5.svg'),
    'Cerai Mati' => asset('assets/img/icon-cerai-mati-VdEzxQgX.svg'),
    'Kawin Tercatat' => asset('assets/img/icon-kawin-tercatat-Cr_1J14L.svg'),
    'Cerai Hidup' => asset('assets/img/icon-cerai-hidup-c75sVKpW.svg'),
    'Kawin Tidak Tercatat' => asset('assets/img/icon-kawin-tak-tercatat-Ba6jJHqw.svg'),
    ];
    $default_icon = 'https://cdn-icons-png.flaticon.com/512/1077/1077114.png';

    $agamaIcons = [
    'Islam' => asset('assets/img/icon-islam-CvTs3lrK.svg'),
    'Kristen' => asset('assets/img/icon-kristen-DnmWrutu.svg'),
    'Katolik' => asset('assets/img/icon-katolik-Bh6D2yYr.svg'),
    'Hindu' => asset('assets/img/icon-hindu-O6CRjU7v (1).svg'),
    'Buddha' => asset('assets/img/icon-buddha-4LzubUEG.svg'),
    'Konghucu' => asset('assets/img/icon-konghuchu-S2zKN_1w.svg'),
    'Kepercayaan Lainnya' => asset('assets/img/icon-kepercayaan-lainnya-CtFL_S6_.svg'),
    ];
    $defaultAgamaIcon = 'https://cdn-icons-png.flaticon.com/512/1077/1077114.png';
    @endphp

    <section class="infografis-page ">

        {{-- ========================================== --}}
        {{-- 1. VERSI MOBILE & DESKTOP (Header)         --}}
        {{-- ========================================== --}}
        <div class="w-full max-w-7xl mx-auto mt-12 mb-8 ">


            {{-- KODE ASLI KAMU DIMULAI DARI SINI (Tidak ada yang diubah) --}}
            <div class="header-infografis flex justify-between items-center w-full">


                <div class="hidden md:block brand-title mr-40">
                    <h1>INFOGRAFIS<br>DESA Bedi Kulon</h1>
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

                    <a href="{{ route('frontend.idm') }}" class="nav-item flex-none {{ Route::is('frontend.idm') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-crown">
                                <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z"></path>
                            </svg>
                        </div>
                        <span class="nav-text">IDM</span>
                    </a>




                </div>

            </div>
            {{-- KODE ASLI KAMU BERAKHIR DI SINI --}}

        </div>


        {{-- ========================================== --}}
        {{-- 1. KHUSUS DEKSTOP (demografi) --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto -mt-5 mb-10">

            {{-- Gunakan flex-row, items-center agar teks dan gambar sejajar secara vertikal di tengah, gap diperbesar --}}
            <div class="pb-4 lg:pb-8 flex flex-col lg:flex-row items-center gap-12 lg:gap-20 transition-all duration-300">

                {{-- Sisi Kiri: Judul & Deskripsi (Proporsi 50%) --}}
                <div class="demografi-text lg:w-1/2">

                    {{-- JUDUL: 1 Baris, Extra Bold, Uppercase, Ukuran disesuaikan --}}
                    <h2 class="text-[#2ac0b4] font-black text-[42px] xl:text-[46px] mb-6 text-left tracking-tight uppercase leading-tight drop-shadow-sm">
                        DEMOGRAFI PENDUDUK
                    </h2>

                    {{-- PARAGRAF: Rata Kiri, Warna lebih gelap (gray-800), font-medium, ukuran text-lg --}}
                    <p class="text-gray-800 text-lg leading-relaxed text-left font-medium pr-4">
                        Memberikan informasi lengkap mengenai karakteristik demografi penduduk suatu wilayah.
                        Mulai dari jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, agama,
                        dan aspek penting lainnya yang menggambarkan komposisi populasi secara rinci.
                    </p>

                </div>

                {{-- Sisi Kanan: Visualisasi Gambar (Proporsi 50%) --}}
                {{-- justify-end agar gambar merapat ke kanan --}}
                <div class="demografi-visual lg:w-1/2 flex justify-center lg:justify-end">
                    {{-- max-w-[550px] agar gambar cukup besar tapi tidak meluber --}}
                    <img src="{{ asset('assets/img/Infografis.png') }}" alt="Visualisasi Data" class="w-full max-w-[550px] h-auto object-contain transition-transform duration-500 hover:scale-105">
                </div>

            </div>

        </div>


        {{-- ========================================== --}}
        {{-- 1. KHUSUS DESKTOP (Jumlah Penduduk dan Kepala Keluarga) --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-10">
            <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-8 text-left tracking-tight drop-shadow-sm uppercase">
                Jumlah Penduduk dan Kepala Keluarga
            </h2>

            <div class="stat-penduduk-grid grid grid-cols-4 gap-6">
                {{-- Card 1 --}}
                <div class="stat-card-penduduk bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                    <div class="stat-icon-wrapper w-16 h-16 flex-shrink-0">
                        <img src="{{ asset('assets/img/icon-total-penduduk-Du2cCbAO.svg') }}" alt="Icon Total" class="w-full h-full">
                    </div>
                    <div class="stat-data flex flex-col">
                        <span class="stat-label text-xs font-bold text-gray-500 uppercase tracking-wider">TOTAL PENDUDUK</span>
                        <span class="stat-value text-2xl font-black text-[#2ac0b4]">
                            {{ number_format($total_penduduk, 0, ',', '.') }} <small class="text-sm font-normal text-gray-400">Jiwa</small>
                        </span>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="stat-card-penduduk bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                    <div class="stat-icon-wrapper w-16 h-16 flex-shrink-0">
                        <img src="{{ asset('assets/img/icon-kepala-keluarga-D4UfE36x.svg') }}" alt="Icon KK" class="w-full h-full">
                    </div>
                    <div class="stat-data flex flex-col">
                        <span class="stat-label text-xs font-bold text-gray-500 uppercase tracking-wider">KEPALA KELUARGA</span>
                        <span class="stat-value text-2xl font-black text-[#2ac0b4]">
                            {{ number_format($total_kk, 0, ',', '.') }} <small class="text-sm font-normal text-gray-400">KK</small>
                        </span>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="stat-card-penduduk bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                    <div class="stat-icon-wrapper w-16 h-16 flex-shrink-0">
                        <img src="{{ asset('assets/img/icon-perempuan-BCmUG8mA.svg') }}" alt="Icon Perempuan" class="w-full h-full">
                    </div>
                    <div class="stat-data flex flex-col">
                        <span class="stat-label text-xs font-bold text-gray-500 uppercase tracking-wider">PEREMPUAN</span>
                        <span class="stat-value text-2xl font-black text-[#2ac0b4]">
                            {{ number_format($total_perempuan, 0, ',', '.') }} <small class="text-sm font-normal text-gray-400">Jiwa</small>
                        </span>
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="stat-card-penduduk bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                    <div class="stat-icon-wrapper w-16 h-16 flex-shrink-0">
                        <img src="{{ asset('assets/img/icon-laki-CmERQRaD.svg') }}" alt="Icon Laki-laki" class="w-full h-full">
                    </div>
                    <div class="stat-data flex flex-col">
                        <span class="stat-label text-xs font-bold text-gray-500 uppercase tracking-wider">LAKI-LAKI</span>
                        <span class="stat-value text-2xl font-black text-[#2ac0b4]">
                            {{ number_format($total_laki, 0, ',', '.') }} <small class="text-sm font-normal text-gray-400">Jiwa</small>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- ========================================== --}}
        {{-- 2. KHUSUS MOBILE (Jumlah Penduduk dan Kepala Keluarga) --}}
        {{-- ========================================== --}}
        <div class="block md:hidden bg-[#f8f9fa] py-10 px-5">
            <h2 class="text-[#2ac0b4] font-black text-xl text-center tracking-wide mb-8">
                Jumlah Penduduk
            </h2>

            {{-- Grid 2 Kolom untuk HP (Sesuai Referensi Gambar) --}}
            <div class="grid grid-cols-2 gap-y-10 gap-x-2">

                {{-- 1. Total Penduduk --}}
                <div class="flex flex-col items-center text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/437/437501.png" alt="Penduduk" class="w-[70px] h-[70px] mb-2 object-contain">
                    <span class="font-extrabold text-[22px] text-black leading-tight tracking-wide">
                        {{ number_format($total_penduduk, 0, ',', '.') }}
                    </span>
                    <span class="text-[14px] text-gray-900 font-medium mt-0.5">
                        Penduduk
                    </span>
                </div>

                {{-- 2. Kepala Keluarga --}}
                <div class="flex flex-col items-center text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3667/3667325.png" alt="Kepala Keluarga" class="w-[70px] h-[70px] mb-2 object-contain">
                    <span class="font-extrabold text-[22px] text-black leading-tight tracking-wide">
                        {{ number_format($total_kk, 0, ',', '.') }}
                    </span>
                    <span class="text-[14px] text-gray-900 font-medium mt-0.5">
                        Kepala Keluarga
                    </span>
                </div>

                {{-- 3. Laki-Laki --}}
                <div class="flex flex-col items-center text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png" alt="Laki-Laki" class="w-[70px] h-[70px] mb-2 object-contain">
                    <span class="font-extrabold text-[22px] text-black leading-tight tracking-wide">
                        {{ number_format($total_laki, 0, ',', '.') }}
                    </span>
                    <span class="text-[14px] text-gray-900 font-medium mt-0.5">
                        Laki-Laki
                    </span>
                </div>

                {{-- 4. Perempuan --}}
                <div class="flex flex-col items-center text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="Perempuan" class="w-[70px] h-[70px] mb-2 object-contain">
                    <span class="font-extrabold text-[22px] text-black leading-tight tracking-wide">
                        {{ number_format($total_perempuan, 0, ',', '.') }}
                    </span>
                    <span class="text-[14px] text-gray-900 font-medium mt-0.5">
                        Perempuan
                    </span>
                </div>

            </div>

        </div>


        {{-- ========================================== --}}
        {{-- 1. VERSI DESKTOP (Berdasarkan Kelompok Umur) --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-20">

            {{-- Judul (Gaya & Ukuran Sama) --}}
            <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-8 text-left tracking-tight drop-shadow-sm uppercase">
                Berdasarkan Kelompok Umur
            </h2>

            {{-- Kotak Putih Grafik --}}
            <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10">

                @if($hasPiramidaData)
                {{-- Area Canvas Grafik (Hanya tampil jika ada data) --}}
                <div class="relative w-full h-[600px]">
                    <canvas id="piramidaChartDesktop"></canvas>
                </div>
                @else
                {{-- Tampilan Placeholder (Empty State) jika data kosong --}}
                <div class="flex flex-col items-center justify-center w-full h-[400px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    {{-- Ikon Grafik Kosong --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Grafik Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Data statistik penduduk berdasarkan kelompok umur belum diinput. Silakan tambahkan data melalui panel admin untuk melihat visualisasi piramida penduduk.
                    </p>
                </div>
                @endif

            </div>
        </div>


        {{-- ========================================== --}}
        {{-- 2. VERSI MOBILE (Berdasarkan Kelompok Umur) --}}
        {{-- ========================================== --}}
        <div class="block md:hidden w-full bg-white rounded-xl shadow-sm border border-gray-100 p-4 mt-8">

            <h2 class="text-[#2ac0b4] font-black text-[18px] text-center uppercase mb-4 tracking-wide drop-shadow-sm">
                Berdasarkan Kelompok Umur
            </h2>

            @if($hasPiramidaData)
            {{-- Tinggi kotak mobile dibuat LEBIH TINGGI (650px) agar batang rentang umur tidak gepeng --}}
            <div class="relative w-full h-[650px]">
                <canvas id="piramidaChartMobile"></canvas>
            </div>
            @else
            {{-- Tampilan Placeholder (Empty State) Standar untuk Mobile --}}
            <div class="flex flex-col items-center justify-center w-full h-[300px] bg-gray-50 rounded-lg border-2 border-dashed border-gray-200 p-4">
                {{-- Ikon Grafik Kosong (Ukuran disesuaikan untuk mobile) --}}
                <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Grafik Belum Tersedia</p>
                <p class="text-gray-400 text-xs mt-2 text-center leading-relaxed">
                    Data statistik penduduk berdasarkan kelompok umur belum diinput ke dalam sistem.
                </p>
            </div>
            @endif

        </div>


        {{-- ========================================== --}}
        {{-- 3. VERSI MOBILE & DEKSTOP (Berdasarkan Kelompok Umur)--}}
        {{-- ========================================== --}}
        <div class="w-full max-w-7xl mx-auto mt-6 mb-16">

            {{-- Flex Layout: Atas-bawah di HP, Kiri-kanan di Laptop --}}
            <div class="flex flex-col md:flex-row gap-6">

                {{-- Kartu Narasi Laki-laki (Border Biru) --}}
                <div class="bg-white p-6 lg:p-8 rounded-2xl shadow-sm border border-gray-100 border-b-[5px] border-b-[#4698db] flex-1 transition-all duration-300 hover:shadow-md">
                    @if($max_laki && $min_laki)
                    <p class="text-gray-600 text-base leading-relaxed text-justify font-medium">
                        Untuk jenis kelamin laki-laki, kelompok umur <strong class="text-gray-900">{{ $max_laki->kelompok_umur }}</strong>
                        adalah yang tertinggi dengan jumlah <strong class="text-[#4698db]">{{ $max_laki->laki_laki }} orang</strong>
                        atau <strong class="text-gray-900">{{ number_format($persen_max_laki, 2) }}%</strong>.
                        Sedangkan, kelompok umur <strong class="text-gray-900">{{ $min_laki->kelompok_umur }}</strong>
                        adalah yang terendah dengan jumlah <strong class="text-[#4698db]">{{ $min_laki->laki_laki }} orang</strong>
                        atau <strong class="text-gray-900">{{ number_format($persen_min_laki, 2) }}%</strong>.
                    </p>
                    @else
                    <p class="text-gray-400 text-base text-center italic mt-4 mb-4">
                        Data statistik umur laki-laki belum tersedia.
                    </p>
                    @endif
                </div>

                {{-- Kartu Narasi Perempuan (Border Pink) --}}
                <div class="bg-white p-6 lg:p-8 rounded-2xl shadow-sm border border-gray-100 border-b-[5px] border-b-[#ec24cb] flex-1 transition-all duration-300 hover:shadow-md">
                    @if($max_cewe && $min_cewe)
                    <p class="text-gray-600 text-base leading-relaxed text-justify font-medium">
                        Untuk jenis kelamin perempuan, kelompok umur <strong class="text-gray-900">{{ $max_cewe->kelompok_umur }}</strong>
                        adalah yang tertinggi dengan jumlah <strong class="text-[#ec24cb]">{{ $max_cewe->perempuan }} orang</strong>
                        atau <strong class="text-gray-900">{{ number_format($persen_max_cewe, 2) }}%</strong>.
                        Sedangkan, kelompok umur <strong class="text-gray-900">{{ $min_cewe->kelompok_umur }}</strong>
                        adalah yang terendah dengan jumlah <strong class="text-[#ec24cb]">{{ $min_cewe->perempuan }} orang</strong>
                        atau <strong class="text-gray-900">{{ number_format($persen_min_cewe, 2) }}%</strong>.
                    </p>
                    @else
                    <p class="text-gray-400 text-base text-center italic mt-4 mb-4">
                        Data statistik umur perempuan belum tersedia.
                    </p>
                    @endif
                </div>

            </div>

        </div>


        {{-- ========================================== --}}
        {{-- 4. VERSI DESKTOP (Berdasarkan Dusun)          --}}
        {{-- ========================================== --}}

        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">
            {{-- Judul --}}
            <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-8 text-left tracking-tight drop-shadow-sm uppercase">
                Berdasarkan Dusun
            </h2>

            {{-- KOTAK PUTIH UTAMA (Ditaruh di luar @if agar selalu tampil sebagai bingkai) --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-12 w-full">

                @if($hasDusunData)
                {{-- Wrapper Flex (Hanya dirender jika ada data) --}}
                <div class="flex flex-col lg:flex-row items-center justify-between gap-10">

                    {{-- Bagian Kiri: Kotak Canvas Desktop --}}
                    <div class="w-full lg:w-1/2 relative h-[380px] flex justify-center">
                        <canvas id="dusunChartDesktop"></canvas>
                    </div>

                    {{-- Bagian Kanan: Keterangan Data --}}
                    <div class="w-full lg:w-1/2 lg:pl-16 flex flex-col justify-center">
                        <h3 class="text-gray-900 font-extrabold text-[24px] mb-6 border-b-2 border-[#2ac0b4] pb-2 inline-block w-fit">
                            Keterangan:
                        </h3>

                        <ul class="text-gray-600 text-[18px] space-y-4 font-medium">
                            @foreach($dusunLabels as $index => $label)
                            @if(isset($dusunData[$index]))
                            <li class="flex items-center">
                                <span class="w-3 h-3 rounded-full bg-[#2ac0b4] inline-block mr-4 flex-shrink-0"></span>
                                <span class="font-bold text-gray-800 w-32">{{ $label }}</span>
                                <span class="mx-2 text-gray-400">:</span>
                                <span class="text-[#2ac0b4] font-black text-xl">
                                    {{ number_format($dusunData[$index], 0, ',', '.') }}
                                    <small class="text-gray-400 font-medium text-sm ml-1">Jiwa</small>
                                </span>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>

                </div>
                @else
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis --}}
                <div class="flex flex-col items-center justify-center w-full h-[380px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Dusun Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Sebaran demografi penduduk berdasarkan dusun/wilayah belum diinput.
                    </p>
                </div>
                @endif

            </div>

        </div>


        {{-- ========================================== --}}
        {{-- 5. VERSI MOBILE (Berdasarkan Dusun)  --}}
        {{-- ========================================== --}}
        <div class="block md:hidden w-full max-w-sm mx-auto bg-white rounded-xl shadow-[0_4px_15px_rgba(0,0,0,0.05)] border border-gray-100 p-6 mt-6">

            <h2 class="text-[#2ac0b4] font-black text-[18px] text-center uppercase mb-4 tracking-wide drop-shadow-sm">
                Berdasarkan Dusun
            </h2>

            @if($hasDusunData)
            {{-- Kotak Canvas Mobile (Tinggi sedikit dikurangi agar pas di layar HP) --}}
            <div class="relative w-full h-[250px]">
                <canvas id="dusunChartMobile"></canvas>
            </div>
            @else
            {{-- Tampilan Placeholder (Empty State) Mobile Standar --}}
            <div class="flex flex-col items-center justify-center w-full h-[250px] bg-gray-50 rounded-lg border-2 border-dashed border-gray-200 p-4">
                {{-- Ikon Home/Dusun --}}
                <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Data</p>
                <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                    Demografi berdasarkan dusun belum diinput.
                </p>
            </div>
            @endif

        </div>

        {{-- ========================================== --}}
        {{-- 6. VERSI DESKTOP (Berdasarkan Pendidikan)     --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">

            {{-- Judul & Subjudul --}}
            <div class="mb-8 flex flex-col gap-2">
                <h2 class="text-[#2ac0b4] font-extrabold text-[36px] lg:text-[40px] text-left tracking-tight drop-shadow-sm uppercase">
                    Berdasarkan Pendidikan
                </h2>
                <p class="text-gray-500 font-medium text-lg border-l-4 border-[#2ac0b4] pl-3 ml-1">
                    Distribusi demografi berdasarkan tingkat pendidikan terakhir yang ditamatkan.
                </p>
            </div>

            {{-- KOTAK PUTIH UTAMA (Styling standar yang bersih dan ringan) --}}
            <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10">

                @if($hasEduData)
                {{-- Area Canvas Grafik --}}
                <div class="relative w-full h-[450px]">
                    <canvas id="pendidikanChartDesktop"></canvas>
                </div>
                @else
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis --}}
                <div class="flex flex-col items-center justify-center w-full h-[450px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    {{-- Ikon Buku/Pendidikan --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Pendidikan Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Statistik tingkat pendidikan penduduk saat ini belum diinput. Grafik bar akan ditampilkan secara otomatis setelah data ditambahkan.
                    </p>
                </div>
                @endif

            </div>

        </div>


        {{-- ========================================== --}}
        {{-- 7. VERSI MOBILE (Berdasarkan Pendidikan)  --}}
        {{-- ========================================== --}}
        <div class="block md:hidden w-full max-w-sm mx-auto mt-8 px-4">

            {{-- Judul Kiri Atas (Ukuran teks sedikit dikecilkan untuk HP) --}}
            <h2 class="text-[#2ac0b4] font-black text-[22px] mb-4 tracking-wide text-left">
                Berdasarkan Pendidikan
            </h2>

            {{-- Kotak Background Putih (Tinggi dan padding disesuaikan) --}}
            <div class="relative w-full h-[350px] bg-white rounded-xl shadow-[0_4px_15px_rgba(0,0,0,0.05)] border border-gray-100 p-4">

                @if($hasEduData)
                {{-- WAJIB: Gunakan ID khusus mobile agar tidak bentrok --}}
                <canvas id="pendidikanChartMobile"></canvas>
                @else
                {{-- Tampilan Placeholder (Empty State) Mobile Standar --}}
                <div class="flex flex-col items-center justify-center w-full h-full bg-gray-50 rounded-lg border-2 border-dashed border-gray-200 p-4">
                    {{-- Ikon Buku/Pendidikan --}}
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Data</p>
                    <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                        Statistik tingkat pendidikan belum diinput.
                    </p>
                </div>
                @endif

            </div>

        </div>


        {{-- ========================================== --}}
        {{-- 8. VERSI DESKTOP (Berdasarkan Pekerjaan)      --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">

            {{-- Judul & Subjudul --}}
            <div class="mb-8 flex flex-col gap-2">
                <h2 class="text-[#2ac0b4] font-extrabold text-[36px] lg:text-[40px] text-left tracking-tight drop-shadow-sm uppercase">
                    Berdasarkan Pekerjaan
                </h2>
                <p class="text-gray-500 font-medium text-lg border-l-4 border-[#2ac0b4] pl-3 ml-1">
                    Rincian mata pencaharian dan profesi utama penduduk desa.
                </p>
            </div>

            @if($pekerjaan_top && count($pekerjaan_top) > 0)
            {{-- Container Flex: Kiri untuk Grid Card, Kanan untuk Tabel --}}
            <div class="flex flex-row gap-10 lg:gap-12 items-start">

                {{-- BAGIAN KIRI: Kotak/Card Pekerjaan Teratas (Lebar 60%) --}}
                <div class="w-7/12 grid grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($pekerjaan_top as $item)
                    <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex flex-col justify-between min-h-[140px] hover:shadow-md transition-all duration-300">
                        <span class="text-gray-600 font-bold text-base leading-snug">
                            {{ $item->nama_pekerjaan }}
                        </span>
                        <span class="text-[#2ac0b4] font-black text-4xl self-end mt-4">
                            {{ number_format($item->jumlah, 0, ',', '.') }}
                        </span>
                    </div>
                    @endforeach
                </div>

                {{-- BAGIAN KANAN: Tabel Sisa Pekerjaan (Lebar 40%) --}}
                <div class="w-5/12 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-y-auto h-[400px] xl:h-[450px] relative">
                        <table class="w-full text-left border-collapse">
                            <thead class="sticky top-0 z-10 shadow-sm">
                                <tr>
                                    <th class="bg-[#2ac0b4] text-white py-4 px-5 font-bold text-base tracking-wide uppercase">Jenis Pekerjaan</th>
                                    <th class="bg-[#2ac0b4] text-white py-4 px-5 font-bold text-base text-center w-28 tracking-wide uppercase">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 text-[14px] font-medium bg-white">
                                @if(count($pekerjaan_sisanya) > 0)
                                @foreach($pekerjaan_sisanya as $item)
                                <tr class="border-b border-gray-100 last:border-0 hover:bg-gray-50 transition-colors">
                                    <td class="py-3 px-5">{{ $item->nama_pekerjaan }}</td>
                                    <td class="py-3 px-5 text-center text-gray-800 font-bold">{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                                </tr>
                                @endforeach
                                @else
                                {{-- Jika ada pekerjaan, tapi jumlahnya kurang dari 6 (tidak ada sisa untuk tabel) --}}
                                <tr>
                                    <td colspan="2" class="py-10 px-5 text-center text-gray-400 italic">
                                        Tidak ada data pekerjaan lainnya.
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            @else
            {{-- KOTAK PUTIH UTAMA untuk Placeholder --}}
            <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10">
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis --}}
                <div class="flex flex-col items-center justify-center w-full h-[350px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Pekerjaan Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Statistik profesi dan mata pencaharian penduduk saat ini belum diinput. Data akan muncul di sini setelah ditambahkan.
                    </p>
                </div>
            </div>
            @endif

        </div>


        {{-- ========================================== --}}
        {{-- 9. VERSI MOBILE (Berdasarkan Pekerjaan)  --}}
        {{-- ========================================== --}}
        <div class="block md:hidden w-full max-w-sm mx-auto bg-white rounded-xl shadow-[0_4px_15px_rgba(0,0,0,0.05)] border border-gray-100 p-5 mt-8">

            <h2 class="text-[#2ac0b4] font-black text-[18px] text-center uppercase mb-6 tracking-wide drop-shadow-sm">
                Berdasarkan Pekerjaan
            </h2>

            @if($pekerjaan_top && count($pekerjaan_top) > 0)
            <div class="flex flex-col gap-6">

                {{-- 1. BAGIAN TABEL --}}
                <div class="overflow-y-auto max-h-[320px] rounded-lg border border-gray-200">
                    <table class="w-full text-left border-collapse">
                        <thead class="sticky top-0 z-10 shadow-sm">
                            <tr>
                                <th class="bg-[#a3e678] text-white py-3 px-4 font-bold text-[15px] tracking-wide">Jenis Pekerjaan</th>
                                <th class="bg-[#a3e678] text-white py-3 px-4 font-bold text-[15px] text-center w-24 tracking-wide">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-[13px] font-medium bg-white">
                            @if(count($pekerjaan_sisanya) > 0)
                            @foreach($pekerjaan_sisanya as $item)
                            <tr class="border-b border-gray-100 last:border-0 hover:bg-gray-50">
                                <td class="py-3 px-4">{{ $item->nama_pekerjaan }}</td>
                                <td class="py-3 px-4 text-center text-gray-800 font-bold">{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                            </tr>
                            @endforeach
                            @else
                            {{-- Jika data sisa tidak ada --}}
                            <tr>
                                <td colspan="2" class="py-6 px-4 text-center text-gray-400 italic">
                                    Tidak ada data lainnya.
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                {{-- 2. BAGIAN KOTAK/CARD --}}
                <div class="grid grid-cols-2 gap-3">
                    @foreach($pekerjaan_top as $item)
                    <div class="bg-white border border-gray-100 rounded-lg p-4 shadow-sm flex flex-col justify-between min-h-[110px]">
                        <span class="text-gray-600 font-bold text-[13px] leading-snug">
                            {{ $item->nama_pekerjaan }}
                        </span>
                        <span class="text-[#4b5563] font-black text-3xl self-end mt-3">
                            {{ number_format($item->jumlah, 0, ',', '.') }}
                        </span>
                    </div>
                    @endforeach
                </div>

            </div>
            @else
            {{-- Tampilan Placeholder (Empty State) Mobile Standar --}}
            <div class="flex flex-col items-center justify-center w-full h-[300px] bg-gray-50 rounded-lg border-2 border-dashed border-gray-200 p-4">
                {{-- Ikon Koper/Pekerjaan --}}
                <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Data</p>
                <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                    Statistik profesi dan pekerjaan belum diinput.
                </p>
            </div>
            @endif

        </div>



        {{-- ========================================== --}}
        {{-- 10. VERSI DESKTOP (Berdasarkan Wajib Pilih)    --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">

            {{-- Judul & Subjudul --}}
            <div class="mb-8 flex flex-col gap-2">
                <h2 class="text-[#2ac0b4] font-extrabold text-[36px] lg:text-[40px] text-left tracking-tight drop-shadow-sm uppercase">
                    Berdasarkan Wajib Pilih
                </h2>
                <p class="text-gray-500 font-medium text-lg border-l-4 border-[#2ac0b4] pl-3 ml-1">
                    Statistik penduduk yang telah memenuhi kriteria usia untuk mengikuti pemilihan umum.
                </p>
            </div>

            {{-- KOTAK PUTIH UTAMA (Styling standar yang bersih dan ringan) --}}
            <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10">

                @if($hasWpData)
                {{-- Area Canvas Grafik --}}
                <div class="relative w-full h-[450px]">
                    <canvas id="wajibPilihDesktop" data-labels='@json($wp_labels)' data-values='@json($wp_values)'></canvas>
                </div>
                @else
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis --}}
                <div class="flex flex-col items-center justify-center w-full h-[450px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    {{-- Ikon Perisai Terverifikasi --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Wajib Pilih Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Statistik penduduk kategori wajib pilih belum diinput ke dalam sistem. Grafik akan tampil secara otomatis setelah data tersedia.
                    </p>
                </div>
                @endif

            </div>

        </div>

        {{-- ==========================================  --}}
        {{-- 11. VERSI MOBILE (Berdasarkan Wajib Pilih)--}}
        {{-- ==========================================  --}}
        <div class="block md:hidden w-full max-w-sm mx-auto mt-8 px-4">

            {{-- Judul Kiri Atas --}}
            <h2 class="text-[#2ac0b4] font-black text-[22px] mb-4 tracking-wide text-left">
                Berdasarkan Wajib Pilih
            </h2>

            {{-- Kotak Background Putih --}}
            <div class="relative w-full h-[350px] bg-white rounded-xl shadow-[0_4px_15px_rgba(0,0,0,0.05)] border border-gray-100 p-4">

                @if($hasWpData)
                {{-- Area Canvas Grafik Mobile --}}
                {{-- PERBAIKAN: Menghapus typo karakter '>' ekstra di akhir tag canvas --}}
                <canvas id="wajibPilihMobile" data-labels='@json($wp_labels)' data-values='@json($wp_values)'></canvas>
                @else
                {{-- Tampilan Placeholder (Empty State) Mobile Standar --}}
                <div class="flex flex-col items-center justify-center w-full h-full bg-gray-50 rounded-lg border-2 border-dashed border-gray-200 p-4">
                    {{-- Ikon Perisai Terverifikasi --}}
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Data</p>
                    <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                        Statistik kategori wajib pilih belum diinput.
                    </p>
                </div>
                @endif

            </div>

        </div>

        {{-- ========================================== --}}
        {{-- 12. VERSI DESKTOP (Berdasarkan Perkawinan)     --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">

            {{-- Judul & Subjudul --}}
            <div class="mb-8 flex flex-col gap-2">
                <h2 class="text-[#2ac0b4] font-extrabold text-[36px] lg:text-[40px] text-left tracking-tight drop-shadow-sm uppercase">
                    Berdasarkan Perkawinan
                </h2>
                <p class="text-gray-500 font-medium text-lg border-l-4 border-[#2ac0b4] pl-3 ml-1">
                    Distribusi penduduk berdasarkan status ikatan perkawinan secara hukum dan agama.
                </p>
            </div>

            @if(isset($kawin_data) && count($kawin_data) > 0)
            {{-- Grid Kartu Putih --}}
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-6">
                @foreach($kawin_data as $item)
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex flex-row items-center gap-x-6 transition-all duration-300 hover:shadow-md hover:-translate-y-1 group">

                    {{-- BAGIAN KIRI: Ikon Besar --}}
                    <div class="w-20 h-20 flex-shrink-0 flex items-center justify-center">
                        <img src="{{ $icons[$item->status] ?? $default_icon }}" alt="{{ $item->status }}" class="max-w-full max-h-full object-contain transition-transform duration-300 group-hover:scale-105">
                    </div>

                    {{-- BAGIAN KANAN: Teks dan Angka --}}
                    <div class="flex flex-col flex-grow text-left">
                        {{-- Nama Status --}}
                        <h3 class="text-gray-500 font-semibold text-[17px] mb-1 leading-snug">
                            {{ $item->status }}
                        </h3>
                        {{-- Angka Besar --}}
                        <span class="text-[#2ac0b4] text-3xl font-black leading-tight">
                            {{ number_format($item->jumlah, 0, ',', '.') }}
                        </span>
                    </div>

                </div>
                @endforeach
            </div>
            @else
            {{-- KOTAK PUTIH UTAMA untuk Placeholder --}}
            <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10">
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis --}}
                <div class="flex flex-col items-center justify-center w-full h-[300px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    {{-- Ikon Hati/Perkawinan --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Status Perkawinan Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Statistik penduduk berdasarkan status perkawinan belum diinput. Data akan muncul dalam bentuk kartu setelah Anda menambahkannya.
                    </p>
                </div>
            </div>
            @endif

        </div>

        {{-- ========================================== --}}
        {{-- 13. VERSI MOBILE (Berdasarkan Perkawinan) --}}
        {{-- ========================================== --}}
        <div class="block md:hidden w-full bg-[#f8f9fa] py-10 px-5 mt-8 rounded-xl">
            <div class="max-w-4xl mx-auto">

                {{-- Judul --}}
                <h2 class="text-[#2ac0b4] font-black text-[18px] text-center uppercase mb-10 tracking-wide drop-shadow-sm">
                    Berdasarkan Perkawinan
                </h2>

                @if(isset($kawin_data) && count($kawin_data) > 0)
                {{-- Grid Item Perkawinan --}}
                <div class="grid grid-cols-2 gap-y-10 gap-x-4">
                    @foreach($kawin_data as $item)
                    <div class="flex flex-col items-center text-center group">
                        <img src="{{ $icons[$item->status] ?? $default_icon }}" class="w-[75px] h-[75px] object-contain mb-3">
                        <span class="text-[#1f2937] text-[13px] font-semibold mb-1 leading-snug">
                            {{ $item->status }}
                        </span>
                        <span class="text-[#2ac0b4] text-[26px] font-normal">
                            {{ number_format($item->jumlah, 0, ',', '.') }}
                        </span>
                    </div>
                    @endforeach
                </div>
                @else
                {{-- Tampilan Placeholder (Empty State) Mobile Standar --}}
                <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto h-[250px] bg-white rounded-lg border-2 border-dashed border-gray-200 p-4">
                    {{-- Ikon Hati/Perkawinan --}}
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Data</p>
                    <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                        Statistik status perkawinan belum diinput.
                    </p>
                </div>
                @endif

            </div>
        </div>

        {{-- ========================================== --}}
        {{-- 14. VERSI DESKTOP (Berdasarkan Agama)          --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-20">

            {{-- Judul & Subjudul --}}
            <div class="mb-8 flex flex-col gap-2">
                <h2 class="text-[#2ac0b4] font-extrabold text-[36px] lg:text-[40px] text-left tracking-tight drop-shadow-sm uppercase">
                    Berdasarkan Agama
                </h2>
                <p class="text-gray-500 font-medium text-lg border-l-4 border-[#2ac0b4] pl-3 ml-1">
                    Distribusi penduduk berdasarkan agama dan kepercayaan yang dianut.
                </p>
            </div>

            @if(isset($agama_data) && count($agama_data) > 0)
            {{-- Grid Layout: 3 Kolom agar pas di layar --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach($agama_data as $item)
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex items-center transition-all duration-300 hover:shadow-md hover:-translate-y-1 group">

                    {{-- 1. Bagian Ikon --}}
                    <div class="flex-shrink-0 mr-6">
                        <img src="{{ $agamaIcons[$item->agama] ?? $defaultAgamaIcon }}" alt="{{ $item->agama }}" class="w-20 h-20 object-contain transition-transform duration-300 group-hover:scale-105">
                    </div>

                    {{-- 2. Bagian Teks --}}
                    <div class="flex flex-col justify-center">
                        {{-- Nama Agama --}}
                        <span class="text-gray-600 font-bold text-xl mb-0.5 leading-snug">
                            {{ $item->agama }}
                        </span>

                        {{-- Angka Hijau --}}
                        <div class="flex items-baseline mt-1">
                            <span class="text-[#2ac0b4] text-3xl font-black tracking-tight leading-tight">
                                {{ number_format($item->jumlah, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>
            @else
            {{-- KOTAK PUTIH UTAMA untuk Placeholder --}}
            <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10">
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis --}}
                <div class="flex flex-col items-center justify-center w-full h-[300px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    {{-- Ikon Bintang/Kepercayaan --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Keagamaan Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Statistik penduduk berdasarkan agama atau kepercayaan belum diinput. Data akan tersusun rapi dalam bentuk kartu setelah ditambahkan.
                    </p>
                </div>
            </div>
            @endif

        </div>

        {{-- ========================================== --}}
        {{-- 15. VERSI MOBILE (Berdasarkan Agama) --}}
        {{-- ========================================== --}}
        <div class="block md:hidden w-full bg-[#f8f9fa] py-10 px-5 mt-8 rounded-xl">
            <div class="max-w-4xl mx-auto">

                {{-- Judul --}}
                <h2 class="text-[#2ac0b4] font-black text-[18px] text-center uppercase mb-10 tracking-wide drop-shadow-sm">
                    Berdasarkan Agama
                </h2>

                @if(isset($agama_data) && count($agama_data) > 0)
                {{-- Grid Item Agama --}}
                <div class="grid grid-cols-2 gap-y-10 gap-x-4">
                    @foreach($agama_data as $item)
                    <div class="flex flex-col items-center text-center group">
                        <img src="{{ $agamaIcons[$item->agama] ?? $defaultAgamaIcon }}" alt="{{ $item->agama }}" class="w-[75px] h-[75px] object-contain mb-3 transition-transform duration-300 group-hover:scale-110">
                        <span class="text-[#1f2937] text-[13px] font-semibold mb-1 leading-snug">
                            {{ $item->agama }}
                        </span>
                        <span class="text-[#2ac0b4] text-[26px] font-normal">
                            {{ number_format($item->jumlah, 0, ',', '.') }}
                        </span>
                    </div>
                    @endforeach
                </div>
                @else
                {{-- Tampilan Placeholder (Empty State) Mobile Standar --}}
                <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto h-[250px] bg-white rounded-lg border-2 border-dashed border-gray-200 p-4">
                    {{-- Ikon Bintang/Kepercayaan --}}
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Data</p>
                    <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                        Statistik agama atau kepercayaan belum diinput.
                    </p>
                </div>
                @endif

            </div>
        </div>



    </section>
    {{-- ========================================== --}}
    {{-- Script Dusun --}}
    {{-- ========================================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // 1. Ambil kedua elemen Canvas
            const canvasDesktop = document.getElementById('dusunChartDesktop');
            const canvasMobile = document.getElementById('dusunChartMobile');

            // Jika keduanya tidak ada, hentikan script
            if (!canvasDesktop && !canvasMobile) return;

            // 2. Siapkan Data dari PHP
            const labelsDusun = @json($dusunLabels);
            const dataDusun = @json($dusunData);
            const warnaDusun = ['#5b7bd5', '#95cc6b', '#fba995', '#f3ce63'];

            // 3. Plugin Garis Penunjuk (Leader Lines)
            const garisPenunjukPlugin = {
                id: 'garisPenunjuk'
                , afterDraw(chart) {
                    const ctx = chart.ctx;
                    ctx.save();

                    const dataset = chart.data.datasets[0];
                    const meta = chart.getDatasetMeta(0);
                    const total = dataset.data.reduce((a, b) => a + b, 0);

                    meta.data.forEach((arc, index) => {
                        const value = dataset.data[index];
                        if (value === 0) return;

                        // Mengambil nama label dan menggabungkannya dengan persentase
                        const namaLabel = chart.data.labels[index];
                        const percentage = namaLabel + ' : ' + (value * 100 / total).toFixed(2) + '%';
                        const centerX = arc.x;
                        const centerY = arc.y;
                        const radius = arc.outerRadius;
                        const angle = (arc.startAngle + arc.endAngle) / 2;

                        const startX = centerX + Math.cos(angle) * radius;
                        const startY = centerY + Math.sin(angle) * radius;
                        const elbowX = centerX + Math.cos(angle) * (radius + 20);
                        const elbowY = centerY + Math.sin(angle) * (radius + 20);

                        const isRightSide = Math.cos(angle) >= 0;
                        const endX = elbowX + (isRightSide ? 20 : -20);
                        const endY = elbowY;

                        ctx.beginPath();
                        ctx.moveTo(startX, startY);
                        ctx.lineTo(elbowX, elbowY);
                        ctx.lineTo(endX, endY);
                        ctx.strokeStyle = dataset.backgroundColor[index];
                        ctx.lineWidth = 1.5;
                        ctx.stroke();

                        ctx.font = 'bold 11px Arial';
                        ctx.fillStyle = '#1f2937';
                        ctx.textBaseline = 'middle';
                        ctx.textAlign = isRightSide ? 'left' : 'right';

                        const textPadding = isRightSide ? 5 : -5;
                        ctx.fillText(percentage, endX + textPadding, endY);
                    });
                    ctx.restore();
                }
            };

            // 4. Buat Fungsi untuk Menggambar Grafik
            function buatGrafikDusun(elementCanvas) {
                if (!elementCanvas) return; // Jaga-jaga jika canvas kosong

                new Chart(elementCanvas, {
                    type: 'pie'
                    , data: {
                        labels: labelsDusun
                        , datasets: [{
                            data: dataDusun
                            , backgroundColor: warnaDusun
                            , borderWidth: 0
                            , hoverOffset: 6
                        }]
                    }
                    , plugins: [garisPenunjukPlugin]
                    , options: {
                        responsive: true
                        , maintainAspectRatio: false
                        , layout: {
                            padding: {
                                left: 60
                                , right: 60
                                , top: 20
                                , bottom: 20
                            }
                        }
                        , plugins: {
                            datalabels: {
                                display: false
                            }, // Matikan datalabels bawaan
                            llegend: {
                                display: false // Ini akan mematikan legend bawaan
                            }

                            , tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        let label = context.label || '';
                                        if (label) label += ': ';
                                        label += context.raw + ' Jiwa';
                                        return label;
                                    }
                                }
                            }
                        }
                    }
                });
            }

            // 5. Eksekusi Pembuatan Grafik ke Desktop dan Mobile
            buatGrafikDusun(canvasDesktop);
            buatGrafikDusun(canvasMobile);

        });

    </script>

    {{-- ========================================== --}}
    {{-- Script kelompok umur --}}
    {{-- ========================================== --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // 1. Data dari Controller Laravel
            const labels = @json($categories);
            const dataLaki = @json($data_laki);
            const dataPerempuan = @json($data_perempuan);

            // Ubah data laki-laki menjadi negatif agar grafiknya ke kiri
            const dataLakiNegatif = dataLaki.map(value => -value);

            // 2. Fungsi Utama untuk Membangun Grafik
            function bangunGrafik(idCanvas) {
                const elemenCanvas = document.getElementById(idCanvas);

                // Jika elemen tidak ditemukan di halaman, hentikan proses
                if (!elemenCanvas) return;

                const ctx = elemenCanvas.getContext('2d');

                new Chart(ctx, {
                    type: 'bar'
                    , data: {
                        labels: labels
                        , datasets: [{
                                label: 'Laki-Laki'
                                , data: dataLakiNegatif
                                , backgroundColor: '#6eb098', // Warna Hijau Tosca Pucat
                                borderRadius: 3
                                , barPercentage: 0.85
                                , categoryPercentage: 0.9
                            }
                            , {
                                label: 'Perempuan'
                                , data: dataPerempuan
                                , backgroundColor: '#fba995', // Warna Peach / Salem
                                borderRadius: 3
                                , barPercentage: 0.85
                                , categoryPercentage: 0.9
                            }
                        ]
                    }
                    , options: {
                        indexAxis: 'y', // Horizontal chart
                        maintainAspectRatio: false, // Wajib agar mengikuti tinggi div HTML
                        scales: {
                            x: {
                                stacked: true
                                , grid: {
                                    display: false
                                }, // Hilangkan garis vertikal
                                ticks: {
                                    callback: function(value) {
                                        return Math.abs(value); // Hilangkan tanda minus
                                    }
                                    , color: '#6b7280'
                                    , font: {
                                        size: 10
                                    }
                                }
                                , border: {
                                    display: false
                                }
                            }
                            , y: {
                                stacked: true
                                , grid: {
                                    color: '#f3f4f6'
                                }, // Garis pemisah antar umur
                                ticks: {
                                    color: '#4b5563'
                                    , font: {
                                        size: 11
                                        , weight: '500'
                                    }
                                }
                                , border: {
                                    display: false
                                }
                            }
                        }
                        , plugins: {
                            datalabels: {
                                color: '#1f2937', // Warna angka hitam
                                font: {
                                    weight: 'bold'
                                    , size: 10
                                }
                                , formatter: function(value) {
                                    if (value === 0) return '';
                                    return Math.abs(value); // Angka ujung bar positif
                                },
                                // Posisi angka: Laki-laki di kiri luar, Perempuan di kanan luar
                                anchor: function(context) {
                                    return context.datasetIndex === 0 ? 'start' : 'end';
                                }
                                , align: function(context) {
                                    return context.datasetIndex === 0 ? 'left' : 'right';
                                }
                                , offset: 4 // Jarak tulisan dari ujung batang
                            }
                            , legend: {
                                position: 'bottom'
                                , labels: {
                                    usePointStyle: true, // Ikon lingkaran
                                    boxWidth: 10
                                    , padding: 20
                                    , color: '#4b5563'
                                    , font: {
                                        size: 12
                                    }
                                }
                            }
                            , tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        let label = context.dataset.label || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        label += Math.abs(context.raw) + ' Jiwa';
                                        return label;
                                    }
                                }
                            }
                        }
                    }
                });
            }

            // 3. Eksekusi Fungsi untuk Kedua Canvas
            bangunGrafik('piramidaChartDesktop');
            bangunGrafik('piramidaChartMobile');

        });

    </script>

</x-frontend>
