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
    <style>
        /* Styling khusus untuk Popup Leaflet agar persis seperti gambar */
        .leaflet-popup-content-wrapper {
            padding: 0;
            /* Menghilangkan padding bawaan */
            overflow: hidden;
            border-radius: 8px;
        }

        .leaflet-popup-content {
            margin: 0;
            width: 300px !important;
            /* Lebar popup */
        }

        .custom-popup-container {
            display: flex;
            align-items: stretch;
        }

        .custom-popup-img {
            width: 100px;
            flex-shrink: 0;
        }

        .custom-popup-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .custom-popup-text {
            padding: 15px;
            flex-grow: 1;
            font-family: 'Poppins', sans-serif;
        }

        .custom-popup-text h4 {
            margin: 0 0 5px 0;
            font-size: 1.1rem;
            font-weight: 800;
            color: #111;
        }

        .custom-popup-text p {
            margin: 0;
            font-size: 0.85rem;
            color: #555;
            line-height: 1.4;
        }

        /* CONTAINER UTAMA (Membuatnya melayang di pojok kiri bawah) */
        .visitor-widget-container {
            position: fixed;
            bottom: 20px;
            /* Jarak dari bawah layar */
            left: 20px;
            /* Jarak dari kiri layar */
            z-index: 9999;
            /* Z-index sangat tinggi agar tidak tertindih elemen lain */
            font-family: 'Poppins', sans-serif;
        }

        /* TOMBOL HIJAU TERANG */
        .visitor-btn {
            background-color: #A3D9A5;
            /* Hijau pastel sesuai gambar */
            border: 2px solid #ffffff;
            /* Garis tepi putih */
            border-radius: 8px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            /* Sedikit bayangan */
            color: white;
            transition: background-color 0.3s;
        }

        .visitor-btn:hover {
            background-color: #8ECA90;
        }

        /* Layout Bagian Dalam Tombol */
        .visitor-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-right: 1px solid rgba(255, 255, 255, 0.5);
            /* Garis pemisah tipis */
            padding-right: 15px;
        }

        .visitor-count {
            font-size: 1.1rem;
            font-weight: 800;
            margin-top: 3px;
        }

        .visitor-center {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .visitor-label {
            font-size: 1rem;
            font-weight: 700;
        }

        .visitor-sub {
            font-size: 0.85rem;
            font-weight: 600;
            opacity: 0.9;
        }

        /* KOTAK POPUP GELAP (Detail Statistik) */
        .visitor-popup {
            position: absolute;
            bottom: calc(100% + 15px);
            /* Muncul tepat di atas tombol hijau */
            left: 0;
            width: 250px;
            background-color: #4B5563;
            /* Abu-abu gelap sesuai gambar */
            border: 2px solid #ffffff;
            border-radius: 8px;
            padding: 20px;
            color: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);

            /* Disembunyikan secara default */
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        /* Class saat popup aktif/terbuka */
        .visitor-popup.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .popup-title {
            font-size: 1.1rem;
            font-weight: 800;
            margin: 0 0 15px 0;
        }

        .popup-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .popup-list li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 0.9rem;
        }

        .popup-list li:last-child {
            border-bottom: none;
        }

        .total-row {
            font-weight: 800;
            margin-top: 5px;
        }

        /* CONTAINER UTAMA KANAN BAWAH */
        .right-widget-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            /* Rata kanan */
        }

        /* WADAH TOMBOL */
        .right-buttons-row {
            display: flex;
            align-items: center;
        }

        /* Tombol Pengaduan (Merah Muda/Salmon) */
        .btn-pengaduan {
            background-color: #FCA5A5;
            /* Warna salmon sesuai gambar */
            color: white;
            border: 2px solid #ffffff;
            border-radius: 30px;
            /* Bentuk kapsul */
            padding: 10px 20px;
            font-size: 1.05rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-pengaduan:hover {
            background-color: #F87171;
            transform: translateY(-2px);
            /* Sedikit efek naik saat disorot */
        }

        /* Update pada bagian styling pengaduan-popup */
        .pengaduan-popup {
            position: fixed;
            /* Ubah ke fixed agar lebih stabil posisinya 🛠️ */
            bottom: 80px;
            /* Sesuaikan jarak dari bawah */
            right: 20px;
            width: 320px;
            background-color: #ffffff;
            border-radius: 12px;
            padding: 25px 20px 20px 20px;
            /* Tambah padding atas agar label "Nama" tidak mepet ⏺️ */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 1px solid #eaeaea;
            z-index: 10000;
            /* Pastikan di atas navbar jika perlu 📂 */

            /* KUNCI PERBAIKAN: Agar tidak terpotong saat zoom 100% 🛠️ */
            max-height: calc(100vh - 120px);
            /* Batasi tinggi maksimal layar */
            overflow-y: auto;
            /* Aktifkan scroll jika konten kepanjangan */

            /* Efek transisi tetap sama */
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Tambahkan styling scrollbar agar lebih rapi (opsional) 📂 */
        .pengaduan-popup::-webkit-scrollbar {
            width: 5px;
        }

        .pengaduan-popup::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 10px;
        }


        .pengaduan-popup.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* STYLING DALAM FORM */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 5px;
        }

        .text-red {
            color: #EF4444;
            /* Bintang merah */
        }

        /* Input bergaris hijau khusus (seperti field Nama) */
        .input-outline-green {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #2ac0b4;
            border-radius: 6px;
            font-family: inherit;
            font-size: 0.9rem;
            background-color: white;
            box-sizing: border-box;
            /* Mencegah input melebar keluar form */
        }

        /* Input berlatar abu-abu (untuk field sisanya) */
        .input-gray {
            width: 100%;
            padding: 10px 12px;
            border: none;
            border-radius: 6px;
            font-family: inherit;
            font-size: 0.9rem;
            background-color: #F3F4F6;
            color: #555;
            box-sizing: border-box;
        }

        /* Kotak Upload File Palsu */
        .file-upload-box {
            width: 100%;
            padding: 10px 12px;
            background-color: #F3F4F6;
            border-radius: 6px;
            color: #888;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            cursor: pointer;
            box-sizing: border-box;
        }

        /* Tombol Kirim Kanan Bawah */
        .form-action {
            display: flex;
            justify-content: flex-end;
            /* Rata Kanan */
            margin-top: 10px;
        }

        .btn-kirim {
            background-color: #2ac0b4;
            /* Hijau khas */
            color: white;
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-weight: 800;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-kirim:hover {
            background-color: #6BCB45;
        }

    </style>
</head>



<body>
    <nav>
        <div class="nav-container">
            <div class="logo-section">
                <img src="{{ asset('assets/img/Logo Ponorogo.png') }}" alt="Logo Desa" class="logo-img" />



                <div class="logo-text">
                    <span class="nama-desa">Desa Bedi Kulon</span>
                    <span class="sub-nama">Kabupaten Ponorogo</span>
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


    <main class="">
        {{ $slot }}
    </main>

    <div class="visitor-widget-container">

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

        <span class="visitor-count">{{ number_format($visitor_stats['hari_ini']) }}</span>


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
    <div class="right-widget-container">

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


    <footer class="footer-desa">
        <div class="footer-container">
            <div class="footer-column">
                <div class="footer-logo-section">
                    <img src="assets/img/Logo Ponorogo.png" alt="Logo Kukar" class="footer-logo" />
                    <div class="footer-identity">
                        <h3>Pemerintah Desa Bedikulon</h3>
                        <p>Jalan Jl. Ahmad Yani 1</p>
                        <p>Desa Bedikulon, Kecamatan Bungkal,</p>
                        <p>Kabupaten Ponorogo</p>
                        <p>Provinsi Jawa Timur, 63462</p>
                        <p class="kode-wilayah">Kode Wilayah: 35.02.03.2019</p>
                    </div>
                </div>
            </div>

            <div class="footer-column">
                <h4>Hubungi Kami</h4>
                <ul class="contact-list">
                    <li><i class="fas fa-phone-alt"></i> 082150208664</li>
                    <li><i class="fas fa-envelope"></i> bedikulon@gmail.com</li>

                </ul>
                {{-- <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div> --}}
            </div>

            <div class="footer-column">
                <h4>Nomor Telepon Penting</h4>
                <ul class="emergency-list">
                    <li><a href="#">Kades </a></li>
                    <li><a href="#">Ambulan </a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Jelajahi</h4>
                <ul class="explore-list">
                    <li><a href="#">Website Kemendesa</a></li>
                    <li><a href="#">Website Kemendagri</a></li>
                    <li><a href="#">Website Kabupaten Kutai Kartanegara</a></li>
                    <li><a href="#">Cek DPT Online</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom" style="align-items: center;display:flex;justify-content:center;">
            <p class="copyright">&copy; 2026 Powered by PT Digital Desa Indonesia</p>
        </div>
    </footer>
    @if(session('success_pengaduan'))
    <div id="success-trigger" data-message="{{ session('success_pengaduan') }}" style="display: none;"></div>

    {{-- Hapus sesi segera setelah dirender agar tidak muncul lagi saat refresh 🛠️ --}}
    @php session()->forget('success_pengaduan'); @endphp
    @endif

    <script>
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

    </script>

    <script>
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
                navbar.style.position = 'sticky'; // Kembali ke sticky untuk halaman lain
            }
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mapElement = document.getElementById('mapDesa');

            // 1. Cek keberadaan elemen sebelum menjalankan logika peta ⏺️
            if (mapElement) {
                // Inisiasi peta
                var map = L.map('mapDesa', {
                    scrollWheelZoom: false, // Anti-zoom saat scroll halaman 🛠️
                    smoothWheelZoom: true
                    , dragging: true
                }).setView([-7.9620, 111.4320], 15);

                // Layer Satelit
                L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                    maxZoom: 20
                    , subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                }).addTo(map);

                // Fitur interaksi: Zoom aktif hanya jika peta diklik 📂
                map.on('focus', function() {
                    map.scrollWheelZoom.enable();
                });
                map.on('blur', function() {
                    map.scrollWheelZoom.disable();
                });

                // 2. Memanggil GeoJSON Batas Desa
                fetch('{{ asset("assets/geojson/batas-desa.geojson") }}')
                    .then(response => response.json())
                    .then(data => {
                        var batasDesaLayer = L.geoJSON(data, {
                            style: {
                                color: '#ffffff'
                                , weight: 2
                                , fillColor: '#2ac0b4'
                                , fillOpacity: 0.1
                            }
                        }).addTo(map);
                        map.fitBounds(batasDesaLayer.getBounds());
                    });

                // 3. Titik (Marker) Kustom
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
            } else {
                // Log ini hanya muncul di Console jika halaman tidak punya peta 📂
                console.log("Peta tidak dimuat karena elemen #mapDesa tidak ditemukan.");
            }
        });

    </script>
    <script>
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
