<x-frontend>
    <section class="sdgs-page">
        <div class="infografis-container">

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

        </div>

    </section>
    <section class="sdgs-goals-grid">
        <div class="container mx-auto px-4 py-10">
            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Capaian 18 Tujuan SDGs Desa</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Loop dimulai di sini, $item dibuat di sini --}}
                @forelse($sdgs_items as $item)

                <div class="card bg-white shadow-md border border-gray-100 rounded-xl overflow-hidden hover:shadow-lg transition group">
                    <div class="p-5 flex items-start gap-4">

                        {{-- Panggil fungsi Model di sini --}}
                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-lg font-bold text-white text-xl" style="background-color: {{ $item->getColor() }};">
                            {{ $item->goal_number }}
                        </div>

                        <div class="flex-1">
                            <h4 class="font-bold text-gray-800 text-lg mb-2 group-hover:text-blue-600 transition">
                                {{ $item->title }}
                            </h4>

                            {{-- Progress Bar --}}
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-1">
                                <div class="h-2.5 rounded-full" style="width: {{ $item->score }}%; 
                                        background-color: {{ $item->score < 40 ? '#ef4444' : ($item->score < 70 ? '#eab308' : '#22c55e') }}">
                                </div>
                            </div>

                            <div class="flex justify-between items-center mt-1">
                                <span class="text-xs text-gray-500">Capaian</span>
                                <span class="font-bold text-sm">{{ number_format($item->score, 2) }}</span>
                            </div>
                        </div>

                    </div>
                </div>

                @empty
                <div class="col-span-3 text-center py-10 text-gray-500">
                    Data SDGs tahun {{ $tahun_pilih }} belum diinput.
                </div>
                @endforelse
                {{-- Loop berakhir, $item hilang (menjadi undefined) di sini --}}

            </div>
        </div>
    </section>
</x-frontend>
