<x-frontend>
    <style>
        /* --- RESET & SECTION UTAMA --- */
        .berita-detail-section {
            background-color: #f9fafb;
            /* Latar abu-abu sangat terang agar konten menonjol */
            padding: 50px 20px;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .berita-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2.3fr 1fr;
            /* Kolom kiri lebih besar dari kanan */
            gap: 40px;
            align-items: start;
            /* Sidebar tidak ikut memanjang ke bawah jika artikel panjang */
        }

        /* --- KOLOM KIRI (ARTIKEL) --- */
        .berita-main-content {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            /* Bayangan super tipis */
        }

        /* Breadcrumb */
        .berita-breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: #6b7280;
            margin-bottom: 25px;
            font-weight: 500;
        }

        .berita-breadcrumb a {
            color: #111;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: color 0.3s;
        }

        .berita-breadcrumb a:hover {
            color: #2ac0b4;
        }

        /* Warna hijau saat disorot */
        .berita-breadcrumb .separator {
            color: #d1d5db;
        }

        /* Judul Artikel */
        .berita-title {
            font-size: 2.2rem;
            font-weight: 800;
            line-height: 1.3;
            margin: 0 0 20px 0;
            color: #111;
        }

        /* Meta Info (Tanggal, Penulis) */
        .berita-meta-info {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e5e7eb;
            /* Garis bawah batas */
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.9rem;
            color: #555;
        }

        .meta-views {
            margin-left: auto;
            /* Mendorong info views ke ujung kanan */
        }

        /* Gambar Artikel Utama */
        .berita-featured-image {
            width: 100%;
            margin-bottom: 30px;
        }

        .berita-featured-image img {
            width: 100%;
            height: auto;
            max-height: 500px;
            /* Batas tinggi maksimal gambar */
            object-fit: cover;
            border-radius: 8px;
        }

        /* Teks Artikel (Body) */
        .berita-body-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #4b5563;
        }

        .berita-body-text p {
            margin-bottom: 20px;
        }

        /* --- KOLOM KANAN (SIDEBAR) --- */
        .berita-sidebar {
            position: sticky;
            /* Membuat sidebar mengikuti saat discroll ke bawah */
            top: 40px;
        }

        .sidebar-widget {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            border: 1px solid #f3f4f6;
        }

        .sidebar-widget-title {
            font-size: 1.2rem;
            font-weight: 800;
            margin: 0 0 20px 0;
            padding-bottom: 15px;
            border-bottom: 2px solid #2ac0b4;
            /* Garis aksen hijau */
            color: #111;
        }

        /* List Berita Terbaru */
        .latest-news-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .latest-news-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s;
        }

        .latest-news-item:hover {
            transform: translateX(5px);
            /* Efek geser kanan saat kursor menempel */
        }

        .latest-news-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 6px;
            flex-shrink: 0;
        }

        .latest-news-details {
            display: flex;
            flex-direction: column;
        }

        .latest-news-title {
            font-size: 0.95rem;
            font-weight: 700;
            line-height: 1.4;
            margin: 0 0 8px 0;
            color: #333;
        }

        .latest-news-item:hover .latest-news-title {
            color: #2ac0b4;
        }

        .latest-news-meta {
            display: flex;
            flex-direction: column;
            font-size: 0.8rem;
            color: #888;
        }

        .latest-news-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* --- RESPONSIVE LAYOUT UNTUK HP --- */
        @media (max-width: 992px) {
            .berita-container {
                grid-template-columns: 1fr;
                /* Mematahkan jadi 1 kolom, sidebar turun ke bawah */
            }

            .meta-views {
                margin-left: 0;
                /* Kembalikan margin kiri di mode HP */
            }
        }

    </style>
    <section class="berita-detail-section">
        <div class="berita-container">

            <div class="berita-main-content">

                <div class="berita-breadcrumb">
                    <a href="/">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </a>
                    <span class="separator">/</span>
                    <a href="{{ route('berita.index') }}">Berita Desa Tamang</a>
                </div>

                <h1 class="berita-title">{{ $berita->judul ?? 'Judul Artikel Akan Muncul Di Sini' }}</h1>

                <div class="berita-meta-info">
                    <span class="meta-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        {{ \Carbon\Carbon::parse($berita->created_at ?? now())->isoFormat('D MMMM Y') }}
                    </span>

                    <span class="meta-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Ditulis oleh {{ $berita->penulis ?? 'Administrator' }}
                    </span>

                    <span class="meta-item meta-views">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        Dilihat {{ $berita->views ?? 0 }} kali
                    </span>
                </div>

                <div class="berita-featured-image">
                    <img src="{{ asset('storage/' . ($berita->gambar ?? '')) }}" alt="{{ $berita->judul ?? 'Gambar Berita' }}" onerror="this.src='https://placehold.co/800x400?text=Gambar+Berita'">
                </div>

                <div class="berita-body-text">
                    {!! $berita->isi ?? '<p>Isi detail dari artikel berita desa akan ditampilkan di sini. Kades atau admin desa bisa menuliskan rincian kegiatan, laporan, atau pengumuman panjang di bagian ini.</p>' !!}
                </div>

            </div>

            <aside class="berita-sidebar">
                <div class="sidebar-widget">
                    <h3 class="sidebar-widget-title">Berita Terbaru</h3>

                    <div class="latest-news-list">
                        @forelse($berita_terbaru ?? [] as $terbaru)
                        <a href="{{ route('frontend.berita.detail', $terbaru->id) }}" class="latest-news-item">
                            <img src="{{ asset('storage/' . $terbaru->gambar) }}" class="latest-news-img" alt="{{ $terbaru->judul }}" onerror="this.src='https://placehold.co/100x100?text=News'">

                            <div class="latest-news-details">
                                <h4 class="latest-news-title">{{ Str::limit($terbaru->judul, 45) }}</h4>

                                <div class="latest-news-meta">
                                    <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg> {{ \Carbon\Carbon::parse($terbaru->created_at)->isoFormat('D MMMM Y') }}</span>

                                    <span style="margin-top: 2px;"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> Dilihat {{ $terbaru->views ?? 0 }} kali</span>
                                </div>
                            </div>
                        </a>
                        @empty
                        <p style="color: #888; font-size: 0.9rem;">Belum ada berita terbaru.</p>
                        @endforelse
                    </div>

                </div>
            </aside>

        </div>
    </section>

</x-frontend>
