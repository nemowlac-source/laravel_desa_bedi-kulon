<x-frontend>
    @php
    // Siapkan data di blok PHP agar aman dari formatter JS
    $labels = $wp_labels ?? ['2024', '2025', '2026'];
    $values = $wp_data ?? [800, 825, 850];
    // Data default jika database kosong
    $eduLabels = $pendidikan_labels ?? [
    'Tidak/Belum Sekolah', 'Belum Tamat SD/Sederajat', 'Tamat SD/Sederajat',
    'SLTP/Sederajat', 'SLTA/Sederajat', 'Diploma I/II',
    'Diploma III/Sarjana Muda', 'Diploma IV/Strata I', 'Strata II', 'Strata III'
    ];
    $eduData = $pendidikan_data ?? [181, 93, 180, 78, 132, 5, 11, 46, 0, 0];
    // Data Dusun dari database atau default
    $dusunLabels = $chart_dusun_labels ?? ['Piasan', 'Mubur Kecil'];
    $dusunData = $chart_dusun_data ?? [470, 256];
    // Data Default jika variabel dari controller belum ada
    $piramidaLabels = $labels_umur ?? ['0-4', '5-9', '10-14', '15-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65-69', '70-74', '75-79', '80-84', '85+'];

    // Pastikan data laki-laki adalah negatif untuk efek piramida
    $lakiLaki = $data_laki ?? [-23, -41, -40, -34, -22, -32, -27, -17, -36, -24, -19, -18, -18, -6, -3, -1, -1, -1];
    $perempuan = $data_perempuan ?? [35, 28, 45, 35, 33, 31, 28, 21, 27, 22, 26, 10, 8, 6, 5, 1, 2, 0];

    // Mapping Icon berdasarkan Nama Status di Database
    $icons = [
    'Belum Kawin' => 'https://cdn-icons-png.flaticon.com/512/4140/4140048.png',
    'Kawin' => 'https://cdn-icons-png.flaticon.com/512/3656/3656910.png',
    'Cerai Mati' => 'https://cdn-icons-png.flaticon.com/512/3141/3141151.png',
    'Kawin Tercatat' => 'https://cdn-icons-png.flaticon.com/512/2912/2912781.png',
    'Cerai Hidup' => 'https://cdn-icons-png.flaticon.com/512/4137/4137063.png',
    'Kawin Tidak Tercatat' => 'https://cdn-icons-png.flaticon.com/512/10543/10543315.png',
    ];
    // Default icon jika nama tidak cocok
    $default_icon = 'https://cdn-icons-png.flaticon.com/512/1077/1077114.png';

    // Mapping Icon berdasarkan Nama Agama di Database
    $agamaIcons = [
    'Islam' => 'https://cdn-icons-png.flaticon.com/512/2000/2000100.png',
    'Kristen' => 'https://cdn-icons-png.flaticon.com/512/1155/1155255.png',
    'Katolik' => 'https://cdn-icons-png.flaticon.com/512/2663/2663300.png',
    'Hindu' => 'https://cdn-icons-png.flaticon.com/512/10390/10390977.png',
    'Buddha' => 'https://cdn-icons-png.flaticon.com/512/2501/2501538.png',
    'Konghucu' => 'https://cdn-icons-png.flaticon.com/512/3667/3667448.png', // Icon Yin Yang
    'Kepercayaan Lainnya' => 'https://cdn-icons-png.flaticon.com/512/2312/2312674.png',
    ];
    // Default icon
    $defaultAgamaIcon = 'https://cdn-icons-png.flaticon.com/512/1077/1077114.png';
    @endphp
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
        <div class="demografi-content">
            <div class="demografi-text">
                <h2 class="title-green">DEMOGRAFI PENDUDUK</h2>
                <p>Memberikan informasi lengkap mengenai karakteristik demografi penduduk suatu wilayah. Mulai dari jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, agama, dan aspek penting lainnya yang menggambarkan komposisi populasi secara rinci.</p>
            </div>
            <div class="demografi-visual">
                <img src="{{ asset('assets/img/Infografis.png') }}" alt="Visualisasi Data">
            </div>
        </div>
        <h2 class="title-green">Jumlah Penduduk dan Kepala Keluarga</h2>
        <div class="stat-penduduk-grid">

            <div class="stat-card-penduduk">
                <div class="stat-icon-wrapper">
                    <img src="https://cdn-icons-png.flaticon.com/512/437/437501.png" alt="Icon Total">
                </div>
                <div class="stat-data">
                    <span class="stat-label">TOTAL PENDUDUK</span>
                    <span class="stat-value color-green">
                        {{ number_format($total_penduduk, 0, ',', '.') }} <small>Jiwa</small>
                    </span>
                </div>
            </div>

            <div class="stat-card-penduduk">
                <div class="stat-icon-wrapper">
                    <img src="https://cdn-icons-png.flaticon.com/512/3667/3667325.png" alt="Icon KK">
                </div>
                <div class="stat-data">
                    <span class="stat-label">KEPALA KELUARGA</span>
                    <span class="stat-value color-green">
                        {{ number_format($total_kk, 0, ',', '.') }} <small>KK</small>
                    </span>
                </div>
            </div>

            <div class="stat-card-penduduk">
                <div class="stat-icon-wrapper">
                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="Icon Perempuan">
                </div>
                <div class="stat-data">
                    <span class="stat-label">PEREMPUAN</span>
                    <span class="stat-value color-light-green">
                        {{ number_format($total_perempuan, 0, ',', '.') }} <small>Jiwa</small>
                    </span>
                </div>
            </div>

            <div class="stat-card-penduduk">
                <div class="stat-icon-wrapper">
                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png" alt="Icon Laki-laki">
                </div>
                <div class="stat-data">
                    <span class="stat-label">LAKI-LAKI</span>
                    <span class="stat-value color-light-green">
                        {{ number_format($total_laki, 0, ',', '.') }} <small>Jiwa</small>
                    </span>
                </div>
            </div>

        </div>
        <h2 class="title-green">Berdasarkan Kelompok Umur</h2>
        <div class="chart-wrapper" style="width:100%; margin: 0 auto; background: white; border-radius: 12px; padding: 20px; position: relative;">
            <canvas id="piramidaChart"></canvas>
        </div>
        <div class="narasi-statistik">
            <div class="narasi-item" style="border-bottom: 5px solid #4698db;">
                <p>
                    Untuk jenis kelamin laki-laki, kelompok umur <strong>{{ $max_laki->kelompok_umur }}</strong>
                    adalah yang tertinggi dengan jumlah <strong>{{ $max_laki->laki_laki }} orang</strong>
                    atau <strong>{{ number_format($persen_max_laki, 2) }}%</strong>.
                    Sedangkan, kelompok umur <strong>{{ $min_laki->kelompok_umur }}</strong>
                    adalah yang terendah dengan jumlah <strong>{{ $min_laki->laki_laki }} orang</strong>
                    atau <strong>{{ number_format($persen_min_laki, 2) }}%</strong>.
                </p>
            </div>

            <div class="narasi-item" style="border-bottom: 5px solid #ec24cb;">
                <p>
                    Untuk jenis kelamin perempuan, kelompok umur <strong>{{ $max_cewe->kelompok_umur }}</strong>
                    adalah yang tertinggi dengan jumlah <strong>{{ $max_cewe->perempuan }} orang</strong>
                    atau <strong>{{ number_format($persen_max_cewe, 2) }}%</strong>.
                    Sedangkan, kelompok umur <strong>{{ $min_cewe->kelompok_umur }}</strong>
                    adalah yang terendah dengan jumlah <strong>{{ $min_cewe->perempuan }} orang</strong>
                    atau <strong>{{ number_format($persen_min_cewe, 2) }}%</strong>.
                </p>
            </div>

        </div>
        <h2 class="title-green">Berdasarkan Dusun / Wilayah</h2>
        <div class="dusun-grid">

            <div class="chart-pie-wrapper">
                <canvas id="dusunChart"></canvas>
            </div>

            <div class="dusun-keterangan">
                <h4 style="margin-bottom: 20px; font-weight: 800; color: #333;">Keterangan Populasi:</h4>
                <ul class="keterangan-list">
                    @foreach($dusun_list as $index => $item)
                    <li>
                        <span class="dot" style="background-color: {{ $chart_colors[$index % count($chart_colors)] }};"></span>

                        <div style="flex-grow: 1; display: flex; justify-content: space-between;">
                            <strong>{{ $item->nama_wilayah }}</strong>
                            <span>{{ number_format($item->laki_laki + $item->perempuan) }} Jiwa</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <h2 class="title-green">Berdasarkan Pendidikan</h2>
        <div class="chart-bar-wrapper">
            <canvas id="pendidikanChart"></canvas>
        </div>
        <h2 class="title-green">Berdasarkan Pekerjaan</h2>
        <div class="pekerjaan-grid-main">

            <div class="pekerjaan-table-wrapper">
                <table class="pekerjaan-table">
                    <thead>
                        <tr>
                            <th>Jenis Pekerjaan</th>
                            <th style="width: 80px; text-align: center;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pekerjaan_sisanya as $item)
                        <tr>
                            <td>{{ $item->nama_pekerjaan }}</td>
                            <td style="text-align: center; font-weight: bold;">{{ $item->jumlah }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pekerjaan-cards-grid">
                @foreach($pekerjaan_top as $item)
                <div class="job-card">
                    <span class="job-name">{{ $item->nama_pekerjaan }}</span>
                    <span class="job-count">{{ $item->jumlah }}</span>
                </div>
                @endforeach
            </div>

        </div>
        <h2 class="title-green">Berdasarkan Wajib Pilih</h2>
        <div class="chart-bar-wrapper">
            <canvas id="wajibPilihChart"></canvas>
        </div>
        <h2 class="title-green">Berdasarkan Perkawinan</h2>
        <div class="infografis-grid-triple">
            @foreach($kawin_data as $item)
            <div class="stat-card-mini">
                <img src="{{ $icons[$item->status] ?? $default_icon }}" alt="{{ $item->status }}">

                <div class="card-info">
                    <span class="label">{{ $item->status }}</span>
                    <span class="value color-green">{{ number_format($item->jumlah, 0, ',', '.') }}</span>
                </div>
            </div>
            @endforeach

        </div>
        <h2 class="title-green">Berdasarkan Agama</h2>
        <div class="infografis-grid-triple">
            @foreach($agama_data as $item)
            <div class="stat-card-mini">
                <img src="{{ $agamaIcons[$item->agama] ?? $defaultAgamaIcon }}" alt="{{ $item->agama }}">

                <div class="card-info">
                    <span class="label">{{ $item->agama }}</span>
                    <span class="value color-green">{{ number_format($item->jumlah, 0, ',', '.') }}</span>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const labelsWajibPilih = @json($labels);
            const dataWajibPilih = @json($values);

            window.renderWajibPilihChart('wajibPilihChart', labelsWajibPilih, dataWajibPilih);
            const labelsPendidikan = @json($eduLabels);
            const dataPendidikan = @json($eduData);

            window.renderPendidikanChart('pendidikanChart', labelsPendidikan, dataPendidikan);
            const labelsDusun = @json($dusunLabels);
            const dataDusun = @json($dusunData);

            // Memanggil fungsi dari app.js
            window.renderDusunChart('dusunChart', labelsDusun, dataDusun);
            const labels = @json($piramidaLabels);
            const dataLaki = @json($lakiLaki);
            const dataPerempuan = @json($perempuan);

            // Jalankan fungsi dari app.js
            window.renderPiramidaChart('piramidaChart', labels, dataLaki, dataPerempuan);
        });

    </script>
    <script>
        // ... (Script Piramida Chart sebelumnya biarkan di atas) ...

        // --- CHART DUSUN CONFIG ---
        const ctxDusun = document.getElementById('dusunChart').getContext('2d');

        new Chart(ctxDusun, {
            type: 'doughnut', // Bisa ganti 'pie' jika ingin lingkaran penuh
            data: {
                labels: @json($dusun_labels)
                , datasets: [{
                    data: @json($dusun_totals)
                    , backgroundColor: @json($chart_colors)
                    , hoverOffset: 4
                }]
            }
            , options: {
                responsive: true
                , plugins: {
                    legend: {
                        display: false // Kita sembunyikan legend bawaan karena sudah buat list sendiri
                    }
                    , tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.raw + ' Jiwa';
                                return label;
                            }
                        }
                    }
                }
            }
        });

    </script>
    <script>
        const ctx = document.getElementById('piramidaChart').getContext('2d');

        // Data dari Controller Laravel
        const labels = @json($categories);
        const dataLaki = @json($data_laki);
        const dataPerempuan = @json($data_perempuan);

        // Ubah data laki-laki menjadi negatif agar grafiknya ke kiri
        const dataLakiNegatif = dataLaki.map(value => -value);

        new Chart(ctx, {
            type: 'bar'
            , data: {
                labels: labels
                , datasets: [{
                        label: 'Laki-laki'
                        , data: dataLakiNegatif
                        , backgroundColor: '#3b82f6', // Biru
                        borderRadius: 5
                    , }
                    , {
                        label: 'Perempuan'
                        , data: dataPerempuan
                        , backgroundColor: '#ec4899', // Pink
                        borderRadius: 5
                    , }
                ]
            }
            , options: {
                indexAxis: 'y', // Membuat chart horizontal
                scales: {
                    x: {
                        stacked: true
                        , ticks: {
                            callback: function(value) {
                                return Math.abs(value); // Hilangkan tanda minus di label bawah
                            }
                        }
                    }
                    , y: {
                        stacked: true
                        , beginAtZero: true
                    }
                }
                , plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += Math.abs(context.raw); // Hilangkan tanda minus di tooltip
                                return label;
                            }
                        }
                    }
                }
                , responsive: true
            , }
        });

    </script>
</x-frontend>
