<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Resmi Desa Bedi Kulon</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* RESET CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', sans-serif;
            overflow-x: hidden;
            background-color: #f4f4f4;
            /* Warna background body agar scroll terlihat */
            height: 200vh;
            /* Hanya untuk simulasi agar bisa di-scroll */

        }

        /* --- NAVBAR STYLE DASAR --- */
        nav {
            background-color: #2ac0b4;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            /* BERUBAH: Membuat header melayang saat scroll */
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 8px 20px;
        }

        .nav-container {
            max-width: 2080px;
            margin: 0 auto;
            display: flex;
            /* Logo kiri, menu kanan */
            justify-content: space-between;
            align-items: center;
        }

        /* --- LOGO AREA --- */
        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo-img {
            height: 65px;
            width: auto;
            object-fit: contain;
            justify-content: left;
            filter: drop-shadow(0 2px 2px rgba(0, 0, 0, 0.2));
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            color: white;
            line-height: 1.1;
        }

        .nama-desa {
            font-weight: 800;
            font-size: 1.4rem;
            text-transform: capitalize;
        }

        .sub-nama {
            font-size: 0.9rem;
            font-weight: 400;
            opacity: 0.9;
        }

        /* --- MENU NAVIGATION (DESKTOP) --- */
        .nav-links {
            display: flex;
            list-style: none;
            gap: 12px;
            align-items: center;
        }

        .nav-links li a {
            text-decoration: none;
            color: white;
            font-weight: 700;
            font-size: 0.95rem;
            position: relative;
            padding: 5px 4px;
            transition: all 0.3s ease;
        }

        .nav-links li a:hover {
            opacity: 0.8;
        }

        .nav-links li a.active::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background-color: #ffffff;
            bottom: -5px;
            left: 0;
            border-radius: 4px;
        }

        /* --- MOBILE VIEW --- */
        .hamburger {
            display: none;
            cursor: pointer;
            z-index: 1001;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            transition: all 0.3s ease-in-out;
            background-color: white;
            border-radius: 3px;
        }

        .close-menu {
            display: none;
        }

        @media (max-width: 968px) {
            .hamburger {
                display: block;
            }

            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 75%;
                height: 100vh;
                background-color: #ffffff;
                flex-direction: column;
                align-items: flex-start;
                padding: 100px 40px;
                gap: 0;
                transition: 0.4s ease-in-out;
                z-index: 2000;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            }

            .nav-links.mobile-open {
                right: 0;
            }

            .nav-links li {
                width: 100%;
                margin-bottom: 20px;
            }

            .nav-links li a {
                color: #388E3C !important;
                font-size: 1.1rem;
            }

            .nav-links li a.active::after {
                background-color: #388E3C;
            }

            .close-menu {
                display: block;
                position: absolute;
                top: 25px;
                right: 25px;
                font-size: 2.2rem;
                color: #388E3C;
                cursor: pointer;
            }

            .menu-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                display: none;
                z-index: 1500;
            }

            .menu-overlay.active {
                display: block;
            }
        }

    </style>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const hamburger = document.getElementById("hamburger-menu");
            const navMenu = document.getElementById("nav-menu");
            const closeBtn = document.getElementById("close-menu");
            const overlay = document.getElementById("menu-overlay");
            const navLinks = document.querySelectorAll('.nav-links a');

            // 1. Logic Active State
            const currentLocation = window.location.pathname;
            const pageName = currentLocation.substring(currentLocation.lastIndexOf("/") + 1);

            navLinks.forEach(link => {
                const linkHref = link.getAttribute('href');
                if (linkHref === pageName || (pageName === '' && linkHref === 'index.php')) {
                    link.classList.add('active');
                }
            });

            // 2. Logic Toggle Menu Mobile
            const openMenu = () => {
                navMenu.classList.add("mobile-open");
                overlay.classList.add("active");
                document.body.style.overflow = "hidden";
            };

            const closeMenu = () => {
                navMenu.classList.remove("mobile-open");
                overlay.classList.remove("active");
                document.body.style.overflow = "auto";
            };

            hamburger.addEventListener("click", openMenu);
            closeBtn.addEventListener("click", closeMenu);
            overlay.addEventListener("click", closeMenu);

            navLinks.forEach(link => {
                link.addEventListener("click", closeMenu);
            });
        });

    </script>
</body>
<footer class="footer-desa">
    <style>
        /* Styling Footer Desa */
        .footer-desa {
            background-color: #388E3C;
            /* Hijau sesuai gambar */
            color: #ffffff;
            padding: 50px 0 20px 0;
            font-family: 'Poppins', sans-serif;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            /* 4 Kolom */
            gap: 30px;
            padding: 0 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 40px;
        }

        .footer-logo {
            width: 80px;
            height: auto;
            margin-bottom: 15px;
        }

        .footer-identity h3 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .footer-identity p {
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 2px;
        }

        .kode-wilayah {
            font-weight: 700;
            margin-top: 10px;
        }

        /* Kolom Headers */
        .footer-column h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
        }

        /* Lists */
        .contact-list,
        .emergency-list,
        .explore-list {
            list-style: none;
            padding: 0;
        }

        .contact-list li,
        .emergency-list li,
        .explore-list li {
            font-size: 0.9rem;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .emergency-list li a,
        .explore-list li a {
            color: white;
            text-decoration: underline;
        }

        /* Social Icons */
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            color: white;
            font-size: 1.2rem;
        }

        /* Footer Bottom */
        .footer-bottom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Visitor Card Sesuai Gambar */
        .visitor-card {
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 8px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 180px;
        }

        .v-count {
            display: block;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .v-label {
            font-size: 0.8rem;
            display: block;
        }

        /* Buttons */
        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-disability {
            background-color: #283593;
            color: white;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            font-size: 1.2rem;
        }

        .btn-complaint {
            background-color: #D39E82;
            /* Warna cokelat muda sesuai gambar */
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 10px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

    </style>
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

</html>
