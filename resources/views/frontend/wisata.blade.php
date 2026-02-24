<x-frontend>
    <section class="wisata-page py-10">
        <div class="container mx-auto px-4">

            <div class="page-header">
                <h1 class="page-title">WISATA DESA</h1>
                <p class="page-subtitle">Segala hal mengenai wisata Desa Bedi Kulon</p>
            </div>

            <div class="grid-container">
                @forelse($wisatas as $item)
                <div class="card">
                    <a href="{{ route('frontend.show', $item->id) }}">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_wisata }}" class="card-img-top" onerror="this.src='https://placehold.co/400x220?text=No+Image'">
                    </a>

                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="{{ route('frontend.show', $item->id) }}" class="hover:text-green-500 transition-colors">
                                {{ $item->nama_wisata }}
                            </a>
                        </h3>

                        <p class="card-text">
                            {{ Str::limit(strip_tags($item->deskripsi), 110) }}
                        </p>
                    </div>

                    <a href="{{ route('frontend.show', $item->id) }}" class="btn-selengkapnya">
                        Selengkapnya
                    </a>
                </div>
                @empty
                <div class="col-span-full text-center py-20">
                    <h3 class="text-gray-400">Belum ada data wisata tersedia.</h3>
                </div>
                @endforelse
            </div>

            <div class="mt-10">
                {{ $wisatas->links() }}
            </div>

        </div>
    </section>
</x-frontend>
