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
        <div class="sdg-container">
            <div class="sdg-content-grid">

                <div class="sdg-text-box">
                    <h2 class="sdg-subtitle">SDGs Desa</h2>
                    <p class="sdg-desc">
                        SDGs desa mengacu pada upaya yang dilakukan di tingkat desauntuk mencapai Tujuan Pembangunan Berkelanjutan (Sustainable Development Goals/SDGs). SDGs merupakan agenda global yang ditetapkan oleh Perserikatan Bangsa-Bangsa (PBB) untuk mengatasi berbagai tantangan sosial, ekonomi, dan lingkungan di seluruh dunia
                    </p>

                    <div class="sdg-score-card">
                        <div class="score-label">
                            Skor SDGs Desa<br>Kersik
                        </div>
                        <div class="score-number">
                            44.63
                        </div>
                    </div>
                </div>

                <div class="sdg-image-box">
                    <img src="{{ asset('assets/img/sdgs.png') }}" alt="Ilustrasi SDGs" onerror="this.src='https://placehold.co/600x500?text=Ilustrasi+3D+SDGs'">
                </div>

            </div>

        </div>


        <div class="container mx-auto px-4 py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Loop dimulai di sini --}}
                @forelse($sdgs_items as $item)

                <div class="card bg-white shadow-sm border border-gray-100 rounded-2xl overflow-hidden hover:shadow-md transition p-6 flex flex-col justify-between h-full group">

                    {{-- 1. Judul di Paling Atas --}}
                    <h4 class="font-extrabold text-black text-xl mb-6 leading-tight group-hover:text-blue-600 transition">
                        {{ $item->title }}
                    </h4>

                    {{-- 2. Baris Bawah: Ikon/Warna (Kiri) & Nilai (Kanan) --}}
                    <div class="flex justify-between items-end mt-auto">

                        {{-- Kiri: Kotak Nomor SDGs (Ukurannya diperbesar) --}}
                        <div class="flex-shrink-0 w-20 h-20 flex items-center justify-center rounded-xl font-black text-white text-4xl shadow-sm" style="background-color: {{ $item->getColor() }};">
                            {{ $item->goal_number }}
                        </div>

                        {{-- Kanan: Tulisan Nilai dan Angka Besar --}}
                        <div class="text-right">
                            <span class="block text-sm text-gray-800 font-medium mb-1">Nilai</span>
                            <span class="block font-black text-5xl text-black leading-none tracking-tighter">
                                {{ number_format($item->score, 2) }}
                            </span>
                        </div>

                    </div>

                </div>

                @empty
                {{-- Pesan jika data kosong --}}
                {{-- Menggunakan col-span-full agar tulisan berada persis di tengah grid --}}
                <div class="col-span-full text-center py-10 text-gray-500 font-medium">
                    Data SDGs tahun {{ $tahun_pilih }} belum diinput.
                </div>
                @endforelse
                {{-- Loop berakhir --}}

            </div>
        </div>


    </section>
</x-frontend>
