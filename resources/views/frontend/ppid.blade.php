<x-frontend>
    <style>
        /* --- WADAH UTAMA --- */
        .ppid-section-baru {
            padding: 80px 20px;
            background-color: #fcfcfc;
            /* Warna latar sangat terang/bersih */
            font-family: 'Poppins', sans-serif;
        }

        .ppid-container-baru {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- BAGIAN ATAS (INTRO & KATEGORI BERDAMPINGAN) --- */
        .ppid-top-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
            margin-bottom: 80px;
        }

        /* Kiri: Teks Intro */
        .ppid-intro-text {
            flex: 1;
            max-width: 500px;
        }

        .ppid-title-main {
            font-size: 3rem;
            font-weight: 800;
            color: #7ED957;
            /* Hijau terang */
            margin: 0 0 20px 0;
            letter-spacing: 1px;
        }

        .ppid-desc {
            font-size: 1.1rem;
            color: #111;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .btn-dasar-hukum {
            display: inline-block;
            padding: 12px 25px;
            border: 1px solid #7ED957;
            border-radius: 6px;
            color: #111;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-dasar-hukum:hover {
            background-color: #7ED957;
            color: white;
        }

        /* Kanan: 3 Kotak Kategori */
        .ppid-categories-grid {
            display: flex;
            gap: 20px;
        }

        .ppid-cat-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 15px;
            text-align: center;
            width: 170px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
            border: 1px solid #f3f4f6;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .ppid-cat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .ppid-cat-card img {
            width: 70px;
            height: 70px;
            object-fit: contain;
            margin-bottom: 20px;
        }

        .ppid-cat-card span {
            font-size: 0.85rem;
            font-weight: 700;
            color: #666;
            line-height: 1.4;
        }

        /* --- BAGIAN BAWAH (DAFTAR DOKUMEN) --- */
        .ppid-latest-section {
            margin-bottom: 60px;
        }

        .ppid-title-sub {
            font-size: 2.2rem;
            font-weight: 800;
            color: #7ED957;
            margin: 0 0 5px 0;
            text-transform: uppercase;
        }

        .update-meta {
            font-size: 1.05rem;
            color: #333;
            font-weight: 500;
            margin-bottom: 30px;
        }

        /* Kartu Dokumen Memanjang */
        .doc-item-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 25px 30px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
        }

        .doc-info {
            flex: 1;
            padding-right: 30px;
        }

        .doc-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: #111;
            margin: 0 0 15px 0;
            text-transform: uppercase;
        }

        .doc-meta-row {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.95rem;
            color: #111;
            margin-bottom: 8px;
        }

        .doc-meta-row svg {
            width: 18px;
            height: 18px;
            stroke: #333;
        }

        /* Area Tombol Kanan (Tersusun Atas Bawah) */
        .doc-actions-col {
            display: flex;
            flex-direction: column;
            gap: 12px;
            min-width: 200px;
            /* Lebar seragam untuk tombol */
        }

        .btn-doc-action {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 15px;
            background-color: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            color: #111;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.2s;
            width: 100%;
        }

        .btn-doc-action:hover {
            background-color: #f9fafb;
            border-color: #9ca3af;
        }

        /* --- REQUEST BOX --- */
        .ppid-request-box {
            text-align: center;
            margin-top: 80px;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        }

        .ppid-request-box h3 {
            font-size: 1.5rem;
            font-weight: 800;
            color: #111;
            margin: 0 0 25px 0;
        }

        .btn-request {
            display: inline-block;
            padding: 14px 30px;
            border: 2px solid #7ED957;
            border-radius: 6px;
            color: #4CAF50;
            /* Hijau teks */
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-request:hover {
            background-color: #7ED957;
            color: #ffffff;
        }

        /* --- RESPONSIVE UNTUK HP / TABLET --- */
        @media (max-width: 992px) {
            .ppid-top-row {
                flex-direction: column;
                text-align: center;
            }

            .ppid-intro-text {
                max-width: 100%;
            }

            .ppid-categories-grid {
                flex-wrap: wrap;
                justify-content: center;
            }

            .doc-item-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .doc-info {
                padding-right: 0;
            }

            .doc-actions-col {
                width: 100%;
            }
        }

    </style>

    <section class="ppid-section-baru">
        <div class="ppid-container-baru">

            <div class="ppid-top-row">

                <div class="ppid-intro-text">
                    <h1 class="ppid-title-main">PPID</h1>
                    <p class="ppid-desc">Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.</p>
                    <a href="#" class="btn-dasar-hukum">Dasar Hukum PPID</a>
                </div>

                <div class="ppid-categories-grid">
                    <a href="{{ route('frontend.ppid', ['kategori' => 'Berkala']) }}" class="ppid-cat-card">

                        <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="Berkala">
                        <span>INFORMASI SECARA BERKALA</span>
                    </a>
                    <a href="{{ route('frontend.ppid', ['kategori' => 'Serta Merta']) }}" class="ppid-cat-card">

                        <img src="https://cdn-icons-png.flaticon.com/512/10473/10473631.png" alt="Serta Merta">
                        <span>INFORMASI SERTA MERTA</span>
                    </a>
                    <a href="{{ route('frontend.ppid', ['kategori' => 'Setiap Saat']) }}" class="ppid-cat-card">

                        <img src="https://cdn-icons-png.flaticon.com/512/9511/9511743.png" alt="Setiap Saat">
                        <span>INFORMASI SETIAP SAAT</span>
                    </a>
                </div>

            </div>

            <div class="ppid-latest-section">

                <h2 class="ppid-title-sub">
                    @if(request('kategori'))
                    INFORMASI {{ strtoupper(request('kategori')) }}
                    @else
                    INFORMASI PUBLIK TERBARU
                    @endif
                </h2>
                <p class="update-meta">Update terakhir {{ $last_update_text ?? '1 minggu yang lalu' }}</p>

                <div class="document-list">
                    @forelse($documents as $doc)
                    <div class="doc-item-card">

                        <div class="doc-info">
                            <h3 class="doc-title">{{ $doc->judul }}</h3>

                            <div class="doc-meta-row">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                {{ $doc->kategori }}
                            </div>

                            <div class="doc-meta-row">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                {{ \Carbon\Carbon::parse($doc->tanggal_upload)->translatedFormat('l, d F Y') }}
                            </div>
                        </div>

                        <div class="doc-actions-col">
                            <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="btn-doc-action">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <path d="M9 15h6"></path>
                                    <path d="M9 11h6"></path>
                                </svg>
                                Lihat Berkas
                            </a>

                            <a href="{{ route('ppid.download', $doc->id) }}" class="btn-doc-action">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                                Unduh ({{ $doc->jumlah_unduh }}x)
                            </a>
                        </div>

                    </div>
                    @empty
                    <div style="text-align: center; padding: 40px 0;">
                        <p style="color: #888;">Belum ada dokumen yang tersedia untuk kategori ini.</p>
                        @if(request('kategori'))
                        <a href="{{ route('ppid.index') }}" style="color: #7ED957; font-weight: bold; text-decoration: none;">Tampilkan Semua</a>
                        @endif
                    </div>
                    @endforelse
                </div>

                <div style="margin-top: 40px; display: flex; justify-content: center;">
                    {{ $documents->links() }}
                </div>

            </div>

            <div class="ppid-request-box">
                <h3>Ingin mengajukan permohonan informasi?</h3>
                <a href="{{ route('frontend.ppid.permohonan') }}" class="btn-request">Ajukan Permohonan Informasi</a>
            </div>

        </div>
    </section>
</x-frontend>
