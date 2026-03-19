<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Resmi Desa Bedi Kulon</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preload" as="image" href="{{ asset('assets/img/background 1.webp') }}" fetchpriority="high">
    @stack('styles')
</head>


<body>

    {{-- desktopNav --}}
    <nav id="desktopNav" class="hidden md:block fixed top-0 w-full z-[1000] transition-all duration-300">
        <div class="nav-container">
            <div class="logo-section">
                <img src="{{ asset('assets/img/Logo Ponorogo.png') }}" alt="Logo Desa" class="logo-img" />
                <div class="logo-text">
                    <span class="nama-desa">Desa Bedi Kulon</span>
                    <span class="sub-nama-nav">Kabupaten Ponorogo</span>
                </div>
            </div>

            <div class="hamburger" id="hamburger-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <div class="menu-overlay" id="menu-overlay"></div>

            <ul class="nav-links" id="nav-menu">
                <div class="close-menu" id="close-menu">&times;</div>
                <li><a href="{{ route('frontend.dashboard') }}">Home</a></li>
                <li><a href="{{ route('frontend.profile') }}">Profil Desa</a></li>
                <li><a href="{{ route('frontend.infografis') }}">Infografis</a></li>
                <li><a href="{{ route('frontend.listing') }}">Listing</a></li>
                <li><a href="{{ route('frontend.sdgs') }}">IDM</a></li>
                <li><a href="{{ route('frontend.berita') }}">Berita</a></li>
                <li><a href="{{ route('frontend.belanja') }}">Belanja</a></li>

                <li><a href="{{ route('frontend.ppid') }}">PPID</a></li>

            </ul>
        </div>
    </nav>
    {{-- bottomNav --}}
    <nav class="block md:hidden fixed top-0 left-0 right-0 h-[68px] bg-[#2ac0b4] text-white z-[9999] px-3 flex justify-between items-center shadow-md">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/img/Logo Ponorogo.png') }}" alt="Logo Ponorogo" class="w-9 h-auto drop-shadow-sm" />
            <div class="flex flex-col">
                <span class="font-extrabold text-[15px] leading-tight tracking-wide">Desa Bedi Kulon</span>
                <span class="text-[11px] font-medium leading-tight">Kabupaten Ponorogo</span>
            </div>
        </div>

        <button type="button" aria-label="Buka Menu" onclick="toggleSidebarMobile()" class="text-white hover:opacity-80 transition-opacity p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 6l16 0"></path>
                <path d="M4 12l16 0"></path>
                <path d="M4 18l16 0"></path>
            </svg>
        </button>

    </nav>


    <nav id="bottomNav" class="block md:hidden fixed !bottom-0 !top-auto left-4 right-4 !w-auto mb-[calc(1rem+env(safe-area-inset-bottom))] bg-white border border-gray-100 rounded-2xl px-5 py-3 flex justify-between items-center z-[10000] shadow-[0_10px_40px_rgba(0,0,0,0.15)]">

        <a href="{{ route('frontend.dashboard') }}" class="flex flex-col items-center gap-1.5 text-[#2ac0b4] relative">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
            </svg>
            <span class="text-[10px] font-bold tracking-wide">Beranda</span>
        </a>


        <a href="{{ route('frontend.pengaduan') }}" class="flex flex-col items-center gap-1.5 text-gray-400 hover:text-[#2ac0b4] transition-colors relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697"></path>
                <path d="M18 14v4h4"></path>
                <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2"></path>
                <path d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M8 11h4"></path>
                <path d="M8 15h3"></path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Pengaduan</span>
        </a>


        <a href="{{ route('frontend.berita') }}" class="flex flex-col items-center gap-1.5 text-gray-400 hover:text-[#2ac0b4] transition-colors relative">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11"></path>
                <path d="M8 8l4 0"></path>
                <path d="M8 12l4 0"></path>
                <path d="M8 16l4 0"></path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Berita</span>
        </a>


        <a href="{{ route('frontend.belanja') }}" class="flex flex-col items-center gap-1.5 text-gray-400 hover:text-[#2ac0b4] transition-colors relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"></path>
                <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Belanja</span>
        </a>


    </nav>

    <main class="pt-0 md:pt-0 md:pb-0 bg-[#f9f9f9]">

        {{ $slot }}
    </main>


    <div class="visitor-widget-container hidden md:block">
        <div class="visitor-popup" id="visitorPopup">
            <h4 class="popup-title">Jumlah Kunjungan</h4>
            <ul class="popup-list">
                <li><span>Hari Ini</span> <span>{{ number_format($visitor_stats['hari_ini']) }}</span></li>
                <li><span>Kemarin</span> <span>{{ number_format($visitor_stats['kemarin']) }}</span></li>
                <li><span>Minggu Ini</span> <span>{{ number_format($visitor_stats['minggu_ini']) }}</span></li>
                <li><span>Bulan Ini</span> <span>{{ number_format($visitor_stats['bulan_ini']) }}</span></li>
                <li class="total-row"><span>Total Kunjungan</span> <span>{{ number_format($visitor_stats['total']) }}</span></li>
            </ul>
        </div>

        <button class="visitor-btn" onclick="toggleVisitor()">
            <div class="visitor-left">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 20V6a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v14"></path>
                    <path d="M2 20h20"></path>
                    <path d="M14 12v.01"></path>
                </svg>
                <span class="visitor-count">{{ number_format($visitor_stats['hari_ini'], 0, ',', '.') }}</span>

            </div>
            <div class="visitor-center">
                <span class="visitor-label">Kunjungan</span>
                <span class="visitor-sub">Hari Ini</span>
            </div>
            <div class="visitor-right">
                <svg id="visitorArrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="transition: transform 0.3s;">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </div>
        </button>
    </div>
    <div class="right-widget-container hidden md:block">


        <div class="pengaduan-popup" id="pengaduanPopup">
            <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama <span class="text-red">*</span></label>
                    <input type="text" name="nama" class="input-outline-green" placeholder="Masukkan nama Anda" required>

                </div>

                <div class="form-group">
                    <label>Nomor Telepon/WA <span class="text-red">*</span></label>
                    <input type="text" name="no_hp" class="input-gray" placeholder="Masukkan nomor HP/WhatsApp" required>

                </div>

                <div class="form-group">
                    <label>Kategori Pengaduan <span class="text-red">*</span></label>
                    <select name="kategori" class="input-gray" required>
                        <option value="" disabled selected>Pilih kategori pengaduan</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pelayanan">Pelayanan Masyarakat</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pengaduan <span class="text-red">*</span></label>
                    <textarea name="isi_pengaduan" class="input-gray" rows="3" placeholder="Masukkan kesan, informasi, atau detail aduan Anda" required></textarea>

                </div>

                <div class="form-group">
                    <label>Lampiran</label>
                    <div class="file-upload-container">
                        <input type="file" name="lampiran" id="input-file-aduan" class="hidden-input" accept=".jpg,.jpeg,.png,.pdf" style="display: none;">

                        <label for="input-file-aduan" class="file-upload-box cursor-pointer flex flex-col items-center justify-center border-2 border-dashed border-gray-200 p-6 rounded-lg hover:bg-gray-50 transition">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mb-2 text-gray-400">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            <span id="text-nama-file" class="text-sm text-gray-500 font-medium">Unggah foto/PDF</span>
                            <p class="text-[10px] text-gray-400 mt-2 text-center">
                                *Jika foto lebih dari satu, mohon masukkan ke dalam satu file PDF
                            </p>
                        </label>
                    </div>
                </div>



                <div class="form-action mt-4">
                    <button type="submit" class="btn-kirim w-full flex items-center justify-center">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        Kirim Aduan
                    </button>
                </div>


            </form>
        </div>

        <div class="right-buttons-row">
            <button class="btn-pengaduan" onclick="togglePengaduan()">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                    <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                </svg>
                Pengaduan
            </button>
        </div>


    </div>
    {{-- desktopNav --}}
    <footer class="bg-[#2ac0b4] text-white pt-12 pb-6 hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Grid 4 Kolom --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                {{-- Kolom 1: Logo & Identitas --}}
                <div class="flex items-start gap-4">
                    <img src="{{ asset('assets/img/Logo Ponorogo.png') }}" alt="Logo Bedikulon" class="w-16 h-auto object-contain" />
                    <div class="flex flex-col text-sm leading-relaxed">
                        <h3 class="font-bold text-base mb-1">Pemerintah Desa Bedikulon</h3>
                        <p>Jalan Jl. Ahmad Yani 1</p>
                        <p>Desa Bedikulon, Kecamatan Bungkal,</p>
                        <p>Kabupaten Ponorogo</p>
                        <p>Provinsi Jawa Timur, 63462</p>
                        <p class="font-bold mt-2">Kode Wilayah: 35.02.03.2019</p>
                    </div>
                </div>

                {{-- Kolom 2: Hubungi Kami & Sosial Media --}}
                <div>
                    <h4 class="font-bold text-base mb-4">Hubungi Kami</h4>
                    <ul class="flex flex-col gap-3 text-sm mb-5">
                        <li class="flex items-center gap-2">
                            {{-- SVG Telepon --}}
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            082150208664
                        </li>
                        <li class="flex items-center gap-2">
                            {{-- SVG Email --}}
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            bedikulon@gmail.com
                        </li>
                    </ul>

                    {{-- Ikon Sosial Media SVG --}}
                    <div class="flex gap-3">
                        {{-- Instagram --}}
                        <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-all duration-300 hover:bg-white hover:text-[#1e3a8a]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                        {{-- Facebook --}}
                        <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-all duration-300 hover:bg-white hover:text-[#1e3a8a]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        {{-- X (Twitter) --}}
                        <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-all duration-300 hover:bg-white hover:text-[#1e3a8a]">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" /></svg>
                        </a>
                        {{-- YouTube --}}
                        <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-all duration-300 hover:bg-white hover:text-[#1e3a8a]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33 2.78 2.78 0 0 0 1.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z"></path>
                                <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                            </svg>
                        </a>
                        {{-- TikTok --}}
                        <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-all duration-300 hover:bg-white hover:text-[#1e3a8a]">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.04-.1z" /></svg>
                        </a>
                    </div>
                </div>

                {{-- Kolom 3: Nomor Telepon Penting --}}
                <div>
                    <h4 class="font-bold text-base mb-4">Nomor Telepon Penting</h4>
                    <ul class="flex flex-col gap-3 text-sm">
                        <li><a href="#" class="hover:underline hover:text-blue-200 transition duration-300">Kades</a></li>
                        <li><a href="#" class="hover:underline hover:text-blue-200 transition duration-300">Ambulan</a></li>
                    </ul>
                </div>

                {{-- Kolom 4: Jelajahi --}}
                <div>
                    <h4 class="font-bold text-base mb-4">Jelajahi</h4>
                    <ul class="flex flex-col gap-3 text-sm">
                        <li><a href="#" class="hover:underline hover:text-blue-200 transition duration-300">Website Kemendesa</a></li>
                        <li><a href="#" class="hover:underline hover:text-blue-200 transition duration-300">Website Kemendagri</a></li>
                        <li><a href="#" class="hover:underline hover:text-blue-200 transition duration-300">Website Kabupaten Ponorogo</a></li>
                        <li><a href="#" class="hover:underline hover:text-blue-200 transition duration-300">Cek DPT Online</a></li>
                    </ul>
                </div>

            </div>

            {{-- Footer Bottom (Copyright) --}}
            <div class="mt-12 pt-6 border-t border-white/20 flex justify-center items-center text-sm">
                <p>&copy; 2026 Powered by PT Digital Desa Indonesia</p>
            </div>

        </div>
    </footer>


    {{-- bottomNav --}}
    <footer class="block md:hidden bg-[#2ac0b4] text-white pt-6 pb-[110px] px-6 font-sans">

        <div class="flex items-center gap-4 mb-6">
            <img src="{{ asset('assets/img/Logo Ponorogo.png') }}" alt="Logo Ponorogo" class="w-14 h-auto" />
            <div>
                <h3 class="font-extrabold text-[15px] leading-tight mb-1">Desa Bedi Kulon</h3>
                <p class="text-[11px] leading-tight font-medium opacity-90">
                    Kecamatan Bungkal<br>
                    Kabupaten Ponorogo<br>
                    Provinsi Jawa Timur
                </p>
            </div>
        </div>


        <div class="flex flex-col border-t border-white/20">

            <details class="group border-b border-white/20" name="footer-menu">

                <summary class="flex items-center justify-between py-4 font-bold text-sm cursor-pointer list-none">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[22px] h-[22px] opacity-90" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                            <path d="M3.6 9h16.8"></path>
                            <path d="M3.6 15h16.8"></path>
                            <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                            <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                        </svg>
                        <span class="text-[14px] tracking-wide">Kunjungan Website</span>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9l6 6l6 -6"></path>
                    </svg>
                </summary>

                <div class="pb-6 pt-2 pl-9">
                    <div class="grid grid-cols-2 gap-y-5 gap-x-4">

                        <div>
                            <p class="text-[11px] font-semibold opacity-90 mb-0.5">Hari Ini</p>
                            <p class="text-base font-bold tracking-wide">515</p>
                        </div>
                        <div>
                            <p class="text-[11px] font-semibold opacity-90 mb-0.5">Kemarin</p>
                            <p class="text-base font-bold tracking-wide">386</p>
                        </div>

                        <div>
                            <p class="text-[11px] font-semibold opacity-90 mb-0.5">Minggu Ini</p>
                            <p class="text-base font-bold tracking-wide">1.643</p>
                        </div>
                        <div>
                            <p class="text-[11px] font-semibold opacity-90 mb-0.5">Minggu Lalu</p>
                            <p class="text-base font-bold tracking-wide">2.681</p>
                        </div>

                        <div>
                            <p class="text-[11px] font-semibold opacity-90 mb-0.5">Bulan Ini</p>
                            <p class="text-base font-bold tracking-wide">9.406</p>
                        </div>
                        <div>
                            <p class="text-[11px] font-semibold opacity-90 mb-0.5">Bulan Lalu</p>
                            <p class="text-base font-bold tracking-wide">21.497</p>
                        </div>

                    </div>

                    <div class="mt-5">
                        <p class="text-[11px] font-semibold opacity-90 mb-0.5">Total Kunjungan</p>
                        <p class="text-base font-bold tracking-wide">472.991</p>
                    </div>
                </div>
            </details>


            <details class="group border-b border-white/20" name="footer-menu">

                <summary class="flex items-center justify-between py-4 font-bold text-sm cursor-pointer list-none">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[22px] h-[22px] opacity-90" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                        </svg>
                        <span class="text-[14px] tracking-wide">Kontak Desa</span>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9l6 6l6 -6"></path>
                    </svg>
                </summary>

                <div class="pb-6 pt-2 pl-9 space-y-4">

                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mt-0.5 opacity-90 flex-shrink-0" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                        </svg>
                        <span class="text-[11px] font-semibold tracking-wide opacity-95 leading-relaxed">082150208664</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mt-0.5 opacity-90 flex-shrink-0" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                            <path d="M3 7l9 6l9 -6"></path>
                        </svg>
                        <span class="text-[11px] font-semibold tracking-wide opacity-95 leading-relaxed">bedikulon@gmail.com</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mt-0.5 opacity-90 flex-shrink-0" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                            <path d="M12 7v5l3 3"></path>
                        </svg>
                        <span class="text-[11px] font-semibold tracking-wide opacity-95 leading-relaxed">Senin - Kamis (08.00 - 15.00) & Jum'at<br>(08.00 - 11.00)</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mt-0.5 opacity-90 flex-shrink-0" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                        </svg>
                        <span class="text-[11px] font-semibold tracking-wide opacity-95 leading-relaxed">Jalan Jl. Ahmad Yani 1<br>Desa Bedikulon, Kec. Bungkal</span>
                    </div>

                </div>
            </details>


            <details class="group border-b border-white/20" name="footer-menu">

                <summary class="flex items-center justify-between py-4 font-bold text-sm cursor-pointer list-none">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[22px] h-[22px] opacity-90" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M8 16v-4a4 4 0 0 1 8 0v4"></path>
                            <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7"></path>
                            <path d="M6 16m0 1a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z"></path>
                        </svg>
                        <span class="text-[14px] tracking-wide">Nomor Telepon Penting</span>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9l6 6l6 -6"></path>
                    </svg>
                </summary>

                <div class="pb-6 pt-2 pl-9 space-y-4">

                    <div>
                        <p class="text-[11px] font-bold tracking-wide opacity-95 mb-0.5">Kades Bedi Kulon</p>
                        <p class="text-[11px] font-bold tracking-wide opacity-95">081242368478</p>
                    </div>

                    <div>
                        <p class="text-[11px] font-bold tracking-wide opacity-95 mb-0.5">Ambulan Bedi Kulon</p>
                        <p class="text-[11px] font-bold tracking-wide opacity-95">085392095123</p>
                    </div>

                </div>
            </details>


            <details class="group border-b border-white/20" name="footer-menu">

                <summary class="flex items-center justify-between py-4 font-bold text-sm cursor-pointer list-none">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[22px] h-[22px] opacity-90" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M8 9l8 -4"></path>
                            <path d="M8 15l8 4"></path>
                            <path d="M5 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M19 5m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M19 19m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        </svg>
                        <span class="text-[14px] tracking-wide">Sosial Media</span>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9l6 6l6 -6"></path>
                    </svg>
                </summary>

                <div class="pb-6 pt-3 flex justify-center items-center gap-5">

                    <a href="#" aria-label="Facebook" class="opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                        </svg>
                    </a>

                    <a href="#" aria-label="Instagram" class="opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M16.5 7.5l0 .01"></path>
                        </svg>
                    </a>

                    <a href="#" aria-label="X Twitter" class="opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px]" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                            <path d="M4 20l6.768 -6.768"></path>
                            <path d="M20 4l-6.768 6.768"></path>
                        </svg>
                    </a>

                    <a href="#" aria-label="YouTube" class="opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z"></path>
                            <path d="M10 9l5 3l-5 3z"></path>
                        </svg>
                    </a>

                    <a href="#" aria-label="TikTok" class="opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z"></path>
                        </svg>
                    </a>

                </div>
            </details>


            <details class="group border-b border-white/20" name="footer-menu">

                <summary class="flex items-center justify-between py-4 font-bold text-sm cursor-pointer list-none">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[22px] h-[22px] opacity-90" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 15l6 -6"></path>
                            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                        </svg>
                        <span class="text-[14px] tracking-wide">Jelajahi</span>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9l6 6l6 -6"></path>
                    </svg>
                </summary>

                <div class="pb-6 pt-2 pl-[42px]">
                    <ul class="list-disc text-[11px] font-bold tracking-wide opacity-95 space-y-2.5 marker:text-white/70">
                        <li><a href="#" class="hover:underline hover:opacity-100 transition-all duration-300">Website Kemendesa</a></li>
                        <li><a href="#" class="hover:underline hover:opacity-100 transition-all duration-300">Website Kemendagri</a></li>
                        <li><a href="#" class="hover:underline hover:opacity-100 transition-all duration-300">Website Kabupaten Ponorogo</a></li>
                        <li><a href="#" class="hover:underline hover:opacity-100 transition-all duration-300">Cek DPT Online</a></li>
                    </ul>
                </div>
            </details>


        </div>

        <div class="text-center text-[10px] mt-4 font-medium opacity-80">
            &copy; 2026 Powered by Me
        </div>


    </footer>
    <div id="sidebarOverlay" onclick="toggleSidebarMobile()" class="fixed inset-0 bg-black/50 z-[10000] hidden transition-opacity duration-300 opacity-0"></div>

    <aside id="mobileSidebar" class="fixed top-0 right-0 w-[280px] h-full bg-white z-[10001] shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out font-sans">


        <nav class="p-4 space-y-1">
            <a href="{{ route('frontend.dashboard') }}" class="flex items-center gap-4 p-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors font-semibold text-sm">
                <i class="ph ph-house text-xl text-[#2ac0b4]"></i> Beranda
            </a>
            <a href="{{ route('frontend.profile') }}" class="flex items-center gap-4 p-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors font-semibold text-sm">
                <i class="ph ph-user text-xl text-[#2ac0b4]"></i> Profil Desa
            </a>
            <a href="{{ route('frontend.infografis') }}" class="flex items-center gap-4 p-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors font-semibold text-sm">
                <i class="ph ph-users-three text-xl text-[#2ac0b4]"></i> Infografis
            </a>
            <a href="{{ route('frontend.listing') }}" class="flex items-center gap-4 p-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors font-semibold text-sm">

                <i class="ph ph-file-text text-xl text-[#2ac0b4]"></i> Listing
            </a>
            <a href="{{ route('frontend.idm') }}" class="flex items-center gap-4 p-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors font-semibold text-sm">
                <i class="ph ph-house text-xl text-[#2ac0b4]"></i> IDM
            </a>
            <a href="{{ route('frontend.berita') }}" class="flex items-center gap-4 p-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors font-semibold text-sm">
                <i class="ph ph-user text-xl text-[#2ac0b4]"></i> Berita
            </a>
            <a href="{{ route('frontend.belanja') }}" class="flex items-center gap-4 p-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors font-semibold text-sm">
                <i class="ph ph-users-three text-xl text-[#2ac0b4]"></i> Belanja
            </a>
            <a href="{{ route('frontend.ppid') }}" class="flex items-center gap-4 p-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors font-semibold text-sm">
                <i class="ph ph-file-text text-xl text-[#2ac0b4]"></i> PPID
            </a>
            <hr class="my-4 border-gray-100">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-4 p-3 text-red-500 hover:bg-red-50 rounded-lg transition-colors font-bold text-sm">
                <i class="ph ph-sign-in text-xl"></i> Login Admin
            </a>
        </nav>
    </aside>

    @if(session('success_pengaduan'))
    <div id="success-trigger" data-message="{{ session('success_pengaduan') }}" style="display: none;"></div>
    @php session()->forget('success_pengaduan'); @endphp
    @endif

    <script>
        function toggleSidebarMobile() {
            const sidebar = document.getElementById('mobileSidebar');
            const overlay = document.getElementById('sidebarOverlay');

            // Cek apakah sidebar sedang tertutup (ada class translate-x-full)
            if (sidebar.classList.contains('translate-x-full')) {
                // BUKA
                sidebar.classList.remove('translate-x-full');
                overlay.classList.remove('hidden');
                setTimeout(() => {
                    overlay.classList.add('opacity-100');
                }, 10);
                document.body.style.overflow = 'hidden'; // Kunci scroll layar utama
            } else {
                // TUTUP
                sidebar.classList.add('translate-x-full');
                overlay.classList.remove('opacity-100');
                setTimeout(() => {
                    overlay.classList.add('hidden');
                }, 300);
                document.body.style.overflow = 'auto'; // Aktifkan lagi scroll
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const successTrigger = document.getElementById('success-trigger');

            if (successTrigger) {
                const pesan = successTrigger.getAttribute('data-message');

                Swal.fire({
                    title: 'Berhasil!'
                    , text: pesan
                    , icon: 'success'
                    , confirmButtonColor: '#2ac0b4'
                    , timer: 4000
                    , timerProgressBar: true
                }).then(() => {
                    // Hapus elemen dari DOM agar benar-benar bersih ⏺️
                    successTrigger.remove();
                });
            }
        });

        const footerDetails = document.querySelectorAll('footer details');
        footerDetails.forEach((detail) => {
            detail.addEventListener('toggle', () => {
                if (detail.open) {
                    footerDetails.forEach((otherDetail) => {
                        if (otherDetail !== detail && otherDetail.open) {
                            otherDetail.removeAttribute('open');
                        }
                    });
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen input dan elemen teks ⏺️
            const inputFile = document.getElementById('input-file-aduan');
            const fileNameDisplay = document.getElementById('text-nama-file');

            if (inputFile && fileNameDisplay) {
                inputFile.addEventListener('change', function() {
                    // Cek apakah ada file yang dipilih 📂
                    if (this.files && this.files.length > 0) {
                        const name = this.files[0].name;

                        // Tampilkan nama file dan ubah warna teks agar terlihat aktif 🛠️
                        fileNameDisplay.textContent = name;
                        fileNameDisplay.classList.remove('text-gray-500');
                        fileNameDisplay.classList.add('text-blue-600', 'font-bold');
                    } else {
                        // Jika batal pilih file, kembalikan ke teks semula ⏺️
                        fileNameDisplay.textContent = "Unggah foto/PDF jika ada";
                        fileNameDisplay.classList.remove('text-blue-600', 'font-bold');
                        fileNameDisplay.classList.add('text-gray-500');
                    }
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('nav');

            // Cek apakah ini halaman home (root '/')
            const isHome = window.location.pathname === '/';

            if (isHome) {

                // 1. KUNCI PERBAIKAN: Bungkus logika ke dalam satu fungsi khusus
                function checkScroll() {
                    // Jika scroll lebih dari 20px, tambahkan class 'scrolled'
                    if (window.scrollY > 20) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                }

                // 2. JALANKAN LANGSUNG: Panggil fungsi ini sedetik setelah halaman di-refresh
                // Ini yang akan membunuh bug transparan saat Anda refresh di tengah halaman!
                checkScroll();

                // 3. JALANKAN SAAT SCROLL: Tetap pantau pergerakan mouse/layar
                window.addEventListener('scroll', checkScroll);

            } else {
                // Jika bukan halaman home, navbar langsung berwarna (selalu scrolled)
                navbar.classList.add('scrolled');
                navbar.style.position = 'scrolled'; // Kembali ke sticky untuk halaman lain

            }
        });

        document.addEventListener('DOMContentLoaded', function() {

            // 1. Data Titik (Marker) Kustom bawaanmu
            var lokasiPenting = [{
                    nama: "Gelora Rajawali"
                    , deskripsi: "Gelora"
                    , gambar: "https://lh3.googleusercontent.com/gps-cs-s/AHVAwepxTn57gT7vTJ_Q3AZDIC7VK6gaqdyO6mqkRd8FRVLpWvDDqSIyvUJ5uFRaBWJyzmceyPeYqwwpdM6DTNdnYLx3YXkdmN-JtQyiCXQbSAEW8wpWEfVZC-xrhm4XAYgARmnuTGqh=w408-h306-k-no"
                    , lat: -7.9748593905406295
                    , lng: 111.45163579512406
                }
                , {
                    nama: "Balai desa"
                    , deskripsi: "Balai"
                    , gambar: "https://lh3.googleusercontent.com/gps-cs-s/AHVAwerKgSaxViDeMa3HeBdunXD3auv5HGqTjFQngjsTLf5pywhCUlPkex5KEVgPQIYoCTJf0YsesR3C0-Z9OtxRBQfMornpP8WmYl5uWaOOu4LBNAKpRPkDreqNx-vBDTjAtpHPYJgX=w408-h306-k-no"
                    , lat: -7.9741553901755555
                    , lng: 111.45198039512412
                }
            ];

            // 2. Fungsi Utama untuk Membangun Peta (Dipakai untuk Desktop & Mobile)
            function bangunPeta(idElemen) {
                var elemenPeta = document.getElementById(idElemen);

                // Cek keberadaan elemen sebelum menjalankan logika peta ⏺️
                if (!elemenPeta) return null;

                // Inisiasi peta dengan pengaturan anti-zoom bawaanmu 🛠️
                var map = L.map(idElemen, {
                    scrollWheelZoom: false
                    , smoothWheelZoom: true
                    , dragging: true
                }).setView([-7.9620, 111.4320], 15);

                // Layer Satelit
                L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                    maxZoom: 20
                    , subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                    , attribution: '© Google Maps'
                }).addTo(map);

                // Fitur interaksi: Zoom aktif hanya jika peta diklik 📂
                map.on('focus', function() {
                    map.scrollWheelZoom.enable();
                });
                map.on('blur', function() {
                    map.scrollWheelZoom.disable();
                });

                // Memasang Titik (Marker) & Popup Kustom ke peta ini
                lokasiPenting.forEach(function(lokasi) {
                    var isiPopup = `
        <div class="custom-popup-container">
            <div class="custom-popup-img">
                <img src="${lokasi.gambar}" alt="${lokasi.nama}">
            </div>
            <div class="custom-popup-text">
                <h4>${lokasi.nama}</h4>
                <p>${lokasi.deskripsi}</p>
            </div>
        </div>
        `;
                    L.marker([lokasi.lat, lokasi.lng])
                        .addTo(map)
                        .bindPopup(isiPopup);
                });

                return map;
            }

            // 3. Eksekusi Pembuatan Peta
            var mapDesktop = bangunPeta('mapDesaDesktop');
            var mapMobile = bangunPeta('mapDesaMobile');

            // 4. Memanggil GeoJSON Batas Desa (Sekali untuk Dua Peta)
            if (mapDesktop || mapMobile) {
                fetch('{{ asset("assets/geojson/batas-desa.geojson") }}')
                    .then(response => response.json())
                    .then(data => {

                        // Gaya styling batas desa dari kodemu
                        var pengaturanGaya = {
                            color: '#ffffff'
                            , weight: 2
                            , fillColor: '#2ac0b4'
                            , fillOpacity: 0.1
                        };

                        // Pasang ke Peta Desktop jika ada
                        if (mapDesktop) {
                            var layerDesktop = L.geoJSON(data, {
                                style: pengaturanGaya
                            }).addTo(mapDesktop);

                            // PERBAIKAN: Beri jeda agar kotak render sempurna
                            setTimeout(function() {
                                mapDesktop.invalidateSize(); // Hitung ulang ukuran asli
                                mapDesktop.fitBounds(layerDesktop.getBounds()); // Baru paskan batasnya
                            }, 500);
                        }

                        // Pasang ke Peta Mobile jika ada
                        if (mapMobile) {
                            var layerMobile = L.geoJSON(data, {
                                style: pengaturanGaya
                            }).addTo(mapMobile);

                            // PERBAIKAN: Beri jeda agar kotak render sempurna di HP
                            setTimeout(function() {
                                mapMobile.invalidateSize(); // Hitung ulang ukuran asli
                                mapMobile.fitBounds(layerMobile.getBounds()); // Baru paskan batasnya
                            }, 500);
                        }
                    })
                    .catch(error => console.error("Gagal memuat batas desa:", error));
            } else {
                console.log("Peta tidak dimuat karena elemen Desktop dan Mobile tidak ditemukan.");
            }


        });


        function toggleVisitor() {
            const popup = document.getElementById('visitorPopup');
            const arrow = document.getElementById('visitorArrow');

            // Toggle class 'active'
            popup.classList.toggle('active');

            // Putar panah
            if (popup.classList.contains('active')) {
                arrow.style.transform = 'rotate(180deg)';
            } else {
                arrow.style.transform = 'rotate(0deg)';
            }
        }

        function togglePengaduan() {
            const popup = document.getElementById('pengaduanPopup');
            // Buka/tutup form pengaduan
            popup.classList.toggle('active');

            // Opsional: Tutup form kunjungan kiri jika sedang terbuka
            const visitorPopup = document.getElementById('visitorPopup');
            if (visitorPopup && visitorPopup.classList.contains('active')) {
                visitorPopup.classList.remove('active');
                document.getElementById('visitorArrow').style.transform = 'rotate(0deg)';
            }
        }

    </script>
    @stack('scripts')
</body>
</html>
