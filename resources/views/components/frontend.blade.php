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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('styles')

</head>


<body>
    <nav>
        <div class="nav-container">
            <div class="logo-section">
                <img src="assets/img/Logo Ponorogo.png" alt="Logo Desa" class="logo-img" />
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

    <main class="mt-16">
        {{ $slot }}
    </main>

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
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
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

        <div class="footer-bottom">
            <div class="visitor-card">
                <div class="visitor-icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="visitor-info">
                    <span class="v-label">Kunjungan</span>
                    <span class="v-count">103 Hari Ini</span>
                </div>
                <i class="fas fa-chevron-down v-arrow"></i>
            </div>

            <p class="copyright">&copy; 2026 Powered by PT Digital Desa Indonesia</p>

            <div class="action-buttons">
                <button class="btn-disability"><i class="fas fa-wheelchair"></i></button>
                <button class="btn-complaint"><i class="fas fa-headset"></i> Pengaduan</button>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>
