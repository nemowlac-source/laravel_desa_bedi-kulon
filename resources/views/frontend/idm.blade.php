<x-frontend>
    <section class="infografis-page">
        <div class="header-infografis">
            <div class="hidden md:block brand-title">
                <h1>INFOGRAFIS<br>DESA Bedi Kulon</h1>
            </div>

            {{-- PERBAIKAN: Tambahkan flex, overflow-x-auto, dan hide-scroll --}}
            <div class="nav-menu flex overflow-x-auto flex-nowrap gap-2 pb-2 hide-scroll">

                {{-- PERBAIKAN: Tambahkan flex-none pada setiap <a> agar tombolnya tidak menyusut/gepeng --}}
                <a href="{{ route('frontend.infografis') }}" class="nav-item flex-none {{ Route::is('frontend.infografis') ? 'active' : '' }}">
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

                <a href="{{ route('frontend.apbdes') }}" class="nav-item flex-none {{ Route::is('frontend.apbdes') ? 'active' : '' }}">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-cash" style="overflow: visible;">
                            <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                            <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
                        </svg>
                    </div>
                    <span class="nav-text">APBDes</span>
                </a>

                <a href="{{ route('frontend.stunting') }}" class="nav-item flex-none {{ Route::is('frontend.stunting') ? 'active' : '' }}">
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

                <a href="{{ route('frontend.bansos') }}" class="nav-item flex-none {{ Route::is('frontend.bansos') ? 'active' : '' }}">
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

                <a href="{{ route('frontend.idm') }}" class="nav-item flex-none {{ Route::is('frontend.idm') ? 'active' : '' }}">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-crown">
                            <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z"></path>
                        </svg>
                    </div>
                    <span class="nav-text">IDM</span>
                </a>

                <a href="{{ route('frontend.sdgs') }}" class="nav-item flex-none {{ Route::is('frontend.sdgs') ? 'active' : '' }}">
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
        <div class="idm-top-section">
            <div class="idm-info mb-6 hidden md:block">

                <h2 class="idm-brand text-2xl font-bold text-[#2ac0b4] mb-2">IDM</h2>

                {{-- PERUBAHAN: Teks ini dibungkus 'hidden md:block' agar hilang di Mobile --}}
                <div class="hidden md:block">
                    <p class="idm-text text-sm text-gray-600 mb-4">
                        Indeks Desa Membangun (IDM) Desa Bedi Kulon Tahun {{ $tahun_pilih }}.
                        Indeks komposit yang dibentuk dari tiga indeks, yaitu
                        <strong>Indeks Ketahanan Sosial</strong>, <strong>Indeks Ketahanan Ekonomi</strong>, dan
                        <strong>Indeks Ketahanan Ekologi/Lingkungan</strong>.
                    </p>
                </div>

                <div class="mt-4">
                    <form action="{{ route('frontend.idm') }}" method="GET">
                        <select name="tahun" onchange="this.form.submit()" class="pl-4 pr-10 py-2 border rounded bg-white text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none">
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

            {{-- ========================================== --}}
            {{-- ZONA DESKTOP (Grid Menyamping)             --}}
            {{-- ========================================== --}}
            <div class="hidden md:block">
                @if($idm)
                <div class="idm-primary-cards flex gap-4 mb-6">
                    <div class="card-large flex-1 bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center">
                        <span class="card-label block text-sm font-bold text-gray-500 mb-2">SKOR IDM {{ $tahun_pilih }}</span>
                        <span class="card-value-bold block text-4xl font-extrabold text-blue-600">{{ number_format($idm->nilai_idm, 4) }}</span>
                    </div>
                    <div class="card-large flex-1 bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center">
                        <span class="card-label block text-sm font-bold text-gray-500 mb-2">STATUS IDM {{ $tahun_pilih }}</span>
                        <span class="card-value-bold block text-3xl font-extrabold {{ $idm->status == 'MANDIRI' ? 'text-green-600' : ($idm->status == 'MAJU' ? 'text-blue-500' : ($idm->status == 'BERKEMBANG' ? 'text-yellow-500' : 'text-red-500')) }}">
                            {{ $idm->status }}
                        </span>
                    </div>
                </div>

                <div class="idm-secondary-grid grid grid-cols-5 gap-4 mb-8">
                    <div class="card-small bg-white p-4 rounded-xl shadow-sm border border-gray-100 text-center">
                        <span class="card-label block text-xs text-gray-500 mb-1">Target Status</span>
                        <span class="card-value-small block text-lg font-bold text-green-700">{{ $target_status }}</span>
                    </div>
                    <div class="card-small bg-white p-4 rounded-xl shadow-sm border border-gray-100 text-center">
                        <span class="card-label block text-xs text-gray-500 mb-1">Skor Minimal</span>
                        <span class="card-value-small block text-lg font-bold text-gray-800">{{ number_format($min_skor_target, 4) }}</span>
                    </div>
                    <div class="card-small bg-white p-4 rounded-xl shadow-sm border border-gray-100 text-center">
                        <span class="card-label block text-xs text-gray-500 mb-1">Penambahan</span>
                        <span class="card-value-small block text-lg font-bold {{ $penambahan > 0 ? 'text-red-500' : 'text-green-500' }}">{{ number_format($penambahan, 4) }}</span>
                    </div>
                    <div class="card-small bg-white p-4 rounded-xl shadow-sm border border-gray-100 text-center">
                        <span class="card-label block text-xs text-gray-500 mb-1">Skor IKS (Sosial)</span>
                        <span class="card-value-small block text-lg font-bold text-gray-800">{{ number_format($details_iks->sum('nilai_plus'), 4) }}</span>
                    </div>
                    <div class="card-small bg-white p-4 rounded-xl shadow-sm border border-gray-100 text-center">
                        <span class="card-label block text-xs text-gray-500 mb-1">Skor IKE (Ekonomi)</span>
                        <span class="card-value-small block text-lg font-bold text-gray-800">{{ number_format($idm->skor_ike, 4) }}</span>
                    </div>
                    <div class="card-small bg-white p-4 rounded-xl shadow-sm border border-gray-100 text-center col-span-5">
                        <span class="card-label block text-xs text-gray-500 mb-1">Skor IKL (Lingkungan)</span>
                        <span class="card-value-small block text-lg font-bold text-gray-800">{{ number_format($idm->skor_ikl, 4) }}</span>
                    </div>
                </div>
                @else
                <div class="idm-primary-cards">
                    <div class="card-large bg-white p-6 rounded-xl shadow-sm text-center"><span class="card-value-bold text-xl font-bold text-gray-400">Belum Ada Data</span></div>
                </div>
                @endif
            </div>

            {{-- ========================================== --}}
            {{-- ZONA MOBILE (List Vertikal)                --}}
            {{-- ========================================== --}}

            <div class="block md:hidden w-full">
                @if($idm)

                <div class="flex flex-col gap-3 mt-4 w-full">

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor IDM {{ $tahun_pilih }}</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($idm->nilai_idm, 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">STATUS IDM {{ $tahun_pilih }}</span>
                        <span class="text-lg font-extrabold text-black uppercase">{{ $idm->status }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Target Status</span>
                        <span class="text-lg font-extrabold text-black uppercase">{{ $target_status }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor Minimal</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($min_skor_target, 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Penambahan</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($penambahan, 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor IKS</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($details_iks->sum('nilai_plus'), 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor IKE</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($idm->skor_ike, 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor IKL</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($idm->skor_ikl, 4) }}</span>
                    </div>

                </div>

                @else
                <div class="w-full bg-white p-5 mt-4 rounded-xl border border-gray-100 text-center shadow-sm">
                    <span class="font-bold text-gray-400">Belum Ada Data</span>
                </div>
                @endif
            </div>





        </div>
        <div class="idm-container mt-10">
            {{-- Judul Grafik Responsif --}}
            <h2 class="text-xl md:text-2xl font-bold text-[#2ac0b4] mb-4 text-center md:text-left">
                Skor IDM Tahun ke Tahun
            </h2>

            {{-- Wrapper Grafik yang Responsif (Kuncinya ada di 'h-[...px]') --}}
            <div class="relative w-full h-[300px] md:h-[450px] bg-white p-2 md:p-6 rounded-xl md:rounded-2xl shadow-sm border border-gray-100">
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
            const canvas = document.getElementById('idmTrendChart');
            if (!canvas) return;

            const ctx = canvas.getContext('2d');

            // Mengambil data dari atribut HTML
            const labels = JSON.parse(canvas.getAttribute('data-labels') || '[]');
            const scores = JSON.parse(canvas.getAttribute('data-scores') || '[]');

            new Chart(ctx, {
                type: 'line'
                , data: {
                    labels: labels
                    , datasets: [{
                        label: 'Skor IDM'
                        , data: scores
                        , borderColor: '#ff8f73', // Warna oranye/coral sesuai contoh
                        backgroundColor: '#ffffff'
                        , fill: false, // KUNCI: Menghilangkan blok warna di bawah garis
                        borderWidth: 2
                        , tension: 0, // KUNCI: Membuat garis menjadi lurus antar titik (tidak melengkung)
                        pointRadius: 5
                        , pointBackgroundColor: '#ffffff', // Bagian tengah titik warna putih
                        pointBorderColor: '#ff8f73', // Pinggiran titik warna oranye
                        pointBorderWidth: 2
                        , pointHoverRadius: 7
                    }]
                }
                , options: {
                    responsive: true
                    , maintainAspectRatio: false
                    , layout: {
                        padding: {
                            top: 15
                            , right: 15
                            , left: 5
                            , bottom: 5
                        }
                    }
                    , scales: {
                        y: {
                            beginAtZero: true
                            , min: 0
                            , max: 1, // Mempertahankan skala 0 sampai 1
                            ticks: {
                                stepSize: 0.1
                                , color: '#6b7280'
                                , font: {
                                    family: "'Poppins', sans-serif"
                                    , size: 10
                                }
                            }
                            , grid: {
                                color: 'rgba(200, 210, 230, 0.5)', // Warna grid biru muda transparan
                                borderDash: [5, 5], // Membuat grid putus-putus
                                drawBorder: false
                            }
                        }
                        , x: {
                            offset: true
                            , ticks: {
                                color: '#6b7280'
                                , font: {
                                    family: "'Poppins', sans-serif"
                                    , size: 11
                                    , weight: '500'
                                }
                                , padding: 10
                            }
                            , grid: {
                                display: true, // KUNCI: Menampilkan garis vertikal
                                color: 'rgba(200, 210, 230, 0.5)', // Warna biru muda putus-putus
                                borderDash: [5, 5]
                                , drawBorder: false
                            }
                        }
                    }
                    , plugins: {
                        legend: {
                            display: false
                        },

                        // KUNCI: Mematikan angka yang menempel di garis (karena efek global grafik stunting)
                        datalabels: {
                            display: false
                        },

                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)'
                            , padding: 12
                            , titleFont: {
                                family: "'Poppins', sans-serif"
                                , size: 12
                            }
                            , bodyFont: {
                                family: "'Poppins', sans-serif"
                                , size: 13
                                , weight: 'bold'
                            }
                            , displayColors: false
                            , callbacks: {
                                label: function(context) {
                                    return 'Skor IDM: ' + context.parsed.y.toFixed(4); // Hover menampilkan 4 desimal
                                }
                            }
                        }
                    }
                }
            });
        });

    </script>




</x-frontend>
