<x-frontend>
    <style>
        /* Container PPID */
        .container-ppid {
            max-width: 1100px;
            margin: 0 auto;
            padding: 60px 20px;
            font-family: 'Poppins', sans-serif;
        }

        .title-green-bold {
            color: #72c02c;
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        /* Intro Section */
        .ppid-intro {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            margin-bottom: 60px;
        }

        .ppid-text {
            flex: 1;
        }

        .ppid-text p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .btn-dasar-hukum {
            display: inline-block;
            padding: 10px 20px;
            border: 1.5px solid #72c02c;
            color: #72c02c;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: 0.3s;
        }

        .ppid-categories {
            flex: 1;
            display: flex;
            gap: 15px;
        }

        .cat-card {
            background: #fff;
            padding: 20px 10px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            flex: 1;
        }

        .cat-card img {
            width: 50px;
            margin-bottom: 10px;
        }

        .cat-card span {
            font-size: 0.7rem;
            font-weight: 700;
            color: #888;
            display: block;
        }

        /* Document List */
        .update-meta {
            color: #888;
            font-size: 0.9rem;
            margin-bottom: 30px;
        }

        .doc-item {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .doc-info h3 {
            font-size: 1.05rem;
            font-weight: 800;
            color: #333;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .doc-info p {
            font-size: 0.85rem;
            color: #666;
            margin: 4px 0;
        }

        .doc-actions {
            display: flex;
            flex-direction: column;
            gap: 8px;
            min-width: 180px;
        }

        .btn-action {
            padding: 8px 15px;
            border: 1px solid #d0d0d0;
            border-radius: 5px;
            text-decoration: none;
            color: #444;
            font-size: 0.85rem;
            font-weight: 600;
            text-align: center;
            transition: 0.3s;
        }

        .btn-action:hover {
            background: #f9f9f9;
            border-color: #72c02c;
            color: #72c02c;
        }

        /* Request Box */
        .ppid-request-box {
            margin-top: 50px;
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
        }

        .ppid-request-box h3 {
            font-size: 1.4rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .btn-request {
            display: inline-block;
            padding: 12px 30px;
            border: 2px solid #72c02c;
            color: #72c02c;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 700;
        }

        /* Responsive */
        @media (max-width: 850px) {

            .ppid-intro,
            .doc-item {
                flex-direction: column;
                text-align: center;
            }

            .doc-actions {
                margin-top: 20px;
                width: 100%;
            }
        }

    </style>
    <section class="ppid-section">
        <div class="container-ppid">
            <div class="ppid-intro">
                <div class="ppid-text">
                    <h1 class="title-green-bold">PPID</h1>
                    <p>Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.</p>
                    <a href="#" class="btn-dasar-hukum">Dasar Hukum PPID</a>
                </div>

                <div class="ppid-categories">
                    <a href="{{ route('ppid.index', ['kategori' => 'Berkala']) }}" class="cat-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="Berkala">
                        <span>INFORMASI SECARA BERKALA</span>
                    </a>
                    <a href="{{ route('ppid.index', ['kategori' => 'Serta Merta']) }}" class="cat-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/10473/10473631.png" alt="Serta Merta">
                        <span>INFORMASI SERTA MERTA</span>
                    </a>
                    <a href="{{ route('ppid.index', ['kategori' => 'Setiap Saat']) }}" class="cat-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/9511/9511743.png" alt="Setiap Saat">
                        <span>INFORMASI SETIAP SAAT</span>
                    </a>
                </div>
            </div>

            <div class="ppid-latest">
                <h2 class="title-green-bold">
                    @if(request('kategori'))
                    INFORMASI {{ strtoupper(request('kategori')) }}
                    @else
                    INFORMASI PUBLIK TERBARU
                    @endif
                </h2>

                <p class="update-meta">Update terakhir {{ $last_update_text }}</p>

                <div class="document-list">
                    @forelse($documents as $doc)
                    <div class="doc-item">
                        <div class="doc-info">
                            <h3>{{ $doc->judul }}</h3>

                            <p class="doc-cat">
                                <i class="icon-file"></i>
                                {{ $doc->kategori }}
                            </p>

                            <p class="doc-date">
                                <i class="icon-clock"></i>
                                {{ \Carbon\Carbon::parse($doc->tanggal_upload)->translatedFormat('l, d F Y') }}
                            </p>
                        </div>

                        <div class="doc-actions">
                            <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="btn-action">
                                <i class="icon-view"></i> Lihat Berkas
                            </a>

                            <a href="{{ route('ppid.download', $doc->id) }}" class="btn-action">
                                <i class="icon-download"></i> Unduh ({{ $doc->jumlah_unduh }}x)
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-10">
                        <p class="text-gray-500">Belum ada dokumen yang tersedia untuk kategori ini.</p>
                        @if(request('kategori'))
                        <a href="{{ route('ppid.index') }}" class="text-blue-600 hover:underline">Tampilkan Semua</a>
                        @endif
                    </div>
                    @endforelse
                </div>

                <div class="mt-8">
                    {{ $documents->links() }}
                </div>
            </div>

            <div class="ppid-request-box">
                <h3>Ingin mengajukan permohonan informasi?</h3>
                <a href="#" class="btn-request">Ajukan Permohonan Informasi</a>
            </div>
        </div>
    </section>

</x-frontend>
