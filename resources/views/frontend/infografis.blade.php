<x-frontend>
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
    <section class="infografis-page">
        <div class="infografis-container">
            <div class="header-infografis">
                <div class="header-container">
                    <div class="brand-title">
                        <h1>INFOGRAFIS<br>DESA Bedi Kulon</h1>
                    </div>

                    <div class="nav-menu">
                        <a href="#" class="nav-item active">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="Penduduk">
                            </div>
                            <span class="nav-text">Penduduk</span>
                        </a>

                        <a href="#" class="nav-item">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2382/2382461.png" alt="APBDes">
                            </div>
                            <span class="nav-text">APBDes</span>
                        </a>

                        <a href="#" class="nav-item">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2560/2560157.png" alt="Stunting">
                            </div>
                            <span class="nav-text">Stunting</span>
                        </a>

                        <a href="#" class="nav-item">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/679/679720.png" alt="Bansos">
                            </div>
                            <span class="nav-text">Bansos</span>
                        </a>

                        <a href="#" class="nav-item">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2544/2544339.png" alt="IDM">
                            </div>
                            <span class="nav-text">IDM</span>
                        </a>

                        <a href="#" class="nav-item">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/5695/5695663.png" alt="SDGs">
                            </div>
                            <span class="nav-text">SDGs</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="demografi-content">
                <div class="demografi-text">
                    <h2 class="title-green">DEMOGRAFI PENDUDUK</h2>
                    <p>Memberikan informasi lengkap mengenai karakteristik demografi penduduk suatu wilayah. Mulai dari jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, agama, dan aspek penting lainnya yang menggambarkan komposisi populasi secara rinci.</p>
                </div>
                <div class="demografi-visual">
                    <img src="https://img.freepik.com/free-vector/gradient-dynamic-blue-lines-background_23-2148995756.jpg" alt="Visualisasi Data">
                </div>
            </div>
        </div>
    </section>

    <section class="stat-penduduk-section">
        <div class="stat-container">
            <h2 class="title-green-sub">Jumlah Penduduk dan Kepala Keluarga</h2>

            <div class="stat-penduduk-grid">
                <div class="stat-card-penduduk">
                    <div class="stat-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/437/437501.png" alt="Icon Total">
                    </div>
                    <div class="stat-data">
                        <span class="stat-label">TOTAL PENDUDUK</span>
                        <span class="stat-value color-green">1.162 <small>Jiwa</small></span>
                    </div>
                </div>

                <div class="stat-card-penduduk">
                    <div class="stat-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/3667/3667325.png" alt="Icon KK">
                    </div>
                    <div class="stat-data">
                        <span class="stat-label">KEPALA KELUARGA</span>
                        <span class="stat-value color-green">310 <small>Jiwa</small></span>
                    </div>
                </div>

                <div class="stat-card-penduduk">
                    <div class="stat-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="Icon Perempuan">
                    </div>
                    <div class="stat-data">
                        <span class="stat-label">PEREMPUAN</span>
                        <span class="stat-value color-light-green">554 <small>Jiwa</small></span>
                    </div>
                </div>

                <div class="stat-card-penduduk">
                    <div class="stat-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png" alt="Icon Laki-laki">
                    </div>
                    <div class="stat-data">
                        <span class="stat-label">LAKI-LAKI</span>
                        <span class="stat-value color-light-green">608 <small>Jiwa</small></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="piramida-section">
        <div class="stat-container">
            <h2 class="title-blue-bold">Berdasarkan Kelompok Umur</h2>

            <div class="chart-wrapper" style="max-width: 900px; margin: 0 auto; background: white; border-radius: 12px; padding: 20px;">
                <canvas id="piramidaChart"></canvas>
            </div>

            <div class="narasi-statistik">
                <div class="narasi-item border-green">
                    <p>Untuk jenis kelamin laki-laki, kelompok umur <strong>5-9</strong> adalah kelompok umur tertinggi dengan jumlah <strong>41 orang</strong> atau <strong>11.29%</strong>. Sedangkan, kelompok umur <strong>85+, 80-84 dan 75-79 tahun</strong> adalah yang terendah dengan masing-masing berjumlah <strong>1 orang</strong> atau <strong>0.28%</strong>.</p>
                </div>
                <div class="narasi-item border-orange">
                    <p>Untuk jenis kelamin perempuan, kelompok umur <strong>10-14</strong> adalah kelompok umur tertinggi dengan jumlah <strong>45 orang</strong> atau <strong>12.40%</strong>. Sedangkan, kelompok umur <strong>85+</strong> adalah yang terendah dengan jumlah <strong>0 orang</strong> atau <strong>0%</strong>.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dusun-section">
        <div class="stat-container">
            <h2 class="title-blue-bold">Berdasarkan Dusun</h2>

            <div class="dusun-grid">
                <div class="chart-pie-wrapper">
                    <canvas id="dusunChart"></canvas>
                </div>

                <div class="dusun-keterangan">
                    <h4>Keterangan:</h4>
                    <ul class="keterangan-list">
                        <li>
                            <span class="dot piasan"></span>
                            <strong>Piasan :</strong> 470 Jiwa
                        </li>
                        <li>
                            <span class="dot mubur"></span>
                            <strong>Mubur Kecil :</strong> 256 Jiwa
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="pendidikan-section">
        <div class="stat-container">
            <h2 class="title-blue-bold">Berdasarkan Pendidikan</h2>

            <div class="chart-bar-wrapper">
                <canvas id="pendidikanChart"></canvas>
            </div>
        </div>
    </section>

    <section class="pekerjaan-section">
        <div class="stat-container">
            <h2 class="title-green">Berdasarkan Pekerjaan</h2>

            <div class="pekerjaan-grid-main">
                <div class="pekerjaan-table-wrapper">
                    <table class="pekerjaan-table">
                        <thead>
                            <tr>
                                <th>Jenis Pekerjaan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pegawai Negeri Sipil (PNS)</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>Guru Swasta</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>Perawat Swasta</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Karyawan Honorer</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Guru</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Buruh Harian Lepas</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Tukang Batu</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Buruh Tani/Perkebunan</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="pekerjaan-cards-grid">
                    <div class="job-card">
                        <span class="job-name">Pelajar/Mahasiswa</span>
                        <span class="job-count">327</span>
                    </div>
                    <div class="job-card">
                        <span class="job-name">Belum/Tidak Bekerja</span>
                        <span class="job-count">274</span>
                    </div>
                    <div class="job-card">
                        <span class="job-name">Mengurus Rumah Tangga</span>
                        <span class="job-count">272</span>
                    </div>
                    <div class="job-card">
                        <span class="job-name">Karyawan Swasta</span>
                        <span class="job-count">117</span>
                    </div>
                    <div class="job-card">
                        <span class="job-name">Nelayan/Perikanan</span>
                        <span class="job-count">50</span>
                    </div>
                    <div class="job-card">
                        <span class="job-name">Petani/Pekebun</span>
                        <span class="job-count">39</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wajib-pilih-section">
        <div class="stat-container">
            <h2 class="title-green">Berdasarkan Wajib Pilih</h2>

            <div class="chart-bar-wrapper">
                <canvas id="wajibPilihChart"></canvas>
            </div>
        </div>
    </section>

    <section class="perkawinan-section">
        <div class="stat-container">
            <h2 class="title-green">Berdasarkan Perkawinan</h2>
            <div class="infografis-grid-triple">
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" alt="Belum Kawin">
                    <div class="card-info">
                        <span class="label">Belum Kawin</span>
                        <span class="value color-green">624</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/3656/3656910.png" alt="Kawin">
                    <div class="card-info">
                        <span class="label">Kawin</span>
                        <span class="value color-green">459</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/3141/3141151.png" alt="Cerai Mati">
                    <div class="card-info">
                        <span class="label">Cerai Mati</span>
                        <span class="value color-green">69</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/2912/2912781.png" alt="Kawin Tercatat">
                    <div class="card-info">
                        <span class="label">Kawin Tercatat</span>
                        <span class="value color-green">5</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/4137/4137063.png" alt="Cerai Hidup">
                    <div class="card-info">
                        <span class="label">Cerai Hidup</span>
                        <span class="value color-green">4</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/10543/10543315.png" alt="Tidak Tercatat">
                    <div class="card-info">
                        <span class="label">Kawin Tidak Tercatat</span>
                        <span class="value color-green">0</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="agama-section">
        <div class="stat-container">
            <h2 class="title-green">Berdasarkan Agama</h2>
            <div class="infografis-grid-triple">
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/2000/2000100.png" alt="Islam">
                    <div class="card-info">
                        <span class="label">Islam</span>
                        <span class="value color-green">1.162</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/1155/1155255.png" alt="Kristen">
                    <div class="card-info">
                        <span class="label">Kristen</span>
                        <span class="value color-green">0</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/2663/2663300.png" alt="Katolik">
                    <div class="card-info">
                        <span class="label">Katolik</span>
                        <span class="value color-green">0</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/10390/10390977.png" alt="Hindu">
                    <div class="card-info">
                        <span class="label">Hindu</span>
                        <span class="value color-green">0</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/2501/2501538.png" alt="Buddha">
                    <div class="card-info">
                        <span class="label">Buddha</span>
                        <span class="value color-green">0</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/10390/10390977.png" alt="Hindu">
                    <div class="card-info">
                        <span class="label">Konghucu</span>
                        <span class="value color-green">0</span>
                    </div>
                </div>
                <div class="stat-card-mini">
                    <img src="https://cdn-icons-png.flaticon.com/512/2501/2501538.png" alt="Buddha">
                    <div class="card-info">
                        <span class="label">Kepercayaan lainnya</span>
                        <span class="value color-green">0</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const wpCtx = document.getElementById('wajibPilihChart').getContext('2d');

        new Chart(wpCtx, {
            type: 'bar',
            data: {
                labels: ['2024', '2025', '2026'], // Tahun sesuai gambar
                datasets: [{
                    label: 'Jumlah Wajib Pilih',
                    data: [800, 825, 850], // Data angka sesuai label di atas batang
                    backgroundColor: '#438e0d', // Hijau tua sesuai gambar
                    borderRadius: 5,
                    barThickness: 80 // Membuat batang lebih tebal seperti di gambar
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 1000, // Skala maksimal sesuai gambar
                        ticks: {
                            stepSize: 200
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.raw + ' Jiwa';
                            }
                        }
                    }
                }
            }
        });
    </script>

    <script>
        const eduCtx = document.getElementById('pendidikanChart').getContext('2d');

        new Chart(eduCtx, {
            type: 'bar',
            data: {
                labels: [
                    'Tidak/Belum Sekolah',
                    'Belum Tamat SD/Sederajat',
                    'Tamat SD/Sederajat',
                    'SLTP/Sederajat',
                    'SLTA/Sederajat',
                    'Diploma I/II',
                    'Diploma III/Sarjana Muda',
                    'Diploma IV/Strata I',
                    'Strata II',
                    'Strata III'
                ],
                datasets: [{
                    label: 'Jumlah Penduduk',
                    data: [181, 93, 180, 78, 132, 5, 11, 46, 0, 0], // Data sesuai gambar
                    backgroundColor: '#0d2481', // Biru tua sesuai gambar
                    borderRadius: 5,
                    barThickness: 40
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 210, // Menyesuaikan skala y sesuai gambar
                        ticks: {
                            stepSize: 30
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 10
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false // Sembunyikan legenda karena sudah jelas dari judul
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.raw + ' Orang';
                            }
                        }
                    }
                }
            }
        });
    </script>

    <script>
        const pieCtx = document.getElementById('dusunChart').getContext('2d');

        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Piasan', 'Mubur Kecil'],
                datasets: [{
                    data: [470, 256], // Data jiwa sesuai gambar
                    backgroundColor: [
                        '#5b73c7', // Biru untuk Piasan
                        '#90cd76' // Hijau untuk Mubur Kecil
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // Kita gunakan keterangan custom di samping
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let total = 470 + 256;
                                let value = context.raw;
                                let percentage = ((value / total) * 100).toFixed(2);
                                return context.label + ': ' + value + ' Jiwa (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });
    </script>

    <script>
        const pieCtx = document.getElementById('dusunChart').getContext('2d');

        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Piasan', 'Mubur Kecil'],
                datasets: [{
                    data: [470, 256], // Data jiwa sesuai gambar
                    backgroundColor: [
                        '#5b73c7', // Biru untuk Piasan
                        '#90cd76' // Hijau untuk Mubur Kecil
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // Kita gunakan keterangan custom di samping
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let total = 470 + 256;
                                let value = context.raw;
                                let percentage = ((value / total) * 100).toFixed(2);
                                return context.label + ': ' + value + ' Jiwa (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('piramidaChart').getContext('2d');

            const dataLaki = [-23, -41, -40, -34, -22, -32, -27, -17, -36, -24, -19, -18, -18, -6, -3, -1, -1, -1];
            const dataPerempuan = [35, 28, 45, 35, 33, 31, 28, 21, 27, 22, 26, 10, 8, 6, 5, 1, 2, 0];
            const labels = ['0-4', '5-9', '10-14', '15-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65-69', '70-74', '75-79', '80-84', '85+'];

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                            label: 'Laki-Laki',
                            data: dataLaki,
                            backgroundColor: '#689f84',
                            borderRadius: 5,
                        },
                        {
                            label: 'Perempuan',
                            data: dataPerempuan,
                            backgroundColor: '#f5a691',
                            borderRadius: 5,
                        }
                    ]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            stacked: true,
                            ticks: {
                                callback: (value) => Math.abs(value)
                            }
                        },
                        y: {
                            beginAtZero: true,
                            stacked: true,
                            position: 'center'
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: (context) => {
                                    let label = context.dataset.label || '';
                                    return label + ': ' + Math.abs(context.raw) + ' orang';
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>



</x-frontend>