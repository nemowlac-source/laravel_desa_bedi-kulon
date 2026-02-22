<x-frontend>
    <section class="wisata-detail-section py-10">
        <div class="container mx-auto px-4 flex flex-col lg:flex-row gap-8">

            <div class="lg:w-2/3" style="background-color:white;padding:20px;">
                <div class="text-sm mb-4 text-gray-500">
                    <a href="/" class="hover:text-green-600">🏠</a> /
                    <a href="{{ route('frontend.wisata') }}" class="hover:text-green-600">Wisata Desa</a> /
                    <span class="font-bold">{{ $wisata->nama_wisata }}</span>
                </div>

                <h1 class="text-4xl font-extrabold mb-4 text-gray-800">{{ $wisata->nama_wisata }}</h1>

                <div class="flex items-center gap-4 text-gray-500 text-sm mb-6">
                    <span><i class="ph ph-calendar"></i> {{ $wisata->created_at->format('d M Y') }}</span>
                    <span><i class="ph ph-user"></i> Ditulis oleh Administrator</span>
                    <span><i class="ph ph-eye"></i> Dilihat {{ $wisata->views ?? 0 }} kali</span>
                </div>

                <img src="{{ asset('storage/' . $wisata->gambar) }}" class="w-full rounded-xl shadow-lg mb-6" alt="{{ $wisata->nama_wisata }}">

                <div class="prose max-w-none text-gray-700 leading-relaxed">
                    {!! $wisata->deskripsi !!}
                </div>
            </div>

            <div class="lg:w-1/3">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="text-xl font-bold mb-6 border-b-2 border-green-500 pb-2 inline-block" style="color: black">Wisata Lainnya</h2>
                    <div class="space-y-6 mt-4">
                        @foreach($wisataLainnya as $lain)
                        <a href="{{ route('frontend.wisata.show', $lain->id) }}" class="flex gap-4 group">
                            <img src="{{ asset('storage/' . $lain->gambar) }}" class="w-20 h-20 object-cover rounded-lg" alt="{{ $lain->nama_wisata }}">
                            <div>
                                <h4 class="font-bold text-gray-800 group-hover:text-green-600 transition-colors">{{ $lain->nama_wisata }}</h4>
                                <span class="text-xs text-gray-400 block mt-1">{{ $lain->created_at->format('d M Y') }}</span>
                                <span class="text-xs text-gray-400">Dilihat {{ $lain->views ?? 0 }} kali</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-frontend>
