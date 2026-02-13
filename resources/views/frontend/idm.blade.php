<x-frontend>
    <div class="header-infografis">
        <div class="header-container">
            <div class="brand-title">
                <h1>INFOGRAFIS<br>DESA Bedi Kulon</h1>
            </div>

            <div class="nav-menu">
                <a href="{{ route('frontend.infografis') }}" class="nav-item active">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="Penduduk">
                    </div>
                    <span class="nav-text">Penduduk</span>
                </a>

                <a href="{{ route('frontend.apbdes') }}" class="nav-item">

                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/2382/2382461.png" alt="APBDes">
                    </div>
                    <span class="nav-text">APBDes</span>
                </a>

                <a href="{{ route('frontend.stunting') }}" class="nav-item">

                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/2560/2560157.png" alt="Stunting">
                    </div>
                    <span class="nav-text">Stunting</span>
                </a>

                <a href="{{ route('frontend.bansos') }}" class="nav-item">

                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/679/679720.png" alt="Bansos">
                    </div>
                    <span class="nav-text">Bansos</span>
                </a>

                <a href="{{ route('frontend.idm') }}" class="nav-item">

                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/2544/2544339.png" alt="IDM">
                    </div>
                    <span class="nav-text">IDM</span>
                </a>

                <a href="{{ route('frontend.sdgs') }}" class="nav-item">

                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/5695/5695663.png" alt="SDGs">
                    </div>
                    <span class="nav-text">SDGs</span>
                </a>
            </div>

        </div>
    </div>
    <style>
        /* Import Font mirip dengan gambar (Poppins/Sans-serif modern) */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap');

        .header-infografis {
            background-color: #f8f9fa;
            /* Background abu-abu sangat muda/putih */
            padding-top: 40px;
            font-family: 'Poppins', sans-serif;
            border-bottom: 1px solid #e0e0e0;
            /* Garis abu-abu tipis di bawah seluruh header */
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            /* Elemen sejajar di garis bawah */
        }

        /* Styling Judul Kiri */
        .brand-title h1 {
            font-size: 2.5rem;
            font-weight: 800;
            /* Extra Bold */
            color: #72c02c;
            /* Warna Hijau Cerah sesuai gambar */
            line-height: 1.1;
            margin: 0;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        /* Styling Menu Kanan */
        .nav-menu {
            display: flex;
            gap: 30px;
            /* Jarak antar menu */
        }

        .nav-item {
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 15px;
            position: relative;
            color: #6c757d;
            /* Warna teks abu-abu tua */
            transition: all 0.3s ease;
        }

        /* Styling Ikon */
        .icon-box img {
            width: 32px;
            height: 32px;
            margin-bottom: 8px;
            /* Filter agar ikon menjadi abu-abu gelap (outline style) */
            filter: grayscale(100%) opacity(0.7);
        }

        /* Styling Teks Menu */
        .nav-text {
            font-size: 0.9rem;
            font-weight: 700;
        }

        /* Efek Hover */
        .nav-item:hover {
            color: #333;
        }

        .nav-item:hover .icon-box img {
            filter: grayscale(100%) opacity(1);
        }

        /* State Active (PENDUDUK) */
        .nav-item.active {
            color: #343a40;
            /* Teks lebih gelap saat aktif */
        }

        .nav-item.active .icon-box img {
            filter: grayscale(100%) opacity(1);
            /* Ikon lebih tegas */
        }

        /* Garis Hijau di Bawah Tab Aktif */
        .nav-item.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            /* Menempel tepat di garis border container */
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #72c02c;
            /* Warna Hijau */
        }

        /* Responsif untuk Mobile */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                align-items: center;
            }

            .brand-title h1 {
                text-align: center;
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .nav-menu {
                width: 100%;
                justify-content: space-between;
                overflow-x: auto;
                /* Scroll samping jika layar kecil */
                padding-bottom: 0;
            }

            .nav-item {
                min-width: 70px;
                /* Lebar minimum agar ikon tidak berdempetan */
            }
        }

    </style>
    <style>
        /* Warna khusus untuk baris pemisah IKS/IKE/IKL */
        .row-separator td {
            background-color: #a8e68e !important;
            /* Hijau muda identik gambar */
            color: #fff;
            border: 1px solid #fff !important;
        }

        /* Warna khusus untuk baris footer (total skor paling bawah) */
        .row-footer-idm td {
            background-color: #90cd76;
            /* Hijau sedikit lebih tua */
            color: #fff;
            padding: 12px;
            border: 1px solid #fff !important;
        }

        .text-right {
            text-align: right;
            padding-right: 20px !important;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        /* Memperhalus tampilan teks di dalam sel */
        .idm-table-final tbody td {
            line-height: 1.4;
            word-wrap: break-word;
        }

        /* CSS INTERNAL - Menjamin gaya terload 100% */
        .idm-main-wrapper {
            background-color: #f8f9fa;
            padding: 60px 0;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .idm-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Mengatur Baris Atas (Teks di Kiri, Kartu di Kanan) */
        .idm-top-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
            margin-bottom: 30px;
        }

        .idm-info {
            flex: 1.2;
        }

        .idm-brand {
            color: #72c02c;
            font-size: 2.5rem;
            font-weight: 800;
            margin: 0 0 15px 0;
        }

        .idm-text {
            font-size: 1.1rem;
            line-height: 1.6;
            margin: 0;
        }

        /* Kolom Kartu Besar */
        .idm-primary-cards {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .card-large {
            background: #ffffff;
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Mengatur Baris Bawah (Grid 3 Kolom) */
        .idm-secondary-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .card-small {
            background: #ffffff;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Tipografi & Warna */
        .card-label {
            font-size: 0.85rem;
            font-weight: 700;
            color: #999;
            text-transform: uppercase;
        }

        .card-value-bold {
            font-size: 2.8rem;
            font-weight: 800;
            color: #4c5258;
        }

        .card-value-small {
            font-size: 1.6rem;
            font-weight: 800;
            color: #4c5258;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 900px) {
            .idm-top-section {
                flex-direction: column;
            }

            .idm-secondary-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .idm-secondary-grid {
                grid-template-columns: 1fr;
            }

            .card-value-bold {
                font-size: 2.2rem;
            }
        }

    </style>
    <div class="idm-main-wrapper">

        <div class="idm-container">

            <div class="idm-top-section">
                <div class="idm-info">
                    <h2 class="idm-brand">IDM</h2>
                    <p class="idm-text">
                        Indeks Desa Membangun (IDM) Desa Bedi Kulon Tahun {{ $tahun_pilih }}.
                        Indeks komposit yang dibentuk dari tiga indeks, yaitu
                        <strong>Indeks Ketahanan Sosial</strong>, <strong>Indeks Ketahanan Ekonomi</strong>, dan
                        <strong>Indeks Ketahanan Ekologi/Lingkungan</strong>.
                    </p>

                    <div class="mt-4">
                        <form action="{{ route('idm.index') }}" method="GET">
                            <select name="tahun" onchange="this.form.submit()" class="px-4 py-2 border rounded bg-white text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @forelse($list_tahun as $thn)
                                <option value="{{ $thn }}" {{ $tahun_pilih == $thn ? 'selected' : '' }}>
                                    Tahun {{ $thn }}
                                </option>
                                @empty
                                <option>{{ date('Y') }}</option>
                                @endforelse
                            </select>
                        </form>
                    </div>
                </div>

                @if($idm)
                <div class="idm-primary-cards">
                    <div class="card-large">
                        <span class="card-label">SKOR IDM {{ $tahun_pilih }}</span>
                        <span class="card-value-bold text-blue-600">{{ number_format($idm->skor_idm, 4) }}</span>
                    </div>
                    <div class="card-large">
                        <span class="card-label">STATUS IDM {{ $tahun_pilih }}</span>
                        <span class="card-value-bold 
                        {{ $idm->status == 'MANDIRI' ? 'text-green-600' : 
                          ($idm->status == 'MAJU' ? 'text-blue-500' : 
                          ($idm->status == 'BERKEMBANG' ? 'text-yellow-500' : 'text-red-500')) }}">
                            {{ $idm->status }}
                        </span>
                    </div>
                </div>
                @else
                <div class="idm-primary-cards">
                    <div class="card-large"><span class="card-value-bold text-gray-400">Belum Ada Data</span></div>
                </div>
                @endif
            </div>

            @if($idm)
            <div class="idm-secondary-grid">
                <div class="card-small">
                    <span class="card-label">Target Status</span>
                    <span class="card-value-small text-green-700">{{ $target_status }}</span>
                </div>
                <div class="card-small">
                    <span class="card-label">Skor Minimal</span>
                    <span class="card-value-small">{{ number_format($min_skor_target, 4) }}</span>
                </div>
                <div class="card-small">
                    <span class="card-label">Penambahan</span>
                    <span class="card-value-small {{ $penambahan > 0 ? 'text-red-500' : 'text-green-500' }}">
                        {{ number_format($penambahan, 4) }}
                    </span>
                </div>

                <div class="card-small">
                    <span class="card-label">Skor IKS (Sosial)</span>
                    <span class="card-value-small">{{ number_format($idm->skor_iks, 4) }}</span>
                </div>
                <div class="card-small">
                    <span class="card-label">Skor IKE (Ekonomi)</span>
                    <span class="card-value-small">{{ number_format($idm->skor_ike, 4) }}</span>
                </div>
                <div class="card-small">
                    <span class="card-label">Skor IKL (Lingkungan)</span>
                    <span class="card-value-small">{{ number_format($idm->skor_ikl, 4) }}</span>
                </div>
            </div>
            @endif

        </div>
    </div>


    <section class="idm-chart-section">
        <div class="idm-container">
            <h2 class="chart-title-green">Skor IDM Tahun ke Tahun</h2>

            <div class="line-chart-wrapper">
                <canvas id="idmTrendChart"></canvas>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lineCtx = document.getElementById('idmTrendChart').getContext('2d');

            // Mengambil data dari Controller
            const labels = @json($chart_labels);
            const scores = @json($chart_data);

            new Chart(lineCtx, {
                type: 'line'
                , data: {
                    labels: labels, // Tahun Dinamis
                    datasets: [{
                        label: 'Skor IDM'
                        , data: scores, // Skor Dinamis
                        borderColor: '#ff9f89', // Warna oranye muda
                        backgroundColor: 'transparent'
                        , borderWidth: 3
                        , pointBackgroundColor: '#fff'
                        , pointBorderColor: '#ff9f89'
                        , pointRadius: 6
                        , pointHoverRadius: 8
                        , tension: 0 // Garis lurus (bukan melengkung)
                    }]
                }
                , options: {
                    responsive: true
                    , maintainAspectRatio: false
                    , scales: {
                        y: {
                            beginAtZero: false, // Ubah ke false agar grafik fokus di range skor (0.4 - 1.0)
                            min: 0.4, // Batas bawah agar grafik tidak terlalu "gepeng"
                            max: 1.0, // Skor maksimal IDM adalah 1.0
                            ticks: {
                                stepSize: 0.1
                            }
                            , grid: {
                                borderDash: [5, 5] // Garis putus-putus
                            }
                        }
                        , x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                    , plugins: {
                        legend: {
                            display: false
                        }
                        , tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return 'Skor: ' + context.raw;
                                }
                            }
                        }
                    }
                }
            });
        });

    </script>
    <section class="idm-table-container">
        <div class="idm-wrapper">
            <h2 class="table-title">Indikator Indeks Desa Membangun {{ $tahun_pilih }}</h2>

            <div class="table-scroll">
                <table class="idm-table-final">

                    <thead>
                        <tr>
                            <th rowspan="2" class="col-no">No</th>
                            <th rowspan="2" class="col-indikator">Indikator IDM</th>
                            <th rowspan="2" class="col-skor">Skor</th>
                            <th rowspan="2" class="col-ket">Keterangan</th>
                            <th rowspan="2" class="col-kegiatan">Kegiatan yang dapat dilakukan</th>
                            <th rowspan="2" class="col-nilai">Nilai+</th>
                            <th colspan="6" class="col-pelaksana">Yang dapat melaksanakan kegiatan</th>
                        </tr>
                        <tr>
                            <th class="mini-th">Pusat</th>
                            <th class="mini-th">Provinsi</th>
                            <th class="mini-th">Kab.</th>
                            <th class="mini-th">Desa</th>
                            <th class="mini-th">CSR</th>
                            <th class="mini-th">Lainnya</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- 1. BAGIAN IKS (KETAHANAN SOSIAL) --}}
                        @forelse($details_iks as $item)
                        <tr>
                            <td class="text-center">{{ $item->no_urut }}</td>
                            <td>{{ $item->indikator }}</td>
                            <td class="text-center">{{ $item->skor }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->kegiatan ?? '-' }}</td>
                            <td class="font-bold">{{ number_format($item->nilai, 4) }}</td>

                            {{-- Kolom Pelaksana --}}
                            <td>{{ $item->pelaksana_pusat }}</td>
                            <td>{{ $item->pelaksana_provinsi }}</td>
                            <td>{{ $item->pelaksana_kabupaten }}</td>
                            <td>{{ $item->pelaksana_desa }}</td>
                            <td>{{ $item->pelaksana_csr }}</td>
                            <td>{{ $item->pelaksana_lainnya }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center p-4 text-gray-500">Data rincian IKS belum diinput.</td>
                        </tr>
                        @endforelse

                        {{-- FOOTER IKS --}}
                        @if($idm)
                        <tr class="row-separator" style="background-color: #f0f9ff;"> {{-- Biru Muda --}}
                            <td colspan="5" class="text-right font-bold" style="color: #0369a1;">IKS {{ $tahun_pilih }}</td>
                            <td class="font-bold" style="color: #0369a1;">{{ number_format($idm->skor_iks, 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        @endif


                        {{-- 2. BAGIAN IKE (KETAHANAN EKONOMI) --}}
                        @forelse($details_ike as $item)
                        <tr>
                            <td class="text-center">{{ $item->no_urut }}</td>
                            <td>{{ $item->indikator }}</td>
                            <td class="text-center">{{ $item->skor }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->kegiatan ?? '-' }}</td>
                            <td class="font-bold">{{ number_format($item->nilai, 4) }}</td>

                            {{-- Kolom Pelaksana --}}
                            <td>{{ $item->pelaksana_pusat }}</td>
                            <td>{{ $item->pelaksana_provinsi }}</td>
                            <td>{{ $item->pelaksana_kabupaten }}</td>
                            <td>{{ $item->pelaksana_desa }}</td>
                            <td>{{ $item->pelaksana_csr }}</td>
                            <td>{{ $item->pelaksana_lainnya }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center p-4 text-gray-500">Data rincian IKE belum diinput.</td>
                        </tr>
                        @endforelse

                        {{-- FOOTER IKE --}}
                        @if($idm)
                        <tr class="row-separator" style="background-color: #f0fdf4;"> {{-- Hijau Muda --}}
                            <td colspan="5" class="text-right font-bold" style="color: #15803d;">IKE {{ $tahun_pilih }}</td>
                            <td class="font-bold" style="color: #15803d;">{{ number_format($idm->skor_ike, 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        @endif


                        {{-- 3. BAGIAN IKL (KETAHANAN LINGKUNGAN) --}}
                        @forelse($details_ikl as $item)
                        <tr>
                            <td class="text-center">{{ $item->no_urut }}</td>
                            <td>{{ $item->indikator }}</td>
                            <td class="text-center">{{ $item->skor }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->kegiatan ?? '-' }}</td>
                            <td class="font-bold">{{ number_format($item->nilai, 4) }}</td>

                            {{-- Kolom Pelaksana --}}
                            <td>{{ $item->pelaksana_pusat }}</td>
                            <td>{{ $item->pelaksana_provinsi }}</td>
                            <td>{{ $item->pelaksana_kabupaten }}</td>
                            <td>{{ $item->pelaksana_desa }}</td>
                            <td>{{ $item->pelaksana_csr }}</td>
                            <td>{{ $item->pelaksana_lainnya }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center p-4 text-gray-500">Data rincian IKL belum diinput.</td>
                        </tr>
                        @endforelse

                        {{-- FOOTER IKL --}}
                        @if($idm)
                        <tr class="row-footer-idm" style="background-color: #fefce8;"> {{-- Kuning Muda --}}
                            <td colspan="5" class="text-right font-bold" style="color: #a16207;">IKL {{ $tahun_pilih }}</td>
                            <td class="font-bold" style="color: #a16207;">{{ number_format($idm->skor_ikl, 4) }}</td>
                            <td colspan="6"></td>
                        </tr>

                        {{-- FOOTER TOTAL --}}
                        <tr class="row-footer-idm" style="background-color: #e5e7eb;"> {{-- Abu-abu --}}
                            <td colspan="5" class="text-right font-bold">IDM {{ $tahun_pilih }}</td>
                            <td class="font-bold">{{ number_format($idm->skor_idm, 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        <tr class="row-footer-idm" style="background-color: #d1d5db;">
                            <td colspan="5" class="text-right font-bold">SKOR STATUS IDM {{ $tahun_pilih }}</td>
                            <td class="font-bold text-uppercase 
                            {{ $idm->status == 'MANDIRI' ? 'text-green-700' : 
                              ($idm->status == 'MAJU' ? 'text-blue-700' : 
                              ($idm->status == 'BERKEMBANG' ? 'text-yellow-700' : 'text-red-700')) }}">
                                {{ $idm->status }}
                            </td>
                            <td colspan="6"></td>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </section>




</x-frontend>
