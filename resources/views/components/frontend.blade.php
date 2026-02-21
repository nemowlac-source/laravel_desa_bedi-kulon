<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Resmi Desa Bedi Kulon</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
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

        /* KOTAK POPUP FORM PENGADUAN */
        .pengaduan-popup {
            position: absolute;
            bottom: calc(100% + 15px);
            /* Muncul di atas tombol */
            right: 0;
            width: 320px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            border: 1px solid #eaeaea;

            /* Disembunyikan secara default */
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
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
            border: 1px solid #7ED957;
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
            background-color: #7ED957;
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
                <li><span>Hari Ini</span> <span>238</span></li>
                <li><span>Kemarin</span> <span>238</span></li>
                <li><span>Minggu Ini</span> <span>1.485</span></li>
                <li><span>Minggu Lalu</span> <span>1.216</span></li>
                <li><span>Bulan Ini</span> <span>17.344</span></li>
                <li><span>Bulan Lalu</span> <span>13.666</span></li>
                <li class="total-row"><span>Total Kunjungan</span> <span>96.952</span></li>
            </ul>
        </div>

        <button class="visitor-btn" onclick="toggleVisitor()">
            <div class="visitor-left">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 20V6a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v14"></path>
                    <path d="M2 20h20"></path>
                    <path d="M14 12v.01"></path>
                </svg>
                <span class="visitor-count">238</span>
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
            <form action="#" method="POST">

                <div class="form-group">
                    <label>Nama <span class="text-red">*</span></label>
                    <input type="text" class="input-outline-green" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="form-group">
                    <label>Nomor Telepon/WA <span class="text-red">*</span></label>
                    <input type="text" class="input-gray" placeholder="Masukkan nomor HP/WhatsApp" required>
                </div>

                <div class="form-group">
                    <label>Kategori Pengaduan <span class="text-red">*</span></label>
                    <select class="input-gray" required>
                        <option value="" disabled selected>Pilih kategori pengaduan</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pelayanan">Pelayanan Masyarakat</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pengaduan <span class="text-red">*</span></label>
                    <textarea class="input-gray" rows="3" placeholder="Masukkan kesan, informasi, atau detail aduan Anda" required></textarea>
                </div>

                <div class="form-group">
                    <label>Lampiran</label>
                    <div class="file-upload-box">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                        Unggah foto/PDF jika ada
                    </div>
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-kirim">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 5px;">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        Kirim
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
                        <h3>Pemerintah Desa Kersik</h3>
                        <p>Jalan Langaseng Dusun Empang RT.003</p>
                        <p>Desa Kersik, Kecamatan Marang Kayu,</p>
                        <p>Kabupaten Kutai Kartanegara</p>
                        <p>Provinsi Kalimantan Timur, 75385</p>
                        <p class="kode-wilayah">Kode Wilayah: 64.02.17.2005</p>
                    </div>
                </div>
            </div>

            <div class="footer-column">
                <h4>Hubungi Kami</h4>
                <ul class="contact-list">
                    <li><i class="fas fa-phone-alt"></i> 082150208664</li>
                    <li><i class="fas fa-envelope"></i> kersik.marangkayu@kukarkab.go.id</li>
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
                    <li><a href="#">Jumadi/Kades Kersik</a></li>
                    <li><a href="#">Yayan/Ambulan Kersik</a></li>
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
            // 1. Inisiasi Peta & Layer Satelit (Kode Anda sebelumnya)
            var map = L.map('mapDesa').setView([-7.9620, 111.4320], 15);
            L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 20
                , subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            }).addTo(map);

            // 2. Memanggil GeoJSON Batas Desa (Kode Anda sebelumnya)
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

            // =======================================================
            // 3. TAMBAHKAN TITIK (MARKER) KUSTOM ANDA DI SINI
            // =======================================================

            // Contoh Data (Nantinya data ini bisa Anda ambil dari database via json)
            var lokasiPenting = [{
                    nama: "Gelora Rajawali"
                    , deskripsi: "Gelora"
                    , gambar: "https://lh3.googleusercontent.com/gps-cs-s/AHVAwepxTn57gT7vTJ_Q3AZDIC7VK6gaqdyO6mqkRd8FRVLpWvDDqSIyvUJ5uFRaBWJyzmceyPeYqwwpdM6DTNdnYLx3YXkdmN-JtQyiCXQbSAEW8wpWEfVZC-xrhm4XAYgARmnuTGqh=w408-h306-k-no", // Ganti path gambar Anda

                    lat: -7.9748593905406295
                    , lng: 111.45163579512406

                }
                , {
                    nama: "Balai desa"
                    , deskripsi: "Balai"
                    , gambar: "https://lh3.googleusercontent.com/gps-cs-s/AHVAwerKgSaxViDeMa3HeBdunXD3auv5HGqTjFQngjsTLf5pywhCUlPkex5KEVgPQIYoCTJf0YsesR3C0-Z9OtxRBQfMornpP8WmYl5uWaOOu4LBNAKpRPkDreqNx-vBDTjAtpHPYJgX=w408-h306-k-no", // Ganti path gambar Anda

                    lat: -7.9741553901755555

                    , lng: 111.45198039512412

                }
            ];

            // Looping untuk menaruh setiap titik ke dalam peta
            lokasiPenting.forEach(function(lokasi) {

                // Membuat kerangka HTML untuk isi Popup
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

                // Menambahkan Marker (Pin Biru) ke peta dan memasang Popup HTML
                L.marker([lokasi.lat, lokasi.lng])
                    .addTo(map)
                    .bindPopup(isiPopup);
            });

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
