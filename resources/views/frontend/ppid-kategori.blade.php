<x-frontend>
    <style>
        /* --- WADAH UTAMA --- */
        .ppid-detail-section {
            padding: 80px 20px;
            background-color: #f8fafc;
            /* Latar abu-abu sangat muda */
            font-family: 'Poppins', sans-serif;
            min-height: 70vh;
        }

        .ppid-detail-container {
            max-width: 1000px;
            /* Dibuat sedikit lebih ramping agar tabel rapi */
            margin: 0 auto;
        }

        /* --- HEADER --- */
        .ppid-detail-header {
            margin-bottom: 40px;
        }

        .ppid-detail-title {
            font-size: 2.8rem;
            font-weight: 800;
            color: #7ED957;
            margin: 0 0 10px 0;
        }

        .ppid-detail-subtitle {
            font-size: 1.1rem;
            color: #111;
            font-weight: 500;
            margin: 0;
        }

        /* --- ACCORDION (KOTAK DROPDOWN) --- */
        .ppid-accordion-wrapper {
            display: flex;
            flex-direction: column;
            gap: 15px;
            /* Jarak antar kotak */
        }

        .ppid-accordion {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
            overflow: hidden;
        }

        /* Menghilangkan panah bawaan browser */
        .ppid-accordion summary::-webkit-details-marker {
            display: none;
        }

        .ppid-accordion-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 25px;
            font-size: 1.15rem;
            font-weight: 800;
            color: #111;
            cursor: pointer;
            list-style: none;
            /* Menghilangkan panah bawaan firefox */
            transition: background-color 0.2s;
        }

        .ppid-accordion-header:hover {
            background-color: #fcfcfc;
        }

        /* Ikon Panah (Chevron) */
        .accordion-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        /* Animasi Panah saat terbuka */
        .ppid-accordion[open] .accordion-icon {
            transform: rotate(180deg);
        }

        /* --- TABEL DI DALAM ACCORDION --- */
        .ppid-accordion-body {
            padding: 0 25px 25px 25px;
            border-top: 1px solid #f0f0f0;
            margin-top: 5px;
            padding-top: 25px;
        }

        .ppid-table {
            width: 100%;
            border-collapse: collapse;
        }

        .ppid-table th {
            text-align: left;
            font-weight: 800;
            color: #111;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        .ppid-table td {
            padding: 20px 0;
            border-bottom: 1px solid #f0f0f0;
            vertical-align: middle;
            color: #333;
        }

        .ppid-table tr:last-child td {
            border-bottom: none;
            padding-bottom: 0;
        }

        /* Pengaturan Lebar Kolom */
        .col-no {
            width: 5%;
            font-weight: 700;
        }

        .col-judul {
            width: 55%;
            font-weight: 600;
            font-size: 1.05rem;
            line-height: 1.4;
            text-transform: uppercase;
        }

        .col-tanggal {
            width: 25%;
            color: #555;
            font-size: 0.95rem;
        }

        .col-aksi {
            width: 15%;
            text-align: right;
        }

        /* Tombol Aksi Bersusun Vertikal */
        .table-actions-col {
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 140px;
            margin-left: auto;
            /* Mendorong ke kanan penuh */
        }

        .btn-action-sm {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 10px;
            background-color: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            color: #111;
            font-weight: 700;
            font-size: 0.85rem;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-action-sm:hover {
            background-color: #f9fafb;
            border-color: #9ca3af;
        }

        /* --- EMPTY STATE (TAMPILAN KOSONG) --- */
        .ppid-empty-state {
            background-color: #f1f5f9;
            /* Kotak abu-abu seperti referensi */
            border-radius: 8px;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            color: #64748b;
            font-size: 1.1rem;
            margin-top: 20px;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {

            /* Tabel diubah jadi tampilan tumpuk di HP */
            .ppid-table thead {
                display: none;
            }

            .ppid-table,
            .ppid-table tbody,
            .ppid-table tr,
            .ppid-table td {
                display: block;
                width: 100%;
            }

            .ppid-table tr {
                margin-bottom: 20px;
                border-bottom: 2px solid #eee;
                padding-bottom: 15px;
            }

            .col-no {
                display: none;
            }

            .col-judul {
                margin-bottom: 10px;
            }

            .col-tanggal {
                margin-bottom: 15px;
            }

            .table-actions-col {
                width: 100%;
                margin-left: 0;
            }
        }

    </style>

    <section class="ppid-detail-section">
        <div class="ppid-detail-container">

            <div class="ppid-detail-header">
                <h1 class="ppid-detail-title">Informasi {{ request('kategori') ?? 'Publik' }}</h1>
                <p class="ppid-detail-subtitle">{{ $subtitle }}</p>
            </div>

            <div class="ppid-accordion-wrapper">

                @forelse($documents as $subKategori => $items)
                <details class="ppid-accordion">

                    <summary class="ppid-accordion-header">
                        {{ $subKategori }}
                        <span class="accordion-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </summary>

                    <div class="ppid-accordion-body">
                        <table class="ppid-table">
                            <thead>
                                <tr>
                                    <th class="col-no">No</th>
                                    <th class="col-judul">Judul</th>
                                    <th class="col-tanggal">Tanggal</th>
                                    <th class="col-aksi"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $index => $doc)
                                <tr>
                                    <td class="col-no">{{ $index + 1 }}</td>
                                    <td class="col-judul">{{ $doc->judul }}</td>
                                    <td class="col-tanggal">{{ \Carbon\Carbon::parse($doc->tanggal_upload)->translatedFormat('l, d F Y') }}</td>

                                    <td class="col-aksi">
                                        <div class="table-actions-col">
                                            <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="btn-action-sm">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <path d="M9 15h6"></path>
                                                    <path d="M9 11h6"></path>
                                                </svg>
                                                Lihat Berkas
                                            </a>
                                            <a href="{{ route('ppid.download', $doc->id) }}" class="btn-action-sm">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                                </svg>
                                                Unduh ({{ $doc->jumlah_unduh }}x)
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </details>
                @empty
                <div class="ppid-empty-state">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                        <line x1="9" y1="14" x2="15" y2="14"></line>
                    </svg>
                    Belum ada informasi untuk saat ini.
                </div>
                @endforelse

            </div>
        </div>
    </section>
</x-frontend>
