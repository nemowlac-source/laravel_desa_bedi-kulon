<x-frontend>
    <section class="stunting-section">
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
    <section class="bg-blue-600 py-12 text-white text-center">
        <h1 class="text-3xl font-bold mb-2">Data Stunting & Gizi Desa</h1>
        <p class="opacity-80">Monitoring tumbuh kembang balita Desa Bedi Kulon</p>
    </section>
    <div class="container mx-auto px-4 py-8">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white p-6 rounded-lg shadow text-center border-l-4 border-blue-500">
                <div class="text-3xl font-bold text-gray-800">{{ $total_balita }}</div>
                <div class="text-sm text-gray-500">Total Balita Diukur</div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow text-center border-l-4 border-green-500">
                <div class="text-3xl font-bold text-green-600">{{ $jml_normal }}</div>
                <div class="text-sm text-gray-500">Balita Sehat (Normal)</div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow text-center border-l-4 border-red-500">
                <div class="text-3xl font-bold text-red-600">{{ $jml_stunting }}</div>
                <div class="text-sm text-gray-500">Indikasi Stunting</div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow text-center border-l-4 border-yellow-500">
                <div class="text-3xl font-bold text-yellow-600">{{ number_format($persen_stunting, 1) }}%</div>
                <div class="text-sm text-gray-500">Angka Prevalensi</div>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">

            <div class="bg-white p-6 rounded-lg shadow md:col-span-1">
                <h3 class="font-bold text-lg mb-4 text-center">Sebaran Status Gizi</h3>
                <canvas id="stuntingChart"></canvas>
            </div>

            <div class="bg-white p-6 rounded-lg shadow md:col-span-2">
                <h3 class="font-bold text-lg mb-4">Riwayat Pengukuran Terakhir</h3>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="text-left p-2">Tanggal</th>
                                <th class="text-left p-2">Posyandu</th>
                                <th class="text-left p-2">Inisial Anak</th>
                                <th class="text-center p-2">Umur</th>
                                <th class="text-center p-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_terbaru as $item)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-2 text-sm">{{ \Carbon\Carbon::parse($item->tanggal_ukur)->format('d M Y') }}</td>
                                <td class="p-2 text-sm">{{ $item->posyandu }}</td>
                                <td class="p-2 font-bold">
                                    {{ \Str::limit($item->nama_anak, 1, '***') }}
                                </td>
                                <td class="p-2 text-center">{{ $item->umur_bulan }} Bln</td>
                                <td class="p-2 text-center">
                                    @if($item->status == 'Normal')
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Normal</span>
                                    @elseif($item->status == 'Stunting' || $item->status == 'Sangat Pendek')
                                    <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Stunting</span>
                                    @else
                                    <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">{{ $item->status }}</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $data_terbaru->links() }}
                </div>
            </div>

        </div>

    </div>
    @php
    // Menyiapkan data dari Controller atau data default jika kosong
    $stuntingData = $chart_data ?? [70, 15, 15];
    @endphp

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dataStunting = @json($stuntingData);

            // Memanggil fungsi dari app.js
            window.renderStuntingChart('stuntingChart', dataStunting);
        });

    </script>

</x-frontend>
