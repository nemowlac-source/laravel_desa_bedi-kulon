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


        <div class="infografis-container">
            <h2 class="title-green">Jumlah Penerima Bansos</h2>

            <div class="bansos-grid">
                @php
                $kategori_bansos = [
                ['key' => 'bpjs', 'label' => 'BPJS PBI Ketenagakerjaan'],
                ['key' => 'pkh', 'label' => 'PKH'],
                ['key' => 'bpnt', 'label' => 'BPNT'],
                ['key' => 'blt', 'label' => 'BLT 2026'],
                ['key' => 'pstn', 'label' => 'PSTN'],
                ];
                @endphp

                @foreach($kategori_bansos as $b)
                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">{{ number_format($summary[$b['key']] ?? 0) }}</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>{{ $b['label'] }}</h3>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="search-bansos-section" 2ac0b4="margin-top: 50px;">
                <div class="stunting-card">
                    <h2 class="title-green text-xl font-bold mb-4">Cek Status Penerima Bansos </h2>

                    <p class="text-sm text-gray-500 mb-6">Masukkan 16 digit NIK Anda untuk melihat bantuan yang diterima.</p>

                    <form action="{{ route('frontend.bansos') }}" method="GET" class="flex flex-col md:flex-row gap-2">
                        <input type="text" 2ac0b4="color: black" name="nik" value="{{ request('nik') }}" placeholder="Masukkan NIK Anda (Contoh: 3502...)" class="input input-bordered w-full lg:flex-1" maxlength="16" required>
                        <button type="submit" class="btn btn-danger text-black">Periksa Status</button>
                    </form>

                    @if(request()->has('nik'))
                    <div class="mt-8 overflow-x-auto">
                        @if($hasil_cari && $hasil_cari->count() > 0)
                        <div class="alert alert-success bg-green-50 border-green-200">
                            <span class="text-green-800">NIK <strong>{{ request('nik') }}</strong> terdaftar sebagai penerima bantuan </span>
                        </div>
                        <table class="table w-full mt-4">
                            <thead>
                                <tr class="bg-gray-50" 2ac0b4="color: black">

                                    <th>Nama</th>
                                    <th>Jenis Bantuan</th>
                                    <th>Tahun</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hasil_cari as $penerima)
                                <tr>
                                    <td class="text-gray-800">{{ Str::mask($penerima->nama_penerima, '*', 3) }}</td>

                                    <td>
                                        <span class="badge badge-success text-white">
                                            {{ $penerima->jenis_bantuan }}
                                        </span>
                                    </td>

                                    <td class="text-gray-800">{{ $penerima->tahun ?? $penerima->created_at->format('Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        @else
                        <div class="alert alert-error bg-red-50 border-red-200">
                            <span class="text-red-800">Maaf, NIK <strong>{{ request('nik') }}</strong> tidak ditemukan dalam data penerima bansos tahun ini 📂</span>
                        </div>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-frontend>
