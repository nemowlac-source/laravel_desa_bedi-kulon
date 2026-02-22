<x-frontend>
    <section class="infografis-page">
        <div class="header-infografis">
            <div class="brand-title">
                <h1>INFOGRAFIS<br>DESA Bedi Kulon</h1>
            </div>

            <div class="nav-menu">
                <a href="{{ route('frontend.infografis') }}" class="nav-item {{ Route::is('frontend.infografis') ? 'active' : '' }}">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-users" style="overflow: visible;">
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>
                    </div>
                    <span class="nav-text">Penduduk</span>
                </a>


                <a href="{{ route('frontend.apbdes') }}" class="nav-item {{ Route::is('frontend.apbdes') ? 'active' : '' }}">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-cash" style="overflow: visible;">
                            <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                            <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
                        </svg>
                    </div>
                    <span class="nav-text">APBDes</span>
                </a>



                <a href="{{ route('frontend.stunting') }}" class="nav-item {{ Route::is('frontend.stunting') ? 'active' : '' }}">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-chart-bar" style="overflow: visible;">
                            <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                            <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                            <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                            <path d="M4 20l14 0"></path>
                        </svg>
                    </div>
                    <span class="nav-text">Stunting</span>
                </a>


                <a href="{{ route('frontend.bansos') }}" class="nav-item {{ Route::is('frontend.bansos') ? 'active' : '' }}">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-package" style="overflow: visible;">
                            <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                            <path d="M12 12l8 -4.5"></path>
                            <path d="M12 12v9"></path>
                            <path d="M12 12l-8 -4.5"></path>
                            <path d="M16 5.25l-8 4.5"></path>
                        </svg>
                    </div>
                    <span class="nav-text">Bansos</span>
                </a>


                <a href="{{ route('frontend.idm') }}" class="nav-item {{ Route::is('frontend.idm') ? 'active' : '' }}">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-crown">
                            <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z"></path>
                        </svg>
                    </div>
                    <span class="nav-text">IDM</span>
                </a>


                <a href="{{ route('frontend.sdgs') }}" class="nav-item {{ Route::is('frontend.sdgs') ? 'active' : '' }}">
                    <div class="icon-box">

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-numbers" style="overflow: visible;">

                            <path d="M8 10v-7l-2 2"></path>
                            <path d="M6 16a2 2 0 1 1 4 0c0 .591 -.601 1.46 -1 2l-3 3h4"></path>
                            <path d="M15 14a2 2 0 1 0 2 -2a2 2 0 1 0 -2 -2"></path>
                            <path d="M6.5 10h3"></path>
                        </svg>
                    </div>
                    <span class="nav-text">SDGs</span>
                </a>


            </div>
        </div>
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
                            <span class="card-value-bold text-blue-600">{{ number_format($idm->nilai_idm, 4) }}</span>

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
                        <span class="card-value-small">{{ number_format($details_iks->sum('nilai_plus'), 4) }}</span>





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
        <div class="idm-container">
            <h2 class="chart-title-green">Skor IDM Tahun ke Tahun</h2>

            <div class="line-chart-wrapper">
                <canvas id="idmTrendChart" data-labels="{{ json_encode($chart_labels) }}" data-scores="{{ json_encode($chart_data) }}">
                </canvas>
            </div>

        </div>
        <div class="idm-wrapper" style="margin-top: 50px">
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
                            <th class="mini-th">Kab </th>
                            <th class="mini-th">Desa</th>
                            <th class="mini-th">CSR</th>
                            <th class="mini-th">Lainnya</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- 1. IKS --}}
                        @forelse($details_iks as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->indikator }}</td>
                            <td class="text-center">{{ $item->skor }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->kegiatan ?? '-' }}</td>
                            <td class="font-bold">{{ number_format($item->nilai_plus, 4) }}</td>

                            {{-- Pelaksana (Ceklis jika ada isinya) --}}
                            <td>{{ $item->pelaksana_pusat ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_provinsi ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_kabupaten }}</td>
                            <td>{{ $item->pelaksana_desa ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_csr ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_lainnya }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center text-gray-400">Data IKS Kosong</td>
                        </tr>
                        @endforelse

                        {{-- FOOTER IKS --}}
                        @if($idm)
                        <tr class="bg-blue-50 font-bold text-blue-800">
                            <td colspan="5" class="text-right">IKS {{ $tahun_pilih }}</td>

                            <td>{{ number_format($details_iks->sum('nilai_plus'), 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        @endif


                        {{-- 2. IKE --}}
                        @forelse($details_ike as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->indikator }}</td>
                            <td class="text-center">{{ $item->skor }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->kegiatan ?? '-' }}</td>
                            <td class="font-bold">{{ number_format($item->nilai_plus, 4) }}</td>

                            <td>{{ $item->pelaksana_pusat ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_provinsi ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_kabupaten }}</td>
                            <td>{{ $item->pelaksana_desa ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_csr ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_lainnya }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center text-gray-400">Data IKE Kosong</td>
                        </tr>
                        @endforelse

                        {{-- FOOTER IKE --}}
                        @if($idm)
                        <tr class="bg-green-50 font-bold text-green-800">
                            <td colspan="5" class="text-right">IKE {{ $tahun_pilih }}</td>

                            <td>{{ number_format($idm->skor_ike, 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        @endif


                        {{-- 3. IKL --}}
                        @forelse($details_ikl as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->indikator }}</td>
                            <td class="text-center">{{ $item->skor }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->kegiatan ?? '-' }}</td>
                            <td class="font-bold">{{ number_format($item->nilai_plus, 4) }}</td>

                            <td>{{ $item->pelaksana_pusat ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_provinsi ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_kabupaten }}</td>
                            <td>{{ $item->pelaksana_desa ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_csr ? '✓' : '' }}</td>
                            <td>{{ $item->pelaksana_lainnya }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center text-gray-400">Data IKL Kosong</td>
                        </tr>
                        @endforelse

                        {{-- FOOTER IKL --}}
                        @if($idm)
                        <tr class="bg-yellow-50 font-bold text-yellow-800">
                            <td colspan="5" class="text-right">IKL {{ $tahun_pilih }}</td>

                            <td>{{ number_format($idm->skor_ikl, 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        {{-- TOTAL IDM --}}
                        <tr class="bg-gray-200 font-bold">
                            <td colspan="5" class="text-right">IDM {{ $tahun_pilih }}</td>

                            <td>{{ number_format($idm->nilai_idm, 4) }}</td>

                            <td colspan="6"></td>
                        </tr>
                        {{-- TOTAL IDM --}}
                        <tr class="bg-gray-200 font-bold">
                            <td colspan="5" class="text-right font-bold">Skor STATUS IDM {{ $tahun_pilih }}</td>
                            <td>{{ ($idm->status) }}</td>

                            <td colspan="6"></td>
                        </tr>

                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen canvas
            const canvas = document.getElementById('idmTrendChart');
            if (!canvas) return;

            const ctx = canvas.getContext('2d');

            // Ambil data dari atribut HTML (Anti-Error) ⏺️
            // Pastikan di Controller datanya sudah di-json_encode
            const labels = JSON.parse(canvas.getAttribute('data-labels') || '[]');
            const scores = JSON.parse(canvas.getAttribute('data-scores') || '[]');

            new Chart(ctx, {
                type: 'line'
                , data: {
                    labels: labels
                    , datasets: [{
                        label: 'Skor IDM'
                        , data: scores
                        , borderColor: '#ff9f89'
                        , backgroundColor: 'rgba(255, 159, 137, 0.1)'
                        , fill: true
                        , borderWidth: 3
                        , tension: 0.3, // Garis agak melengkung
                        pointRadius: 6
                        , pointBackgroundColor: '#fff'
                        , pointBorderColor: '#ff9f89'
                        , pointBorderWidth: 2
                    }]
                }
                , options: {
                    responsive: true
                    , maintainAspectRatio: false
                    , scales: {
                        y: {
                            beginAtZero: true
                            , min: 0
                            , max: 1, // Skala 0-1 sesuai standar IDM
                            ticks: {
                                stepSize: 0.1
                                , color: '#999'
                            }
                            , grid: {
                                color: '#f0f0f0'
                                , borderDash: [5, 5]
                            }
                        }
                        , x: {
                            // INI KUNCINYA! Agar garis tidak nempel di pinggir ⏺️
                            offset: true
                            , grid: {
                                display: false
                            }
                            , ticks: {
                                color: '#666'
                                , font: {
                                    weight: '600'
                                }
                                , padding: 10 // Jarak antara teks tahun dan grafik
                            }
                        }
                    }
                    , plugins: {
                        legend: {
                            display: false
                        }
                        , tooltip: {
                            // ... (kode tooltip bisa ditambahkan di sini jika mau)
                        }
                    }
                }
            });
        });

    </script>



</x-frontend>
