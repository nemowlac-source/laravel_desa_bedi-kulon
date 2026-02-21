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


        <div class="infografis-container">
            <h2 class="title-green">Jumlah Penerima Bansos</h2>

            <div class="bansos-grid">
                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">67</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>BPJS PBI Ketenagakerjaan</h3>
                    </div>
                </div>

                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">41</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>PKH</h3>
                    </div>
                </div>

                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">35</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>BPNT</h3>
                    </div>
                </div>

                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">0</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>BLT 2024</h3>
                    </div>
                </div>

                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">0</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>PSTN</h3>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold mb-2">Transparansi Bantuan Sosial</h1>
            <p class="opacity-90">Data Penerima Bantuan Desa Bedi Kulon Tahun {{ date('Y') }}</p>
        </div>
    </section>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white p-4 rounded-lg shadow mb-6">
            <form action="{{ route('bansos.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">

                <select name="jenis" class="select select-bordered w-full md:w-1/4" onchange="this.form.submit()">
                    <option value="">Semua Jenis Bantuan</option>
                    @foreach($list_jenis as $j)
                    <option value="{{ $j }}" {{ request('jenis') == $j ? 'selected' : '' }}>{{ $j }}</option>
                    @endforeach
                </select>

                <div class="relative w-full">
                    <input type="text" name="cari" value="{{ request('cari') }}" placeholder="Cari nama penerima..." class="input input-bordered w-full pr-10">
                    <button type="submit" class="absolute right-2 top-2 text-gray-500 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data dari Controller
            const chartLabels = @json($chart_labels);
            const chartData = @json($chart_data);

            // Jalankan fungsi yang ada di app.js
            window.renderBansosChart('bansosChart', chartLabels, chartData);
        });

    </script>
</x-frontend>
