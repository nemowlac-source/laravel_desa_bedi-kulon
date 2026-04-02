<x-frontend>
    <header class="w-full">
        <div id="desktopHeroBg" class="hero hidden md:flex h-[500px] md:h-screen items-center justify-center text-center overflow-hidden bg-cover bg-center bg-no-repeat transition-all duration-1000 ease-in-out relative" style="background-image: url('{{ asset('assets/img/background 1.webp') }}');">

            {{-- PERBAIKAN: Kabut hitam diganti jadi overlay transparan tipis (bg-black/20) --}}
            <div class="absolute inset-0 bg-black/4 transition-colors duration-700"></div>

            {{-- Konten Teks --}}
            <div class="hero-overlay z-10 relative px-4">
                <h1 class="text-white text-4xl md:text-6xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.8)] leading-tight">
                    Selamat Datang di <br />Website Resmi Desa Bedi Kulon
                </h1>
                <p class="text-white/90 text-lg md:text-xl mt-5 drop-shadow-[0_2px_2px_rgba(0,0,0,0.8)] font-medium max-w-2xl mx-auto">
                    Sumber informasi terbaru tentang pemerintahan di Desa Bedi Kulon
                </p>
            </div>
        </div>
    </header>


    {{-- SCRIPT ANTI GAGAL: Taruh persis di bawah </header> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Cari elemen berdasarkan ID yang barusan kita buat
            const heroDesktop = document.getElementById("desktopHeroBg");

            // Daftar gambar (PASTIKAN NAMA FILE DAN EKSTENSINYA BENAR ADA DI FOLDER)
            const slideImages = [
                "{{ asset('assets/img/background 1.webp') }}"
                , "{{ asset('assets/img/background 2.webp') }}", // Pastikan file ini ada
                "{{ asset('assets/img/background 3.webp') }}" // Pastikan file ini ada
            ];

            // Preload gambar agar tidak blank/kedip saat berganti
            slideImages.forEach(function(src) {
                const img = new Image();
                img.src = src;
            });

            // Eksekutor Ganti Gambar
            if (heroDesktop) {
                let currentIndex = 0;
                setInterval(function() {
                    currentIndex = (currentIndex + 1) % slideImages.length;
                    heroDesktop.style.backgroundImage = `url('${slideImages[currentIndex]}')`;
                }, 5000); // 5000 = 5 detik
            }
        });

    </script>


    <header class="block md:hidden bg-[#f7f8fa] mt-[68px] pt-4 pb-8">

        {{-- Container Scroll --}}
        {{-- PERBAIKAN: Tambahkan pl-5 (jarak awal) dan scroll-pl-5 (jarak saat di-snap) --}}
        <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 pl-5 pr-5 scroll-pl-5 scrollbar-hide py-2">

            {{-- Slide 1 --}}
            <div class="snap-start shrink-0 w-[98%] relative aspect-[16/10] overflow-hidden rounded-[8px] shadow-md shadow-black/10">
                <img src="{{ asset('assets/img/background 1.webp') }}" class="w-full h-full object-cover" alt="Hero 1">

                {{-- Gradient Overlay --}}
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-black/10"></div>

                {{-- Konten Teks --}}
                <div class="absolute inset-0 flex flex-col justify-end p-5 pb-6">
                    <h2 class="text-white font-extrabold text-[22px] leading-tight drop-shadow-md">
                        Selamat Datang<br>
                        Website Resmi Desa Bedi Kulon
                    </h2>
                    <p class="text-white/90 text-[12px] font-semibold mt-2 leading-relaxed drop-shadow-md">
                        Sumber informasi terbaru tentang pemerintahan di Desa Bedi Kulon
                    </p>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="snap-start shrink-0 w-[98%] relative aspect-[16/10] overflow-hidden rounded-[8px] shadow-md shadow-black/10">
                <img src="{{ asset('assets/img/background 2.webp') }}" class="w-full h-full object-cover" alt="Hero 2">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-black/10"></div>

                <div class="absolute inset-0 flex flex-col justify-end p-5 pb-6">
                    <h2 class="text-white font-extrabold text-[22px] leading-tight drop-shadow-md">
                        Jelajahi Desa<br>
                        Potensi & Wisata Lokal
                    </h2>
                    <p class="text-white/90 text-[12px] font-semibold mt-2 leading-relaxed drop-shadow-md">
                        Temukan keindahan alam dan kearifan lokal budaya Desa Bedi Kulon.
                    </p>
                </div>
            </div>

            {{-- Spacer Akhir: Pembatas transparan agar slide terakhir tidak mentok di kanan --}}
            <div class="shrink-0 w-2"></div>
        </div>

        {{-- Indikator Slide --}}


    </header>

    <section class="infografis-page">
        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Jelajahi desa) --}}
        {{-- ========================================== --}}
        <div class="hidden md:block ">

            <div class="explore-container">
                <div class="explore-content">
                    <h2 class="title-green" style="font-size: 50px">JELAJAHI DESA</h2>
                    <p>
                        Melalui website ini Anda dapat menjelajahi segala hal yang terkait
                        dengan desa. Aspek pemerintahan, penduduk, demografi, potensi desa,
                        dan juga berita tentang desa.
                    </p>
                </div>

                <div class="explore-grid">
                    <div class="explore-card" onclick="window.location='{{ route('frontend.profile') }}'">


                        <div class="icon-box-dashboard">
                            <img src="{{ asset('assets/img/profil.svg') }}" alt="Profil Desa" />
                        </div>
                        <h3>PROFIL DESA</h3>
                    </div>

                    <div class="explore-card" onclick="window.location='{{ route('frontend.infografis') }}'">

                        <div class="icon-box-dashboard">
                            <img src="{{ asset('assets/img/infografis.svg') }}" alt="Infografis" />
                        </div>
                        <h3>INFOGRAFIS</h3>
                    </div>

                    <div class="explore-card" onclick="window.location='{{ route('frontend.idm') }}'">
                        <div class="icon-box-dashboard">
                            <img src="{{ asset('assets/img/idm.svg') }}" alt="IDM" />
                        </div>
                        <h3>IDM</h3>
                    </div>

                    <div class="explore-card" onclick="window.location='{{ route('frontend.ppid') }}'">
                        <div class="icon-box-dashboard">
                            <img src="{{ asset('assets/img/ppid.svg') }}" alt="PPID" />
                        </div>
                        <h3>PPID</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="block md:hidden bg-white px-5 pt-8 pb-12 rounded-[2rem] -mt-6 relative z-10 shadow-[0_-10px_20px_rgba(0,0,0,0.02)]">

            {{-- Grid Container: 4 lajur (kolom) --}}
            <div class="grid grid-cols-4 gap-y-7 gap-x-2">

                <a href="#" class="flex flex-col items-center group">
                    <div class="w-[60px] h-[60px] bg-[#eefaf2] rounded-[1.2rem] flex items-center justify-center text-[#40b869] group-hover:bg-[#40b869] group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21h18"></path>
                            <path d="M5 21v-4"></path>
                            <path d="M19 21v-4"></path>
                            <path d="M9 21v-4"></path>
                            <path d="M15 21v-4"></path>
                            <path d="M3 17h18"></path>
                            <path d="M12 3l8 10H4z"></path>
                        </svg>
                    </div>
                    <span class="mt-2.5 text-[10px] font-bold text-gray-700 text-center leading-tight">Profil<br>Desa</span>
                </a>

                <a href="#" class="flex flex-col items-center group">
                    <div class="w-[60px] h-[60px] bg-[#eefaf2] rounded-[1.2rem] flex items-center justify-center text-[#40b869] group-hover:bg-[#40b869] group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3v18h18"></path>
                            <path d="M18 17V9"></path>
                            <path d="M13 17V5"></path>
                            <path d="M8 17v-3"></path>
                        </svg>
                    </div>
                    <span class="mt-2.5 text-[10px] font-bold text-gray-700 text-center leading-tight">Infografis</span>
                </a>

                <a href="#" class="flex flex-col items-center group">
                    <div class="w-[60px] h-[60px] bg-[#eefaf2] rounded-[1.2rem] flex items-center justify-center text-[#40b869] group-hover:bg-[#40b869] group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 10h4.764a2 2 0 0 1 1.789 2.894l-3.5 7A2 2 0 0 1 15.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 0 0-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2h2.5"></path>
                        </svg>
                    </div>
                    <span class="mt-2.5 text-[10px] font-bold text-gray-700 text-center leading-tight">IDM</span>
                </a>

                <a href="#" class="flex flex-col items-center group">
                    <div class="w-[60px] h-[60px] bg-[#eefaf2] rounded-[1.2rem] flex items-center justify-center text-[#40b869] group-hover:bg-[#40b869] group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <path d="M14 2v6h6"></path>
                            <path d="M16 13H8"></path>
                            <path d="M16 17H8"></path>
                            <path d="M10 9H8"></path>
                        </svg>
                    </div>
                    <span class="mt-2.5 text-[10px] font-bold text-gray-700 text-center leading-tight">PPID</span>
                </a>

                <a href="#" class="flex flex-col items-center group">
                    <div class="w-[60px] h-[60px] bg-[#eefaf2] rounded-[1.2rem] flex items-center justify-center text-[#40b869] group-hover:bg-[#40b869] group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 6.54l-3-3a1 1 0 0 0-1.4 0L4 6a2 2 0 0 0 0 2.83l9.17 9.17a2 2 0 0 0 2.83 0l2.45-2.6a1 1 0 0 0 0-1.4l-3-3M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                    </div>
                    <span class="mt-2.5 text-[10px] font-bold text-gray-700 text-center leading-tight">Berita</span>
                </a>

                <a href="#" class="flex flex-col items-center group">
                    <div class="w-[60px] h-[60px] bg-[#eefaf2] rounded-[1.2rem] flex items-center justify-center text-[#40b869] group-hover:bg-[#40b869] group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <path d="M3 6h18"></path>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                    </div>
                    <span class="mt-2.5 text-[10px] font-bold text-gray-700 text-center leading-tight">Belanja</span>
                </a>

                <a href="#" class="flex flex-col items-center group">
                    <div class="w-[60px] h-[60px] bg-[#eefaf2] rounded-[1.2rem] flex items-center justify-center text-[#40b869] group-hover:bg-[#40b869] group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <path d="M3.27 6.96L12 12.01l8.73-5.05"></path>
                            <path d="M12 22.08V12"></path>
                        </svg>
                    </div>
                    <span class="mt-2.5 text-[10px] font-bold text-gray-700 text-center leading-tight">Bansos</span>
                </a>

                <a href="#" class="flex flex-col items-center group">
                    <div class="w-[60px] h-[60px] bg-[#eefaf2] rounded-[1.2rem] flex items-center justify-center text-[#40b869] group-hover:bg-[#40b869] group-hover:text-white transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <path d="M21 15l-5-5L5 21"></path>
                        </svg>
                    </div>
                    <span class="mt-2.5 text-[10px] font-bold text-gray-700 text-center leading-tight">Galeri</span>
                </a>

            </div>
        </div>
        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Jelajahi desa) --}}
        {{-- ========================================== --}}
        <div class="hidden md:block welcome-section">
            <div class="welcome-container">
                <div class="welcome-image">
                    <div class="circle-bg">
                        <img src="assets/img/Logo Ponorogo.png" alt="Logo Kabupaten Ponorogo" />

                    </div>
                </div>

                <div class="welcome-text">
                    <h2 class="title-green">Sambutan Kepala Desa Bedi Kulon</h2>
                    <h3 class="name-head">LUKMANUL HADI</h3>

                    <p class="position-head">Kepala Desa Bedi Kulon</p>

                    <div class="scroll-box">
                        <p><strong>Assalamu Alaikum Warohmatullahi Wabarakatu.</strong></p>
                        <p>
                            Website ini hadir sebagai wujud transformasi desa Bedi Kulon menjadi
                            desa yang mampu memanfaatkan teknologi informasi dan komunikasi,
                            terintegrasi kedalam sistem online. Keterbukaan informasi publik,
                            pelayanan publik dan kegiatan perekonomian di desa, guna
                            mewujudkan desa Bedi Kulon sebagai desa wisata yang berkelanjutan,
                            adaptasi dan mitigasi terhadap perubahan iklim serta menjadi desa
                            yang mandiri.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}
        <div class="block md:hidden bg-[#f8f9fa] px-6 py-1 pb-20">

            <div class="max-w-md mx-auto flex flex-col items-center">

                {{-- 1. Bagian Logo / Gambar --}}
                <div class="mb-6 relative">
                    {{-- Lingkaran putih dengan shadow lembut di belakang logo --}}
                    <div class="w-60 h-60 bg-white rounded-full shadow-[0_8px_30px_rgb(0,0,0,0.08)] flex items-center justify-center p-4">
                        {{-- Pastikan path gambarnya benar menggunakan asset() Laravel --}}
                        <img src="{{ asset('assets/img/Logo Ponorogo.png') }}" alt="Logo Kabupaten Ponorogo" class="w-full h-full object-contain" />
                    </div>
                </div>

                {{-- 2. Bagian Teks Judul & Nama --}}
                <div class="text-center mb-6 w-full">
                    {{-- Warna hijau disesuaikan dengan contoh --}}
                    <h2 class="text-[#2ac0b4] font-bold text-[15px] mb-1">Sambutan Kepala Desa Bedi Kulon</h2>

                    {{-- Nama Kades: Diberi tracking-[0.3em] agar hurufnya berjarak (spasi lebar) --}}
                    <h3 class="text-gray-900 font-black text-2xl tracking-[0.3em] mb-1 uppercase">
                        LUKMANUL HADI
                    </h3>

                    <p class="text-gray-900 font-bold text-[13px]">Kepala Desa Bedi Kulon</p>
                </div>

                {{-- 3. Bagian Teks Sambutan (Scrollable) --}}
                {{-- max-h-[220px] membatasi tinggi kotak, overflow-y-auto memunculkan scroll --}}
                <div class="w-full text-left text-gray-800 text-[13px] leading-relaxed max-h-[220px] overflow-y-auto pr-4 scrollbar-custom">
                    <p class="font-bold mb-2">Assalamu Alaikum Warohmatullahi Wabarakatu.</p>
                    <p class="text-justify">
                        Website ini hadir sebagai wujud transformasi desa Bedi Kulon menjadi
                        desa yang mampu memanfaatkan teknologi informasi dan komunikasi,
                        terintegrasi kedalam sistem online. Keterbukaan informasi publik,
                        pelayanan publik dan kegiatan perekonomian di desa, guna
                        mewujudkan desa Bedi Kulon sebagai desa wisata yang berkelanjutan,
                        adaptasi dan mitigasi terhadap perubahan iklim serta menjadi desa
                        yang mandiri.
                    </p>
                </div>

            </div>
        </div>
        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}
        <div class="hidden md:block py-10">
            {{-- Container lebar maksimal agar membentang luas --}}
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Teks rata kiri secara tegas --}}
                <div class="mb-6 text-left">
                    <h2 class="text-4xl font-extrabold text-[#2ac0b4] uppercase mb-2">LOKASI DESA</h2>
                    <p class="text-gray-700 text-lg">
                        Temukan lokasi strategis dan batas wilayah Desa Bedi Kulon melalui peta berikut.
                    </p>
                </div>

                {{-- Container Peta --}}
                {{-- PERUBAHAN: Hilangkan border-radius dan box-shadow. Tambahkan border tipis. Perbesar tinggi (height) --}}
                <div class="relative w-full h-[550px] lg:h-[650px] border border-gray-300 z-10">
                    <div id="mapDesaDesktop" class="w-full h-full"></div>
                </div>

            </div>
        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}

        <div class="block md:hidden max-w-3xl mx-auto flex flex-col items-center">


            <h2 class="text-[#2ac0b4] font-black text-2xl uppercase mb-2 text-center tracking-wide">
                Lokasi Desa
            </h2>

            <p class="text-gray-800 text-[13px] font-medium text-center mb-6 leading-relaxed max-w-[90%]">
                Temukan lokasi strategis dan batas wilayah Desa Bedi Kulon melalui peta berikut.
            </p>

            <div class="w-full relative h-[400px] md:h-[500px] border-[6px] border-gray-200 rounded-lg overflow-hidden shadow-sm bg-gray-100 flex items-center justify-center">

                {{-- PERUBAHAN DI SINI: ID diganti jadi mapDesaMobile --}}
                <div id="mapDesaMobile" class="w-full h-full z-10"></div>

                <span class="absolute text-gray-400 text-sm font-medium z-0">Memuat Peta...</span>
            </div>

        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}

        <div class="hidden md:block py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Header SOTK (Rata Kiri, Warna Hijau Muda Sesuai Target) --}}
                <div class="mb-10 text-left">
                    <h2 class="text-4xl font-extrabold text-[#2ac0b4] uppercase mb-2 tracking-tight">SOTK</h2>

                    <p class="text-gray-800 text-lg font-medium">
                        Struktur Organisasi dan Tata Kerja Desa Bedi Kulon
                    </p>
                </div>

                {{-- Pengecekan Data: Jika data ada dan lebih dari 0 --}}
                @if(isset($perangkat_desa) && count($perangkat_desa) > 0)

                {{-- Grid 4 Kolom --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    @foreach($perangkat_desa as $staf)
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col h-full border border-gray-100 group">

                        {{-- Area Foto dengan Error Handling --}}
                        <div class="w-full aspect-[2/2] bg-gray-200 relative overflow-hidden">
                            @php
                            $fotoFallback = 'https://placehold.co/400x500?text=No+Photo';
                            $fotoUrl = !empty($staf->foto) ? asset('storage/' . $staf->foto) : $fotoFallback;
                            @endphp

                            <img src="{{ $fotoUrl }}" alt="{{ $staf->nama ?? 'Tanpa Nama' }}" class="absolute inset-0 w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ $fotoFallback }}'" />
                        </div>

                        {{-- Area Info --}}
                        <div class="bg-[#2ac0b4] py-5 px-4 flex flex-col items-center justify-center text-center flex-1">
                            <h3 class="font-extrabold text-white text-sm lg:text-base uppercase leading-tight mb-1 w-full drop-shadow-sm">
                                {{ $staf->nama ?? 'Nama Belum Diatur' }}
                            </h3>
                            <p class="text-white/95 font-medium text-xs lg:text-sm leading-tight capitalize w-full drop-shadow-sm">
                                {{ $staf->jabatan ?? 'Jabatan Belum Diatur' }}
                            </p>
                        </div>

                    </div>
                    @endforeach
                </div>

                @else

                {{-- Tampilan Placeholder (Empty State) Sesuai dengan Model Anda --}}
                <div class="flex flex-col items-center justify-center w-full h-[400px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    {{-- Ikon Grup/Users (Disesuaikan untuk SOTK) --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Perangkat Desa Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Data perangkat desa (SOTK) belum diinput. Silakan tambahkan data melalui panel admin untuk melihat struktur organisasi desa.
                    </p>
                </div>

                @endif

                {{-- Footer Link (Rata Kanan) --}}
                @if(Route::has('frontend.pemerintahan'))
                <div class="mt-10 flex justify-end">
                    <a href="{{ route('frontend.pemerintahan') }}" class="font-extrabold text-gray-800 hover:text-[#2ac0b4] transition flex items-center gap-2 text-sm uppercase tracking-wide">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 5H7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2V7a2 2 0 0 0 -2 -2h-2"></path>
                            <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                            <path d="M9 14h6"></path>
                            <path d="M9 17h6"></path>
                            <path d="M12 11v-4"></path>
                        </svg>
                        LIHAT STRUKTUR LEBIH LENGKAP
                    </a>
                </div>
                @endif

            </div>
        </div>



        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}


        <div class="block md:hidden max-w-md mx-auto mt-10">

            {{-- Judul & Subjudul --}}
            <h2 class="text-[#2ac0b4] font-black text-2xl uppercase mb-1 text-center tracking-wide">
                SOTK
            </h2>
            <p class="text-gray-800 text-[13px] font-medium text-center mb-6 px-4">
                Struktur Organisasi dan Tata Kerja Desa Bedi Kulon
            </p>

            {{-- Pengecekan Data Utama --}}
            @if(isset($perangkat_desa) && count($perangkat_desa) > 0)

            {{-- Navigasi Anak Panah (Hanya tampil jika ada data) --}}
            <div class="flex justify-between items-center mb-4 px-4">
                <button id="btnPrevSotk" aria-label="Geser ke kiri" class="text-black hover:text-[#2ac0b4] transition-colors p-2 active:scale-95 bg-gray-50 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                </button>
                <button id="btnNextSotk" aria-label="Geser ke kanan" class="text-black hover:text-[#2ac0b4] transition-colors p-2 active:scale-95 bg-gray-50 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </div>

            {{-- Container Slider Card --}}
            <div id="sliderSotk" class="flex overflow-x-auto snap-x snap-mandatory gap-4 px-4 pb-6 scrollbar-hide scroll-smooth">

                @foreach($perangkat_desa as $staf)
                {{-- Card Individual --}}
                <div class="snap-start shrink-0 w-[160px] bg-white rounded-xl overflow-hidden shadow-[0_4px_15px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col">

                    {{-- Foto Staf (Error Handling Backend & Frontend) --}}
                    <div class="h-[190px] w-full bg-gray-200 relative">
                        @php
                        $fotoFallback = 'https://placehold.co/400x500?text=No+Photo';
                        $fotoUrl = !empty($staf->foto) ? asset('storage/' . $staf->foto) : $fotoFallback;
                        @endphp

                        <img src="{{ $fotoUrl }}" alt="{{ $staf->nama ?? 'Tanpa Nama' }}" class="w-full h-full object-cover object-top" onerror="this.src='{{ $fotoFallback }}'" />
                    </div>

                    {{-- Info Kotak Hijau di Bawah (Null Coalescing) --}}
                    <div class="bg-[#2ac0b4] p-3 flex-1 flex flex-col justify-center items-center text-center">
                        <h3 class="text-white font-black text-[12px] leading-tight mb-1 w-full truncate">
                            {{ strtoupper($staf->nama ?? 'NAMA BELUM DIATUR') }}
                        </h3>
                        <p class="text-white/90 text-[10px] font-semibold leading-snug w-full line-clamp-2">
                            {{ $staf->jabatan ?? 'Jabatan Belum Diatur' }}
                        </p>
                    </div>
                </div>
                @endforeach

                {{-- Spacer Akhir agar card terakhir tidak mentok di pinggir layar HP --}}
                <div class="shrink-0 w-2"></div>
            </div>

            @else
            {{-- Tampilan Placeholder (Empty State) Mobile Sesuai Standar Desktop --}}
            <div class="px-4 mb-8">
                <div class="flex flex-col items-center justify-center w-full py-10 px-4 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold text-center leading-tight">Data Belum Tersedia</p>
                    <p class="text-gray-400 text-xs mt-2 text-center">
                        Data SOTK belum diinputkan ke dalam sistem.
                    </p>
                </div>
            </div>
            @endif

            {{-- Tombol Lihat Semua (Dengan pengecekan route) --}}
            @if(Route::has('frontend.pemerintahan'))
            <div class="mt-2 px-4">
                <a href="{{ route('frontend.pemerintahan') }}" class="block w-full border-2 border-[#2ac0b4] text-[#2ac0b4] hover:bg-[#2ac0b4] hover:text-white font-bold text-[14px] text-center py-3 rounded-xl transition-all">
                    Lihat Struktur Lengkap
                </a>
            </div>
            @endif

        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}

        <div class="hidden md:block py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Header --}}
                <div class="mb-8 text-left">
                    <h2 class="text-4xl font-extrabold text-[#2ac0b4] mb-2">Administrasi Penduduk</h2>
                    <p class="text-gray-800 text-lg font-medium leading-relaxed max-w-5xl">
                        Sistem digital yang berfungsi mempermudah pengelolaan data dan informasi terkait dengan kependudukan dan pendayagunaannya untuk pelayanan publik yang efektif dan efisien
                    </p>
                </div>

                {{-- Grid --}}
                <div class="grid grid-cols-2 gap-x-6 gap-y-4">

                    {{-- 1. Penduduk --}}
                    <div class="flex h-[80px] rounded-md overflow-hidden shadow-sm border border-gray-100">
                        {{-- PERUBAHAN: Background diubah jadi gradient (bg-gradient-to-r) --}}
                        <div class="w-5/12 bg-gradient-to-r from-[#2ac0b4] to-[#94dfd9] flex items-center justify-center">
                            {{-- PERUBAHAN: Font dibuat font-black dengan sedikit drop shadow agar menyala --}}
                            <span class="text-white font-black text-[40px] drop-shadow-sm tracking-tight leading-none">{{ number_format($total_penduduk, 0, ',', '.') }}</span>
                        </div>
                        <div class="w-7/12 bg-[#f8f9fa] flex items-center justify-center">
                            <span class="text-gray-700 font-extrabold text-lg lg:text-xl">Penduduk</span>
                        </div>
                    </div>

                    {{-- 2. Laki-Laki --}}
                    <div class="flex h-[80px] rounded-md overflow-hidden shadow-sm border border-gray-100">
                        <div class="w-5/12 bg-gradient-to-r from-[#2ac0b4] to-[#94dfd9] flex items-center justify-center">
                            <span class="text-white font-black text-[40px] drop-shadow-sm tracking-tight leading-none">{{ number_format($total_laki, 0, ',', '.') }}</span>
                        </div>
                        <div class="w-7/12 bg-[#f8f9fa] flex items-center justify-center">
                            <span class="text-gray-700 font-extrabold text-lg lg:text-xl">Laki-Laki</span>
                        </div>
                    </div>

                    {{-- 3. Kepala Keluarga --}}
                    <div class="flex h-[80px] rounded-md overflow-hidden shadow-sm border border-gray-100">
                        <div class="w-5/12 bg-gradient-to-r from-[#2ac0b4] to-[#94dfd9] flex items-center justify-center">
                            <span class="text-white font-black text-[40px] drop-shadow-sm tracking-tight leading-none">{{ number_format($total_kk, 0, ',', '.') }}</span>
                        </div>
                        <div class="w-7/12 bg-[#f8f9fa] flex items-center justify-center">
                            <span class="text-gray-700 font-extrabold text-lg lg:text-xl">Kepala Keluarga</span>
                        </div>
                    </div>

                    {{-- 4. Perempuan --}}
                    <div class="flex h-[80px] rounded-md overflow-hidden shadow-sm border border-gray-100">
                        <div class="w-5/12 bg-gradient-to-r from-[#2ac0b4] to-[#94dfd9] flex items-center justify-center">
                            <span class="text-white font-black text-[40px] drop-shadow-sm tracking-tight leading-none">{{ number_format($total_perempuan, 0, ',', '.') }}</span>
                        </div>
                        <div class="w-7/12 bg-[#f8f9fa] flex items-center justify-center">
                            <span class="text-gray-700 font-extrabold text-lg lg:text-xl">Perempuan</span>
                        </div>
                    </div>

                    {{-- 5. Penduduk Sementara --}}
                    <div class="flex h-[80px] rounded-md overflow-hidden shadow-sm border border-gray-100">
                        <div class="w-5/12 bg-gradient-to-r from-[#2ac0b4] to-[#94dfd9] flex items-center justify-center">
                            <span class="text-white font-black text-[40px] drop-shadow-sm tracking-tight leading-none">{{ number_format($total_sementara, 0, ',', '.') }}</span>
                        </div>
                        <div class="w-7/12 bg-[#f8f9fa] flex items-center justify-center">
                            <span class="text-gray-700 font-extrabold text-lg lg:text-xl">Penduduk Sementara</span>
                        </div>
                    </div>

                    {{-- 6. Mutasi Penduduk --}}
                    <div class="flex h-[80px] rounded-md overflow-hidden shadow-sm border border-gray-100">
                        <div class="w-5/12 bg-gradient-to-r from-[#2ac0b4] to-[#94dfd9] flex items-center justify-center">
                            <span class="text-white font-black text-[40px] drop-shadow-sm tracking-tight leading-none">{{ number_format($total_mutasi, 0, ',', '.') }}</span>
                        </div>
                        <div class="w-7/12 bg-[#f8f9fa] flex items-center justify-center">
                            <span class="text-gray-700 font-extrabold text-lg lg:text-xl">Mutasi Penduduk</span>
                        </div>
                    </div>

                </div>

                {{-- Footer --}}
                <div class="text-center mt-6 text-sm text-gray-400 font-medium">
                    *Data diperbarui per tanggal {{ date('d M Y') }}
                </div>

            </div>
        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}


        <div class="block md:hidden max-w-md mx-auto mt-10">

            {{-- Judul & Subjudul --}}
            <h2 class="text-[#2ac0b4] font-black text-2xl mb-1 text-center tracking-wide">
                Administrasi Penduduk
            </h2>
            <p class="text-gray-800 text-[13px] font-medium text-center mb-10 leading-relaxed px-2">
                Efisiensi pengelolaan data dan informasi kependudukan yang lebih efektif.
            </p>

            {{-- Grid Container: 3 Kolom --}}
            <div class="grid grid-cols-3 gap-y-8 gap-x-2">

                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 mb-3 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-full h-full">
                            <path fill="#40b869" opacity="0.2" d="M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm-6 10a6 6 0 1 1 12 0H6z" />
                            <path fill="#40b869" d="M16 21v-2a4 4 0 0 0-4-4H4a4 4 0 0 0-4 4v2h16zm-6-9a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                            <path fill="#f59e0b" d="M24 21v-2a4 4 0 0 0-3-3.87A5.97 5.97 0 0 1 16 21h8zm-4.5-9a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                        </svg>
                    </div>
                    <h3 class="text-gray-900 font-black text-xl leading-none">{{ number_format($total_penduduk, 0, ',', '.') }}</h3>
                    <p class="text-gray-800 text-[11px] font-medium mt-1">Penduduk</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 mb-3 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-full h-full">
                            <circle cx="12" cy="8" r="5" fill="#3b82f6" opacity="0.2" />
                            <path fill="#3b82f6" d="M12 14c-4.42 0-8 3.58-8 8h16c0-4.42-3.58-8-8-8z" />
                            <circle cx="12" cy="8" r="5" fill="#1d4ed8" />
                        </svg>
                    </div>
                    <h3 class="text-gray-900 font-black text-xl leading-none">{{ number_format($total_laki, 0, ',', '.') }}</h3>
                    <p class="text-gray-800 text-[11px] font-medium mt-1">Laki-Laki</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 mb-3 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-full h-full">
                            <path fill="#f97316" opacity="0.2" d="M15 13a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm-5 8h10a5 5 0 0 0-10 0z" />
                            <path fill="#f97316" d="M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm-6 9a5 5 0 0 1 10 0H3z" />
                            <circle cx="12" cy="16" r="3" fill="#ea580c" />
                            <path fill="#ea580c" d="M15 21v-1a3 3 0 0 0-6 0v1h6z" />
                        </svg>
                    </div>
                    <h3 class="text-gray-900 font-black text-xl leading-none">{{ number_format($total_kk, 0, ',', '.') }}</h3>
                    <p class="text-gray-800 text-[11px] font-medium mt-1 leading-tight">Kepala<br>Keluarga</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 mb-3 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-full h-full">
                            <path fill="#ec4899" opacity="0.2" d="M12 13a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm-8 8c0-4.42 3.58-8 8-8s8 3.58 8 8H4z" />
                            <circle cx="12" cy="8" r="5" fill="#be185d" />
                            <path fill="#be185d" d="M12 14c-4.42 0-8 3.58-8 8h16c0-4.42-3.58-8-8-8z" />
                            <path fill="#fbcfe8" d="M12 14l-3 8h6l-3-8z" />
                        </svg>
                    </div>
                    <h3 class="text-gray-900 font-black text-xl leading-none">{{ number_format($total_perempuan, 0, ',', '.') }}</h3>
                    <p class="text-gray-800 text-[11px] font-medium mt-1">Perempuan</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 mb-3 flex items-center justify-center relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-full h-full">
                            <path fill="#8b5cf6" opacity="0.2" d="M3 10l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V10z" />
                            <path fill="#8b5cf6" d="M12 3L2 11h3v10h14V11h3L12 3zm0 2.5l6 4.5v9H6v-9l6-4.5z" />
                            <circle cx="12" cy="14" r="4" fill="#f59e0b" />
                            <path fill="#fff" d="M12 11.5v3l2 1.5-1 1.5-2.5-2v-4h1.5z" />
                        </svg>
                    </div>
                    <h3 class="text-gray-900 font-black text-xl leading-none">{{ number_format($total_sementara, 0, ',', '.') }}</h3>
                    <p class="text-gray-800 text-[11px] font-medium mt-1 leading-tight">Penduduk<br>Sementara</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 mb-3 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-full h-full">
                            <path fill="#14b8a6" opacity="0.2" d="M10 9a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm-6 9a6 6 0 1 1 12 0H4z" />
                            <path fill="#14b8a6" d="M10 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm-6 9c0-3.31 2.69-6 6-6s6 2.69 6 6H4z" />
                            <path fill="#f43f5e" d="M16 11l4 4-4 4v-2h-4v-4h4v-2zm-2 2v4h4l4-4-4-4v2h-4z" />
                        </svg>
                    </div>
                    <h3 class="text-gray-900 font-black text-xl leading-none">{{ number_format($total_mutasi, 0, ',', '.') }}</h3>
                    <p class="text-gray-800 text-[11px] font-medium mt-1 leading-tight">Mutasi<br>Penduduk</p>
                </div>

            </div>

            {{-- Catatan Footer --}}
            <div class="text-center mt-10 text-[10px] text-gray-400 font-medium">
                *Data diperbarui per tanggal {{ date('d M Y') }}
            </div>

        </div>
        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}

        <div class="hidden md:block py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Flex Container: Kiri (Gambar) & Kanan (Konten) --}}
                <div class="flex items-center gap-12 lg:gap-20">

                    {{-- Kolom Kiri: Ilustrasi --}}
                    <div class="w-1/2 flex justify-center">
                        <img src="{{ asset('assets/img/asset-dashboard-apbd.png') }}" alt="Ilustrasi APB Desa" class="w-full max-w-lg h-auto object-contain drop-shadow-sm" onerror="this.src='https://placehold.co/600x400?text=Grafik+APBD'">
                    </div>

                    {{-- Kolom Kanan: Konten & Angka --}}
                    <div class="w-1/2 flex flex-col">

                        {{-- Judul & Deskripsi --}}
                        <div class="mb-8">
                            {{-- PERUBAHAN: Warna judul disamakan dengan hijau muda segar --}}
                            <h2 class="text-4xl lg:text-[42px] font-extrabold text-[#2ac0b4] uppercase mb-4 tracking-tight">APB DESA {{ $tahun_ini }}</h2>
                            <p class="text-gray-800 text-lg font-medium leading-relaxed">
                                Akses cepat dan transparan terhadap APB Desa serta proyek pembangunan tahun anggaran {{ $tahun_ini }}.
                            </p>
                        </div>

                        {{-- Kartu Pendapatan Desa --}}
                        {{-- PERUBAHAN: border tipis, bayangan sangat halus, padding lega --}}
                        <div class="bg-white rounded-xl shadow-[0_2px_15px_rgba(0,0,0,0.03)] border border-gray-100 p-6 mb-5">
                            <span class="block text-sm font-extrabold text-gray-500 mb-3">Pendapatan Desa</span>
                            {{-- PERUBAHAN: Warna netral abu-abu, ukuran raksasa, rata tengah --}}
                            <div class="text-4xl lg:text-[40px] font-black text-gray-500 tracking-tight text-center w-full">
                                Rp{{ number_format($apbd_pendapatan, 2, ',', '.') }}
                            </div>
                        </div>

                        {{-- Kartu Belanja Desa --}}
                        <div class="bg-white rounded-xl shadow-[0_2px_15px_rgba(0,0,0,0.03)] border border-gray-100 p-6 mb-6">
                            <span class="block text-sm font-extrabold text-gray-500 mb-3">Belanja Desa</span>
                            {{-- PERUBAHAN: Warna disamakan (bukan merah lagi) agar terlihat formal --}}
                            <div class="text-4xl lg:text-[40px] font-black text-gray-500 tracking-tight text-center w-full">
                                Rp{{ number_format($apbd_belanja, 2, ',', '.') }}
                            </div>
                        </div>

                        {{-- Footer Link --}}
                        <div class="flex justify-end">
                            <a href="{{ route('frontend.apbdes') }}" class="font-extrabold text-gray-800 hover:text-[#2ac0b4] transition flex items-center gap-2 text-sm uppercase tracking-wide">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                LIHAT DATA LEBIH LENGKAP
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}


        <div class="block md:hidden max-w-4xl mx-auto flex flex-col md:flex-row items-center gap-8 mt-10">
            {{-- Kolom Gambar (Sembunyi di HP, Muncul di Desktop) --}}
            <div class="hidden md:block w-full md:w-1/2">
                <img src="{{ asset('assets/img/asset-dashboard-apbd.png') }}" alt="Ilustrasi APB Desa" class="w-full h-auto rounded-2xl shadow-lg object-cover" onerror="this.src='https://placehold.co/600x400?text=Grafik+APBD'">
            </div>

            {{-- Kolom Konten & Data --}}
            <div class="w-full md:w-1/2 flex flex-col items-center">

                {{-- Judul & Subjudul --}}
                <h2 class="text-[#2ac0b4] font-black text-2xl uppercase mb-1 text-center tracking-wide">
                    APB DESA {{ $tahun_ini ?? date('Y') }}
                </h2>
                <p class="text-gray-800 text-[13px] font-medium text-center mb-6 leading-snug px-2">
                    Akses cepat dan transparan terhadap APB Desa serta proyek pembangunan
                </p>

                {{-- Kartu Data APBD (Gaya seperti image_aa769d.png) --}}
                <div class="w-full max-w-md bg-[#f4faf6] rounded-[1.2rem] p-5 border border-[#e6f5eb] shadow-sm mb-5">

                    {{-- Baris 1: Pendapatan & Belanja --}}
                    <div class="flex justify-between items-center mb-5">
                        {{-- Pendapatan (Kiri) --}}
                        <div class="text-center w-1/2 pr-2">
                            <div class="text-gray-500 text-[12px] font-semibold flex items-center justify-center gap-1 mb-1">
                                <svg class="w-3.5 h-3.5 text-[#28a745]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                Pendapatan
                            </div>
                            <div class="text-[#28a745] font-black text-[14px] tracking-tight">
                                Rp{{ number_format($apbd_pendapatan ?? 0, 2, ',', '.') }}
                            </div>
                        </div>
                        {{-- Belanja (Kanan) --}}
                        <div class="text-center w-1/2 pl-2">
                            <div class="text-gray-500 text-[12px] font-semibold flex items-center justify-center gap-1 mb-1">
                                <svg class="w-3.5 h-3.5 text-[#dc3545]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                                Belanja
                            </div>
                            <div class="text-[#dc3545] font-black text-[14px] tracking-tight">
                                Rp{{ number_format($apbd_belanja ?? 0, 2, ',', '.') }}
                            </div>
                        </div>
                    </div>

                    {{-- Judul Tengah: Pembiayaan --}}
                    <div class="text-center mb-4">
                        <span class="text-[#86d875] font-black text-[14px]">Pembiayaan</span>
                    </div>

                    {{-- Baris 2: Penerimaan & Pengeluaran --}}
                    <div class="flex justify-between items-center mb-5">
                        {{-- Penerimaan (Kiri) --}}
                        <div class="text-center w-1/2 pr-2">
                            <div class="text-gray-500 text-[12px] font-semibold flex items-center justify-center gap-1 mb-1">
                                <svg class="w-3.5 h-3.5 text-[#28a745]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                Penerimaan
                            </div>
                            <div class="text-[#28a745] font-black text-[14px] tracking-tight">
                                Rp{{ number_format($apbd_penerimaan ?? 0, 2, ',', '.') }}
                            </div>
                        </div>
                        {{-- Pengeluaran (Kanan) --}}
                        <div class="text-center w-1/2 pl-2">
                            <div class="text-gray-500 text-[12px] font-semibold flex items-center justify-center gap-1 mb-1">
                                <svg class="w-3.5 h-3.5 text-[#dc3545]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                                Pengeluaran
                            </div>
                            <div class="text-[#dc3545] font-black text-[14px] tracking-tight">
                                Rp{{ number_format($apbd_pengeluaran ?? 0, 2, ',', '.') }}
                            </div>
                        </div>
                    </div>

                    {{-- Baris 3: Surplus / Defisit --}}
                    <div class="text-center pt-3 border-t border-gray-200/70">
                        <span class="text-gray-600 font-medium text-[12px]">Surplus/Defisit</span>
                        <span class="text-gray-800 font-black text-[13px] ml-1">
                            Rp{{ number_format($apbd_surplus ?? 0, 2, ',', '.') }}
                        </span>
                    </div>

                </div>

                {{-- Tombol Lihat Detail --}}
                <div class="w-full max-w-md px-1">
                    <a href="{{ route('frontend.apbdes') }}" class="block w-full border-2 border-[#2ac0b4] text-[#2ac0b4] hover:bg-[#2ac0b4] hover:text-white font-bold text-[14px] text-center py-3 rounded-xl transition-all active:scale-95">
                        Lihat Detail
                    </a>
                </div>

            </div>
        </div>
        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}

        <div class="hidden md:block py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Header (Rata Kiri) --}}
                <div class="mb-10 text-left">
                    <h2 class="text-4xl font-extrabold text-[#2ac0b4] mb-3">Berita Desa</h2>
                    <p class="text-gray-800 text-lg font-medium leading-relaxed max-w-5xl">
                        Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Bedi Kulon
                    </p>
                </div>

                {{-- ERROR HANDLING 1: Memastikan variabel ada dan merupakan instance/collection yang valid --}}
                @if(isset($berita_terbaru) && count($berita_terbaru) > 0)

                {{-- Grid 3 Kolom Sesuai Target --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    {{-- ERROR HANDLING 2: Gunakan foreach biasa karena pengecekan kosong sudah dilakukan di blok @if --}}
                    @foreach($berita_terbaru->take(6) as $berita)
                    <div class="bg-white rounded-2xl shadow-[0_2px_15px_rgba(0,0,0,0.04)] border border-gray-100 overflow-hidden flex flex-col h-full relative group hover:shadow-lg transition-all duration-300">

                        {{-- Gambar Berita --}}
                        <div class="w-full h-56 overflow-hidden bg-gray-200">
                            {{-- ERROR HANDLING 3: Backend fallback untuk gambar --}}
                            @php
                            $gambarFallback = 'https://placehold.co/600x400?text=Berita';
                            $gambarUrl = !empty($berita->gambar) ? asset('storage/' . $berita->gambar) : $gambarFallback;
                            @endphp
                            <img src="{{ $gambarUrl }}" alt="{{ $berita->judul ?? 'Berita Desa' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ $gambarFallback }}'" />
                        </div>

                        {{-- Konten Berita --}}
                        <div class="p-6 flex flex-col flex-1 pb-20">

                            {{-- Judul Kapital --}}
                            <h3 class="font-extrabold text-gray-800 text-lg mb-3 leading-snug uppercase group-hover:text-[#2ac0b4] transition-colors line-clamp-2">
                                {{-- ERROR HANDLING 4: Cek route detail berita --}}
                                <a href="{{ Route::has('frontend.berita.detail') ? route('frontend.berita.detail', $berita->id) : '#' }}">
                                    {{ $berita->judul ?? 'Tanpa Judul' }}
                                </a>
                            </h3>

                            {{-- Kutipan Isi --}}
                            <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3 flex-1">
                                {{-- ERROR HANDLING 5: Berikan string kosong ('') jika isi null agar strip_tags tidak error di PHP 8+ --}}
                                {{ Str::limit(strip_tags($berita->isi ?? ''), 120) }}
                            </p>

                            {{-- Info Penulis & Views --}}
                            <div class="flex flex-col gap-1.5 text-xs text-gray-500 font-medium">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    {{ $berita->penulis ?? 'Administrator' }}
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    Dilihat {{ $berita->views ?? 0 }} kali
                                </div>
                            </div>
                        </div>

                        {{-- Kotak Tanggal di Pojok Kanan Bawah --}}
                        <div class="absolute bottom-0 right-0 bg-gradient-to-r from-[#2ac0b4] to-[#94dfd9] text-white px-5 py-3 text-center rounded-tl-xl">
                            {{-- ERROR HANDLING 6: Pastikan created_at tidak null (nullsafe operator ?->) --}}
                            <div class="font-extrabold text-base leading-none mb-1">{{ $berita->created_at ? $berita->created_at->format('d M') : '-' }}</div>
                            <div class="font-bold text-sm leading-none opacity-90">{{ $berita->created_at ? $berita->created_at->format('Y') : '' }}</div>
                        </div>

                    </div>
                    @endforeach

                </div>

                @else
                {{-- Tampilan Placeholder (Empty State) Disamakan dengan gaya sebelumnya --}}
                <div class="flex flex-col items-center justify-center w-full h-[400px] bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200">
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Belum Ada Berita Terbaru</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Saat ini belum ada publikasi berita atau artikel desa. Silakan kembali lagi nanti untuk mendapatkan informasi terbaru.
                    </p>
                </div>
                @endif

                {{-- Footer Link (Rata Kanan) --}}
                @if(Route::has('frontend.berita'))
                <div class="mt-8 flex justify-end">
                    <a href="{{ route('frontend.berita') }}" class="font-extrabold text-gray-800 hover:text-[#2ac0b4] transition flex items-center gap-2 text-sm uppercase tracking-wide">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        LIHAT BERITA LEBIH BANYAK
                    </a>
                </div>
                @endif

            </div>
        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}
        <div class="block md:hidden max-w-md mx-auto mt-10">

            {{-- Judul & Subjudul --}}
            <h2 class="text-[#2ac0b4] font-black text-2xl mb-2 text-center tracking-wide">
                Berita Desa
            </h2>
            <p class="text-gray-800 text-[13px] font-medium text-center mb-6 leading-relaxed px-4">
                Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Bedi Kulon
            </p>

            {{-- Pengecekan Ketersediaan Data Berita --}}
            @if(isset($berita_terbaru) && count($berita_terbaru) > 0)

            {{-- Navigasi Anak Panah --}}
            <div class="flex justify-between items-center mb-4 px-4">
                <button id="btnPrevBerita" aria-label="Berita sebelumnya" class="text-black hover:text-[#2ac0b4] transition-colors p-2 active:scale-95 bg-gray-50 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                </button>
                <button id="btnNextBerita" aria-label="Berita selanjutnya" class="text-black hover:text-[#2ac0b4] transition-colors p-2 active:scale-95 bg-gray-50 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </div>

            {{-- Container Slider Berita --}}
            <div id="sliderBerita" class="flex overflow-x-auto snap-x snap-mandatory gap-4 px-4 pb-6 scrollbar-hide scroll-smooth">

                @foreach($berita_terbaru as $berita)
                {{-- Card Individual: Lebar 85% --}}
                <a href="{{ Route::has('frontend.berita.detail') ? route('frontend.berita.detail', $berita->id) : '#' }}" class="snap-start shrink-0 w-[85%] bg-white rounded-2xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col group transition-transform active:scale-95">

                    {{-- Foto Berita --}}
                    <div class="h-[180px] w-full bg-gray-200 relative overflow-hidden">
                        @php
                        $gambarFallback = 'https://placehold.co/600x400?text=Berita+Desa';
                        $gambarUrl = !empty($berita->gambar) ? asset('storage/' . $berita->gambar) : $gambarFallback;
                        @endphp
                        <img src="{{ $gambarUrl }}" alt="{{ $berita->judul ?? 'Gambar Berita' }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 group-active:scale-110" onerror="this.src='{{ $gambarFallback }}'" />
                    </div>

                    {{-- Konten Berita --}}
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        {{-- Judul: Dibatasi 3 baris (line-clamp-3) --}}
                        <h3 class="text-gray-900 font-black text-[14px] leading-snug mb-4 uppercase line-clamp-3 group-hover:text-[#2ac0b4] group-active:text-[#2ac0b4] transition-colors">
                            {{ $berita->judul ?? 'Judul Berita Tidak Tersedia' }}
                        </h3>

                        {{-- Meta Info (Tanggal & Tayangan) --}}
                        <div class="flex flex-col gap-2 text-gray-400 text-[11px] font-medium">
                            {{-- Ikon Waktu --}}
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span>{{ $berita->created_at ? $berita->created_at->translatedFormat('d F Y') : '-' }}</span>
                            </div>

                            {{-- Ikon Mata (Views) --}}
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <span>Dilihat {{ $berita->views ?? 0 }} kali</span>

                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

                {{-- Spacer Akhir --}}
                <div class="shrink-0 w-2"></div>
            </div>

            @else
            {{-- Tampilan Placeholder (Empty State) Mobile --}}
            <div class="px-4 mb-8">
                <div class="flex flex-col items-center justify-center w-full py-10 px-4 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold text-center leading-tight">Belum Ada Berita</p>
                    <p class="text-gray-400 text-xs mt-2 text-center">
                        Saat ini belum ada publikasi berita terbaru.
                    </p>
                </div>
            </div>
            @endif

            {{-- Tombol Lihat Semua --}}
            @if(Route::has('frontend.berita'))
            <div class="mt-2 px-4">
                <a href="{{ route('frontend.berita') }}" class="block w-full border-2 border-[#2ac0b4] text-[#2ac0b4] hover:bg-[#2ac0b4] hover:text-white font-bold text-[14px] text-center py-3 rounded-xl transition-all active:scale-95">
                    Lihat Semua Berita
                </a>
            </div>
            @endif

        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}

        <div class="hidden md:block py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- BAGIAN ATAS: Header (Kiri) & Tombol (Kanan) --}}
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6">

                    {{-- Kiri: Judul dan Deskripsi --}}
                    <div class="md:w-2/3">
                        <h2 class="text-4xl font-extrabold text-[#2ac0b4] uppercase mb-4 tracking-tight">POTENSI DESA</h2>
                        <p class="text-gray-800 text-lg font-medium leading-relaxed max-w-2xl">
                            Informasi tentang potensi dan kemajuan desa di berbagai bidang seperti ekonomi, pariwisata, pertanian, industri kreatif, dan kelestarian lingkungan.
                        </p>
                    </div>

                    {{-- Kanan: Tombol Lihat Semua (Dengan pengecekan Route) --}}
                    @if(Route::has('frontend.potensi'))
                    <div class="md:w-1/3 flex md:justify-end">
                        <a href="{{ route('frontend.potensi') }}" class="font-extrabold text-gray-800 hover:text-[#2ac0b4] transition flex items-center gap-2.5 text-sm uppercase tracking-wider">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            LIHAT POTENSI LEBIH BANYAK
                        </a>
                    </div>
                    @endif
                </div>

                {{-- Pengecekan Ketersediaan Data Potensi --}}
                @if(isset($potensis) && count($potensis) > 0)

                {{-- BAGIAN BAWAH: Grid Lingkaran Potensi (3 Kolom) --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">

                    @foreach($potensis as $item)
                    <div class="flex flex-col items-center justify-start text-center group">
                        {{-- Pengecekan Route Detail --}}
                        <a href="{{ Route::has('frontend.potensi.detail') ? route('frontend.potensi.detail', $item->id) : '#' }}" class="flex flex-col items-center gap-6 transition duration-300 group-hover:scale-[1.03] w-full">

                            {{-- Lingkaran Raksasa --}}
                            <div class="relative w-[240px] h-[240px] sm:w-[280px] sm:h-[280px] rounded-full overflow-hidden shadow-[0_4px_15px_rgba(0,0,0,0.1)] mx-auto border-4 border-white bg-gray-200">

                                {{-- Gambar Potensi dengan Handling Backend & Frontend --}}
                                @php
                                $gambarFallback = 'https://placehold.co/300x300?text=Potensi+Desa';
                                $gambarUrl = !empty($item->gambar) ? asset('storage/' . $item->gambar) : $gambarFallback;
                                @endphp

                                <img src="{{ $gambarUrl }}" alt="{{ $item->judul ?? 'Potensi Desa' }}" class="w-full h-full object-cover" onerror="this.src='{{ $gambarFallback }}'">

                                {{-- Overlay gelap tipis saat hover --}}
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
                            </div>

                            {{-- Info Teks --}}
                            <div class="flex flex-col items-center">
                                {{-- Judul Potensi dengan Null Coalescing --}}
                                <h3 class="font-extrabold text-gray-800 text-lg uppercase tracking-wider leading-snug group-hover:text-[#2ac0b4] transition-colors line-clamp-2">
                                    {{ $item->judul ?? 'Nama Potensi Belum Diatur' }}
                                </h3>

                                {{-- Lokasi: Tampilkan hanya jika data tidak kosong atau null --}}
                                @if(!empty($item->lokasi))
                                <div class="flex items-center gap-1.5 text-emerald-500 text-sm font-medium mt-2">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span>{{ $item->lokasi }}</span>
                                </div>
                                @endif
                            </div>

                        </a>
                    </div>
                    @endforeach

                </div>

                @else
                {{-- Tampilan Kosong (Empty State) Sesuai Standar Sebelumnya --}}
                <div class="flex flex-col items-center justify-center w-full py-16 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200">
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m22 4v-4m-3-6l-4-4-4 4-4-4-4 4-4-4m22 14H1"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21v-8"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Potensi Desa Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Saat ini belum ada data potensi atau komoditas unggulan desa yang diinputkan ke dalam sistem.
                    </p>
                </div>
                @endif

            </div>
        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}

        <div class="block md:hidden max-w-md mx-auto mt-10">

            {{-- Judul & Subjudul --}}
            <h2 class="text-[#2ac0b4] font-black text-2xl uppercase mb-2 text-center tracking-wide">
                Potensi Desa
            </h2>
            <p class="text-gray-800 text-[13px] font-medium text-center mb-6 leading-relaxed px-4">
                Potensi dan kemajuan desa di berbagai bidang (ekonomi, pariwisata, dan lain-lain)
            </p>

            {{-- Pengecekan Ketersediaan Data --}}
            @if(isset($potensis) && count($potensis) > 0)

            {{-- Navigasi Anak Panah --}}
            <div class="flex justify-between items-center mb-4 px-4">
                <button id="btnPrevPotensi" aria-label="Geser ke kiri" class="text-black hover:text-[#2ac0b4] transition-colors p-2 active:scale-95 bg-gray-50 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                </button>
                <button id="btnNextPotensi" aria-label="Geser ke kanan" class="text-black hover:text-[#2ac0b4] transition-colors p-2 active:scale-95 bg-gray-50 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </div>

            {{-- Container Slider Potensi --}}
            <div id="sliderPotensi" class="flex overflow-x-auto snap-x snap-mandatory gap-4 px-4 pb-6 scrollbar-hide scroll-smooth">

                @foreach($potensis as $item)
                {{-- Card Individual: Handling route detail --}}
                <a href="{{ Route::has('frontend.potensi.detail') ? route('frontend.potensi.detail', $item->id) : '#' }}" class="snap-start shrink-0 relative w-[85%] h-[400px] rounded-[1.5rem] overflow-hidden shadow-[0_8px_25px_rgba(0,0,0,0.1)] block group bg-gray-200">

                    {{-- Foto Background dengan Error Handling --}}
                    @php
                    $gambarFallback = 'https://placehold.co/400x600?text=Potensi+Desa';
                    $gambarUrl = !empty($item->gambar) ? asset('storage/' . $item->gambar) : $gambarFallback;
                    @endphp
                    <img src="{{ $gambarUrl }}" alt="{{ $item->judul ?? 'Gambar Potensi' }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='{{ $gambarFallback }}'">

                    {{-- Gradient Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                    {{-- Konten Teks --}}
                    <div class="absolute bottom-0 left-0 w-full p-6 z-10">
                        <h3 class="text-white font-black text-xl mb-2 drop-shadow-md leading-tight uppercase line-clamp-2">
                            {{ $item->judul ?? 'NAMA POTENSI' }}
                        </h3>

                        {{-- Deskripsi dibatasi maksimal 3 baris --}}
                        {{-- Handling error pada strip_tags jika deskripsi null di PHP 8 --}}
                        <p class="text-white/90 text-[11px] font-medium leading-relaxed line-clamp-3">
                            {{ Str::limit(strip_tags($item->deskripsi ?? ''), 120) }}
                        </p>
                    </div>
                </a>
                @endforeach

                {{-- Spacer Akhir agar card terakhir bisa di-scroll sampai mentok --}}
                <div class="shrink-0 w-2"></div>
            </div>

            @else
            {{-- Tampilan Placeholder (Empty State) Mobile --}}
            <div class="px-4 mb-8">
                <div class="flex flex-col items-center justify-center w-full py-10 px-4 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m22 4v-4m-3-6l-4-4-4 4-4-4-4 4-4-4m22 14H1"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21v-8"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold text-center leading-tight">Data Belum Tersedia</p>
                    <p class="text-gray-400 text-xs mt-2 text-center">
                        Data potensi desa belum diinputkan ke dalam sistem.
                    </p>
                </div>
            </div>
            @endif

            {{-- Tombol Lihat Semua --}}
            {{-- Memastikan route yang dipanggil adalah 'frontend.potensi' (sesuai target yang benar, bukan wisata) --}}
            @if(Route::has('frontend.potensi'))
            <div class="mt-2 px-4">
                <a href="{{ route('frontend.potensi') }}" class="block w-full border-2 border-[#2ac0b4] text-[#2ac0b4] hover:bg-[#2ac0b4] hover:text-white font-bold text-[14px] text-center py-3 rounded-xl transition-all active:scale-95">
                    Lihat Semua Potensi
                </a>
            </div>
            @endif

        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}

        <div class="hidden md:block wisata-section-baru py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Pengecekan awal variabel $wisata_desa --}}
                @php
                $wisata_unggulan = null;
                if(isset($wisata_desa) && count($wisata_desa) > 0) {
                // Mencari wisata khusus dengan ID 1 dari data yang dikirim controller
                $wisata_unggulan = $wisata_desa->firstWhere('id', 1) ?? $wisata_desa->first();
                }
                @endphp

                @if($wisata_unggulan)
                {{-- Wrapper slider HANYA dirender jika data wisata ADA --}}
                <div class="wisata-wrapper-utama relative">

                    {{-- Fallback gambar background --}}
                    @php
                    $gambarBgFallback = 'https://placehold.co/1920x1080?text=Wisata+Desa';
                    $gambarBgUrl = !empty($wisata_unggulan->gambar) ? asset('storage/' . $wisata_unggulan->gambar) : $gambarBgFallback;
                    @endphp

                    {{-- Background Luar mengambil dari gambar wisata unggulan --}}
                    <div class="slide-bg-luar" style="background-image: url('{{ $gambarBgUrl }}');" onerror="this.style.backgroundImage='url({{ $gambarBgFallback }})'"></div>
                    {{-- <div class="slide-bg-overlay"></div> --}}

                    <div class="wisata-container-tengah relative z-10">

                        <div class="wisata-header-kiri">
                            <h1 class="judul-wisata text-4xl font-extrabold text-[#2ac0b4] uppercase mb-4 tracking-tight">WISATA DESA</h1>
                            <span class="deskripsi-wisata text-gray-800 text-lg font-medium leading-relaxed">
                                Layanan promosi potensi desa dan fasilitas untuk menarik minat pengunjung.
                            </span>
                        </div>

                        <div class="wisata-inner-slider">
                            {{-- Cek Route sebelum merender link --}}
                            <a href="{{ Route::has('frontend.show') ? route('frontend.show', $wisata_unggulan->id) : '#' }}" class="wisata-slide fade group block relative" style="display: block;">

                                {{-- Fallback Gambar Inner --}}
                                @php
                                $gambarInnerFallback = 'https://placehold.co/800x600?text=Wisata';
                                $gambarInnerUrl = !empty($wisata_unggulan->gambar) ? asset('storage/' . $wisata_unggulan->gambar) : $gambarInnerFallback;
                                @endphp

                                <img src="{{ $gambarInnerUrl }}" class="inner-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="{{ $wisata_unggulan->nama_wisata ?? 'Wisata Desa' }}" onerror="this.src='{{ $gambarInnerFallback }}'">

                                <div class="inner-box-gradient absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                                <div class="wisata-text-content absolute bottom-0 left-0 p-6 w-full text-white">
                                    <h3 class="text-2xl font-bold mb-2 uppercase">{{ $wisata_unggulan->nama_wisata ?? 'NAMA WISATA BELUM DIATUR' }}</h3>

                                    <p class="text-sm line-clamp-3 text-gray-200">
                                        {{ Str::limit(strip_tags($wisata_unggulan->deskripsi ?? ''), 150) }}
                                    </p>
                                </div>

                            </a>
                        </div>

                    </div>
                </div>
                @else
                {{-- Tampilan Kosong dipindah ke LUAR .wisata-wrapper-utama --}}
                {{-- Ini akan membuat background di belakang kotak ini transparan/mengikuti warna dasar website --}}
                <div class="flex flex-col items-center justify-center w-full py-20 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200 mt-8 mb-8">
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m22 4v-4m-3-6l-4-4-4 4-4-4-4 4-4-4m22 14H1"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21v-8"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Wisata Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Saat ini belum ada data destinasi wisata desa yang diinputkan ke dalam sistem.
                    </p>
                </div>
                @endif

                {{-- Tombol Lihat Semua Wisata --}}
                @if(Route::has('frontend.wisata'))
                <div class="mt-8 flex justify-end w-full">
                    <a href="{{ route('frontend.wisata') }}" class="btn-lihat-semua-wisata font-extrabold text-gray-800 hover:text-[#2ac0b4] transition flex items-center gap-2 text-sm uppercase tracking-wide">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <i class="icon-list-wisata"></i> LIHAT WISATA LEBIH BANYAK
                    </a>
                </div>
                @endif

            </div>
        </div>



        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}
        <div class="block md:hidden max-w-md mx-auto mt-10">

            {{-- Judul & Subjudul --}}
            <h2 class="text-[#2ac0b4] font-black text-2xl uppercase mb-3 text-center tracking-wide">
                Wisata
            </h2>
            <p class="text-gray-800 text-[13px] font-medium text-center mb-8 leading-relaxed px-4">
                Layanan yang mempermudah promosi wisata desa sehingga dapat menarik pengunjung desa
            </p>

            {{-- Pengecekan Ketersediaan Data Wisata --}}
            @if(isset($wisata_desa) && count($wisata_desa) > 0)

            {{-- Container Slider Wisata (Bisa di-swipe horizontal) --}}
            <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 px-4 pb-6 scrollbar-hide scroll-smooth">

                @foreach($wisata_desa as $item)
                {{-- Card Individual: Dibuat tinggi (h-[400px]) untuk menonjolkan foto --}}
                {{-- PERBAIKAN: Menggunakan route('frontend.show') sesuai standar detail Wisata Desktop --}}
                <a href="{{ Route::has('frontend.show') ? route('frontend.show', $item->id) : '#' }}" class="snap-start shrink-0 relative w-[85%] h-[400px] rounded-[1.5rem] overflow-hidden shadow-[0_8px_25px_rgba(0,0,0,0.1)] block group bg-gray-200">

                    {{-- Foto Background dengan Error Handling --}}
                    @php
                    $gambarFallback = 'https://placehold.co/400x600?text=Wisata+Desa';
                    $gambarUrl = !empty($item->gambar) ? asset('storage/' . $item->gambar) : $gambarFallback;
                    @endphp
                    <img src="{{ $gambarUrl }}" alt="{{ $item->nama_wisata ?? 'Gambar Wisata' }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" onerror="this.src='{{ $gambarFallback }}'">

                    {{-- Gradient Overlay (Hitam pekat di bawah, pudar ke atas) --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                    {{-- Konten Teks --}}
                    <div class="absolute bottom-0 left-0 w-full p-6 z-10">
                        <h3 class="text-white font-black text-xl mb-2 drop-shadow-md leading-tight uppercase line-clamp-2">
                            {{ $item->nama_wisata ?? 'NAMA WISATA BELUM DIATUR' }}
                        </h3>

                        {{-- Deskripsi dibatasi maksimal 3 baris --}}
                        {{-- PERBAIKAN: Handling error pada strip_tags jika deskripsi bernilai null --}}
                        <p class="text-white/90 text-[11px] font-medium leading-relaxed line-clamp-3">
                            {{ Str::limit(strip_tags($item->deskripsi ?? ''), 120) }}
                        </p>
                    </div>
                </a>
                @endforeach

                {{-- Spacer Akhir agar card terakhir bisa di-scroll sampai mentok --}}
                <div class="shrink-0 w-2"></div>
            </div>

            @else
            {{-- Tampilan Placeholder (Empty State) Mobile --}}
            <div class="px-4 mb-8">
                <div class="flex flex-col items-center justify-center w-full py-10 px-4 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold text-center leading-tight">Data Wisata Belum Tersedia</p>
                    <p class="text-gray-400 text-xs mt-2 text-center">
                        Saat ini belum ada data destinasi wisata desa yang diinputkan.
                    </p>
                </div>
            </div>
            @endif

            {{-- Tombol Lihat Semua (Dengan pengecekan route) --}}
            @if(Route::has('frontend.wisata'))
            <div class="mt-2 px-4">
                <a href="{{ route('frontend.wisata') }}" class="block w-full border-2 border-[#2ac0b4] text-[#2ac0b4] bg-transparent hover:bg-[#2ac0b4] hover:text-white font-bold text-[14px] text-center py-3 rounded-xl transition-all active:scale-95">
                    Lihat Semua Wisata
                </a>
            </div>
            @endif

        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}

        <div class="hidden md:block py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Header (Rata Kiri) --}}
                <div class="mb-10 text-left">
                    <h2 class="text-4xl font-extrabold text-[#2ac0b4] mb-3 uppercase tracking-tight">BELI DARI DESA</h2>
                    <p class="text-gray-800 text-lg font-medium leading-relaxed max-w-5xl">
                        Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa
                    </p>
                </div>

                {{-- Pengecekan Ketersediaan Data Produk --}}
                @if(isset($produk_umkm) && count($produk_umkm) > 0)

                {{-- Grid Produk (3 Kolom) --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    {{-- Menampilkan maksimal 6 produk --}}
                    @foreach($produk_umkm->take(6) as $produk)
                    <div class="bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.05)] border border-gray-100 overflow-hidden flex flex-col h-full group hover:-translate-y-1 hover:shadow-lg transition-all duration-300">

                        {{-- Gambar Produk --}}
                        <div class="w-full aspect-[4/3] overflow-hidden bg-gray-200 relative">
                            {{-- Handling Route --}}
                            <a href="{{ Route::has('frontend.belanja.detail') ? route('frontend.belanja.detail', $produk->id) : '#' }}" class="block w-full h-full">

                                {{-- Handling Gambar (Backend & Frontend) --}}
                                @php
                                $gambarFallback = 'https://placehold.co/400x300?text=Produk+UMKM';
                                $gambarUrl = !empty($produk->gambar) ? asset('storage/' . $produk->gambar) : $gambarFallback;
                                @endphp

                                <img src="{{ $gambarUrl }}" alt="{{ $produk->nama_produk ?? 'Gambar Produk' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='{{ $gambarFallback }}'" />
                            </a>
                        </div>

                        {{-- Info Produk --}}
                        <div class="p-5 flex flex-col flex-1">

                            {{-- Nama Produk --}}
                            <h3 class="font-bold text-gray-800 text-lg mb-4 line-clamp-2 leading-snug group-hover:text-[#2ac0b4] transition-colors">
                                <a href="{{ Route::has('frontend.belanja.detail') ? route('frontend.belanja.detail', $produk->id) : '#' }}">
                                    {{ $produk->nama_produk ?? 'Nama Produk Belum Diatur' }}
                                </a>
                            </h3>

                            <div class="flex-1"></div> {{-- Spacer penyeimbang --}}

                            {{-- Baris Bawah: Rating & Harga --}}
                            <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100/60">

                                {{-- Bintang (Warna abu-abu lembut) --}}
                                <div class="flex items-center gap-0.5 text-gray-300 text-sm">
                                    @for($i = 0; $i < 5; $i++) <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                        @endfor
                                </div>

                                {{-- Harga dengan Null Coalescing agar number_format tidak error --}}
                                <span class="font-extrabold text-gray-900 text-lg">
                                    Rp{{ number_format($produk->harga ?? 0, 0, ',', '.') }}
                                </span>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                @else
                {{-- Tampilan Placeholder (Empty State) disamakan dengan gaya komponen lain --}}
                <div class="flex flex-col items-center justify-center w-full py-20 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200">
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data UMKM Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Saat ini belum ada produk UMKM yang diinputkan ke dalam sistem. Silakan kembali lagi nanti.
                    </p>
                </div>
                @endif

                {{-- Footer Link (Rata Kanan) --}}
                @if(Route::has('frontend.belanja'))
                <div class="mt-8 flex justify-end">
                    <a href="{{ route('frontend.belanja') }}" class="font-extrabold text-gray-800 hover:text-[#2ac0b4] transition flex items-center gap-2 text-sm uppercase tracking-wide">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        LIHAT PRODUK LEBIH BANYAK
                    </a>
                </div>
                @endif

            </div>
        </div>


        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}


        <div class="block md:hidden bg-[#f8f9fa] px-0 py-10">

            <div class="max-w-md mx-auto">

                {{-- Judul & Subjudul --}}
                <h2 class="text-[#2ac0b4] font-black text-2xl uppercase mb-2 text-center tracking-wide">
                    Beli Dari Desa
                </h2>
                <p class="text-gray-800 text-[13px] font-medium text-center mb-6 leading-relaxed px-4">
                    Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa
                </p>

                {{-- Pengecekan Ketersediaan Data Produk UMKM --}}
                @if(isset($produk_umkm) && count($produk_umkm) > 0)

                {{-- Navigasi Anak Panah --}}
                <div class="flex justify-between items-center mb-4 px-4">
                    <button id="btnPrevUmkm" aria-label="Geser ke kiri" class="text-black hover:text-[#2ac0b4] transition-colors p-2 active:scale-95 bg-white rounded-full shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                    </button>
                    <button id="btnNextUmkm" aria-label="Geser ke kanan" class="text-black hover:text-[#2ac0b4] transition-colors p-2 active:scale-95 bg-white rounded-full shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>

                {{-- Container Slider Produk --}}
                <div id="sliderUmkm" class="flex overflow-x-auto snap-x snap-mandatory gap-4 px-4 pb-6 scrollbar-hide scroll-smooth">

                    @foreach($produk_umkm as $produk)
                    {{-- Card Individual --}}
                    <a href="{{ Route::has('frontend.belanja.detail') ? route('frontend.belanja.detail', $produk->id) : '#' }}" class="snap-start shrink-0 w-[200px] bg-white rounded-2xl overflow-hidden shadow-[0_4px_15px_rgba(0,0,0,0.05)] border border-gray-100 flex flex-col group active:scale-95 transition-transform">

                        {{-- Foto Produk dengan Fallback Error Handling --}}
                        <div class="h-[180px] w-full bg-gray-200 relative overflow-hidden">
                            @php
                            $gambarFallback = 'https://placehold.co/400x400?text=Produk+UMKM';
                            $gambarUrl = !empty($produk->gambar) ? asset('storage/' . $produk->gambar) : $gambarFallback;
                            @endphp
                            <img src="{{ $gambarUrl }}" alt="{{ $produk->nama_produk ?? 'Gambar Produk' }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='{{ $gambarFallback }}'" />
                        </div>

                        {{-- Info Produk --}}
                        <div class="p-4 flex-1 flex flex-col justify-between">
                            {{-- Nama Produk --}}
                            <h3 class="text-gray-800 font-bold text-[14px] leading-snug mb-3 line-clamp-2 group-hover:text-[#2ac0b4] transition-colors">
                                {{ $produk->nama_produk ?? 'Nama Produk Belum Diatur' }}
                            </h3>

                            {{-- Baris Bawah: Harga & Rating Bintang --}}
                            <div class="flex justify-between items-end mt-auto">
                                {{-- Harga dengan pencegahan error number_format --}}
                                <span class="text-gray-600 font-bold text-[13px]">
                                    Rp{{ number_format($produk->harga ?? 0, 0, ',', '.') }}
                                </span>

                                {{-- Bintang Rating --}}
                                <div class="flex text-gray-300 text-[10px] tracking-widest">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach

                    {{-- Spacer Akhir --}}
                    <div class="shrink-0 w-2"></div>
                </div>

                @else
                {{-- Tampilan Placeholder (Empty State) Mobile --}}
                <div class="px-4 mb-8">
                    <div class="flex flex-col items-center justify-center w-full py-10 px-4 bg-white rounded-xl border-2 border-dashed border-gray-200">
                        <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <p class="text-gray-500 text-base font-semibold text-center leading-tight">Belum Ada Produk</p>
                        <p class="text-gray-400 text-xs mt-2 text-center">
                            Saat ini belum ada produk UMKM yang ditawarkan.
                        </p>
                    </div>
                </div>
                @endif

                {{-- Tombol Lihat Semua (Dengan pengecekan route) --}}
                @if(Route::has('frontend.belanja'))
                <div class="mt-2 px-4">
                    <a href="{{ route('frontend.belanja') }}" class="block w-full border-2 border-[#2ac0b4] text-[#2ac0b4] bg-transparent hover:bg-[#2ac0b4] hover:text-white font-bold text-[14px] text-center py-3 rounded-xl transition-all active:scale-95">
                        Lihat Semua Produk
                    </a>
                </div>
                @endif

            </div>
        </div>

        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}


        <div class="hidden md:block py-16 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Header --}}
                <div class="mb-10 text-left">
                    <h2 class="text-4xl font-extrabold text-[#2ac0b4] mb-3 uppercase tracking-tight">GALERI DESA</h2>
                    <p class="text-gray-800 text-lg font-medium leading-relaxed max-w-5xl">
                        Menampilkan kegiatan-kegiatan yang berlangsung di desa
                    </p>
                </div>

                {{-- Pengecekan Ketersediaan Data Galeri --}}
                @if(isset($galeri_terbaru) && count($galeri_terbaru) > 0)

                {{-- Grid Galeri (Seragam 3 Kolom) --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                    {{-- Ambil maksimal 6 data --}}
                    @foreach($galeri_terbaru->take(6) as $foto)

                    {{-- Penyiapan Data Fallback Gambar --}}
                    @php
                    $gambarFallback = 'https://placehold.co/600x400?text=Galeri+Desa';
                    $gambarUrl = !empty($foto->gambar) ? asset('storage/' . $foto->gambar) : $gambarFallback;
                    $judulFoto = $foto->judul ?? 'Foto Kegiatan';
                    @endphp

                    {{-- Tambahkan cursor-pointer dan onclick panggil fungsi JS --}}
                    <div onclick="openLightbox('{{ $gambarUrl }}', '{{ addslashes($judulFoto) }}')" class="cursor-pointer overflow-hidden relative group aspect-[4/3] shadow-sm transition-all duration-300 hover:shadow-lg border border-gray-100 bg-gray-200">

                        <img src="{{ $gambarUrl }}" alt="{{ $judulFoto }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.src='{{ $gambarFallback }}'" />

                        {{-- Overlay Hitam Transparan & Teks Judul --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5 opacity-90 group-hover:opacity-100 transition-opacity">
                            <span class="text-white font-extrabold text-sm md:text-base uppercase leading-snug drop-shadow-sm line-clamp-2 group-hover:text-[#2ac0b4] transition-colors">
                                {{ $judulFoto }}
                            </span>
                        </div>
                    </div>

                    @endforeach

                </div>

                @else
                {{-- Tampilan Placeholder (Empty State) Konsisten --}}
                <div class="flex flex-col items-center justify-center w-full py-20 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200 mb-8">
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Galeri Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Saat ini belum ada dokumentasi foto kegiatan desa yang diunggah ke dalam sistem.
                    </p>
                </div>
                @endif

                {{-- Footer Link --}}
                @if(Route::has('frontend.galeri'))
                <div class="flex justify-end mt-8">
                    <a href="{{ route('frontend.galeri') }}" class="font-extrabold text-gray-800 hover:text-[#2ac0b4] transition flex items-center gap-2.5 text-sm uppercase tracking-wide">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        LIHAT FOTO LEBIH BANYAK
                    </a>
                </div>
                @endif

            </div>
        </div>


        {{-- MODAL / LIGHTBOX CONTAINER (Hidden by default) --}}
        <div id="lightboxModal" class="fixed inset-0 z-[9999] hidden bg-black/90 backdrop-blur-sm flex items-center justify-center p-4 transition-opacity duration-300 opacity-0" onclick="closeLightbox()">
            {{-- Tombol Close --}}
            <button class="absolute top-6 right-8 text-white/70 hover:text-white text-5xl font-light transition-colors focus:outline-none">&times;</button>

            {{-- Gambar yang diperbesar --}}
            <img id="lightboxImage" src="" class="max-w-full max-h-[85vh] object-contain rounded-md shadow-2xl scale-95 transition-transform duration-300" alt="Preview Gambar">

            {{-- Judul Gambar di bawah --}}
            <p id="lightboxCaption" class="absolute bottom-8 text-white text-lg md:text-xl font-semibold tracking-wide drop-shadow-lg text-center px-4"></p>
        </div>

        {{-- SCRIPT UNTUK MENJALANKAN LIGHTBOX --}}
        <script>
            function openLightbox(imageSrc, captionText) {
                const modal = document.getElementById('lightboxModal');
                const modalImg = document.getElementById('lightboxImage');
                const modalCaption = document.getElementById('lightboxCaption');

                // Set src gambar dan teks judul
                modalImg.src = imageSrc;
                modalCaption.textContent = captionText;

                // Tampilkan modal dengan menghapus class hidden
                modal.classList.remove('hidden');

                // Animasi fade in & scale in
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modalImg.classList.remove('scale-95');
                    modalImg.classList.add('scale-100');
                }, 10);
            }

            function closeLightbox() {
                const modal = document.getElementById('lightboxModal');
                const modalImg = document.getElementById('lightboxImage');

                // Animasi fade out & scale out
                modal.classList.add('opacity-0');
                modalImg.classList.remove('scale-100');
                modalImg.classList.add('scale-95');

                // Sembunyikan sepenuhnya setelah animasi selesai (300ms)
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modalImg.src = ''; // Kosongkan src agar tidak memori bocor
                }, 300);
            }

        </script>


        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}

        <div class="block md:hidden max-w-md mx-auto py-10">

            {{-- Judul & Subjudul --}}
            <h2 class="text-[#2ac0b4] font-black text-2xl uppercase mb-2 text-center tracking-wide">
                Galeri Desa
            </h2>
            <p class="text-gray-800 text-[13px] font-medium text-center mb-8 leading-relaxed px-4">
                Menampilkan kegiatan-kegiatan yang berlangsung di desa
            </p>

            {{-- Pengecekan Ketersediaan Data Galeri --}}
            @if(isset($galeri_terbaru) && count($galeri_terbaru) > 0)

            {{-- Grid Galeri: 1 Kolom --}}
            <div class="grid grid-cols-1 gap-4 mb-6 px-4">

                {{-- Ambil maksimal 2 foto terbaru --}}
                @foreach($galeri_terbaru->take(2) as $foto)

                {{-- Penyiapan Data Fallback untuk Mencegah Error --}}
                @php
                $gambarFallback = 'https://placehold.co/600x450?text=Galeri+Desa';
                $gambarUrl = !empty($foto->gambar) ? asset('storage/' . $foto->gambar) : $gambarFallback;
                $judulFoto = $foto->judul ?? 'Foto Kegiatan';
                @endphp

                {{-- Rasio aspect-[4/3] dengan klik Lightbox --}}
                {{-- Menggunakan addslashes() agar string yang mengandung kutip tidak merusak JavaScript --}}
                <div onclick="openLightbox('{{ $gambarUrl }}', '{{ addslashes($judulFoto) }}')" class="cursor-pointer relative aspect-[4/3] overflow-hidden rounded-xl shadow-sm block group bg-gray-200">

                    {{-- Foto Kegiatan --}}
                    <img src="{{ $gambarUrl }}" alt="{{ $judulFoto }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.src='{{ $gambarFallback }}'" />

                    {{-- Overlay Judul (Gradient Hitam agar teks kontras) --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-90 active:opacity-100 transition-opacity duration-300 flex items-end justify-center p-4 text-center z-10">
                        <span class="text-white text-sm font-bold line-clamp-2 leading-tight drop-shadow-md">
                            {{ $judulFoto }}
                        </span>
                    </div>

                </div>
                @endforeach

            </div>

            @else
            {{-- Tampilan Placeholder (Empty State) Mobile --}}
            <div class="px-4 mb-8">
                <div class="flex flex-col items-center justify-center w-full py-10 px-4 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold text-center leading-tight">Galeri Belum Tersedia</p>
                    <p class="text-gray-400 text-xs mt-2 text-center">
                        Saat ini belum ada dokumentasi foto kegiatan desa yang diunggah.
                    </p>
                </div>
            </div>
            @endif

            {{-- Tombol Lihat Semua (Dengan pengecekan route) --}}
            @if(Route::has('frontend.galeri'))
            <div class="px-4 mt-2">
                <a href="{{ route('frontend.galeri') }}" class="block w-full border-2 border-[#2ac0b4] text-[#2ac0b4] bg-transparent hover:bg-[#2ac0b4] hover:text-white font-bold text-[14px] text-center py-3 rounded-xl transition-all active:scale-95">
                    Lihat Semua Galeri
                </a>
            </div>
            @endif

        </div>



    </section>
</x-frontend>
