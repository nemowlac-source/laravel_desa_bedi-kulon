<x-frontend>
    <style>
        /* --- WADAH UTAMA --- */
        .news-section-baru {
            padding: 80px 20px;
            background-color: #f4f6f8;
            font-family: 'Poppins', sans-serif;
        }

        .news-container-baru {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- HEADER RATA KIRI --- */
        .news-header-baru {
            margin-bottom: 50px;
            text-align: left;
        }

        .news-title-baru {
            font-size: 2.8rem;
            font-weight: 800;
            color: #7ED957;
            margin: 0 0 10px 0;
            letter-spacing: 0.5px;
        }

        .news-subtitle-baru {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.6;
            margin: 0;
            max-width: 800px;
        }

        /* --- GRID KARTU --- */
        .news-grid-baru {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 35px;
        }

        /* Desain Kartu Minimalis Mirip Inspirasi */
        .news-card-baru {
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            border: none;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.08), 0 4px 10px -3px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .news-card-baru:hover {
            transform: translateY(-7px);
            box-shadow: 0 20px 40px -5px rgba(0, 0, 0, 0.12), 0 8px 15px -5px rgba(0, 0, 0, 0.08);
        }

        /* Area Gambar */
        .news-thumb-baru {
            width: 100%;
            height: 230px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .news-thumb-baru img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .news-card-baru:hover .news-thumb-baru img {
            transform: scale(1.08);
        }

        /* Area Teks di Dalam Kartu */
        .news-content-baru {
            padding: 25px 28px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .news-card-title-baru {
            font-size: 1.2rem;
            font-weight: 800;
            color: #555555;
            margin: 0 0 12px 0;
            line-height: 1.4;
            text-transform: uppercase;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-excerpt-baru {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.6;
            margin: 0 0 20px 0;
            /* Jarak bawah sebelum meta info */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* === TAMBAHAN BARU: META INFO (Penulis, Tanggal, Views) === */
        .news-meta-baru {
            margin-top: auto;
            /* Mendorong elemen ini ke paling bawah kartu */
            padding-top: 15px;
            border-top: 1px solid #f0f0f0;
            /* Garis tipis pemisah */
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 15px;
            font-size: 0.85rem;
            color: #888;
        }

        .meta-item-baru {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Membuat icon view (Dilihat) terdorong ke paling kanan */
        .meta-views-baru {
            margin-left: auto;
        }

        /* --- PAGINASI --- */
        .pagination-wrapper {
            margin-top: 60px;
            display: flex;
            justify-content: center;
        }

        /* Area Teks di Dalam Kartu */
        .news-content-baru {
            padding: 25px 28px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            /* SANGAT PENTING: Agar badge hijau bisa menempel di pojok */
        }

        /* ... (biarkan CSS judul dan excerpt seperti sebelumnya) ... */

        /* === UPDATE: META INFO (Penulis & Views Bertumpuk) === */
        .news-meta-baru {
            margin-top: auto;
            /* Mendorong elemen ini ke bawah */
            display: flex;
            flex-direction: column;
            /* Menyusun ke bawah (vertikal) */
            gap: 8px;
            /* Jarak antar baris ikon */
            font-size: 0.9rem;
            color: #4b5563;
            /* Warna abu-abu kebiruan mirip contoh */
        }

        .meta-item-baru {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .meta-item-baru svg {
            stroke: #111;
            /* Warna ikon hitam tegas */
            width: 18px;
            height: 18px;
        }

        /* === UPDATE: BADGE TANGGAL HIJAU DI POJOK KANAN BAWAH === */
        .meta-date-badge {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #8ade54;
            /* Warna hijau terang presisi dengan gambar */
            color: white;
            padding: 12px 18px;
            border-top-left-radius: 16px;
            /* Lengkungan khusus di pojok kiri atas */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            line-height: 1.1;
        }

        .meta-date-badge .date-day {
            font-size: 1.15rem;
            font-weight: 800;
        }

        .meta-date-badge .date-year {
            font-size: 0.95rem;
            font-weight: 700;
            opacity: 0.95;
        }

        /* === UPDATE: META INFO (Rata Kiri & Tanpa Garis) === */
        .news-meta-baru {
            margin-top: auto;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* SANGAT PENTING: Memaksa teks rata kiri sempurna */
            gap: 8px;
            font-size: 0.9rem;
            color: #4b5563;

            border-top: none;
            /* SANGAT PENTING: Menghapus garis melintang abu-abu */
            padding-top: 15px;
            /* Sisa jarak dari teks atasnya */
        }

        .meta-item-baru {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .meta-item-baru svg {
            stroke: #333;
            /* Warna ikon hitam tebal */
            width: 17px;
            height: 17px;
        }

        /* === UPDATE: BADGE TANGGAL (Warna Gradasi Mirip Referensi) === */
        .meta-date-badge {
            position: absolute;
            bottom: 0;
            right: 0;
            /* Menggunakan gradasi hijau halus persis seperti gambar contoh */
            background: linear-gradient(135deg, #a0e567 0%, #75d440 100%);
            color: white;
            padding: 10px 20px;
            /* Diperlebar sedikit agar lebih proporsional */
            border-top-left-radius: 18px;
            /* Lengkungan sudut ditarik lebih dalam */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            line-height: 1.2;
        }

        .meta-date-badge .date-day {
            font-size: 1.15rem;
            font-weight: 800;
        }

        .meta-date-badge .date-year {
            font-size: 1.05rem;
            font-weight: 800;
        }



        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .news-grid-baru {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .news-grid-baru {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .news-title-baru {
                font-size: 2.2rem;
            }
        }

    </style>
    <section class="news-section-baru">
        <div class="news-container-baru">

            <div class="news-header-baru">
                <h1 class="news-title-baru">Berita Desa</h1>
                <p class="news-subtitle-baru">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Bedi Kulon</p>
            </div>

            <div class="news-grid-baru">

                @forelse($beritas as $item)
                <div class="news-card-baru">
                    <a href="{{ route('frontend.berita.detail', $item->id) }}" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">

                        <div class="news-thumb-baru">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" onerror="this.src='https://placehold.co/600x400?text=Berita'">
                        </div>

                        <div class="news-content-baru">
                            <h3 class="news-card-title-baru">
                                {{ $item->judul }}
                            </h3>
                            <p class="news-excerpt-baru">
                                {{ Str::limit(strip_tags($item->isi), 100) }}
                            </p>

                            <div class="news-meta-baru">
                                <span class="meta-item-baru" title="Penulis">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    {{ $item->penulis ?? 'Administrator' }}
                                </span>

                                <span class="meta-item-baru" title="Jumlah Dilihat">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    Dilihat {{ $item->views ?? 0 }} kali
                                </span>
                            </div>

                            <div class="meta-date-badge">
                                <span class="date-day">{{ $item->created_at->format('d M') }}</span>
                                <span class="date-year">{{ $item->created_at->format('Y') }}</span>
                            </div>
                        </div>

                    </a>
                </div>

                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px;">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 15px;">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <h3 style="color: #888;">Belum ada berita yang diterbitkan.</h3>
                </div>
                @endforelse

            </div>

            <div class="pagination-wrapper">
                {{ $beritas->links() }}
            </div>

        </div>
    </section>


</x-frontend>
