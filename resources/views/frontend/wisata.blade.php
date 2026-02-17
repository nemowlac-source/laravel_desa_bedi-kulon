<x-frontend>
    <section class="wisata-page">
        <div class="container-wisata">

            <div class="page-header">
                <h1 class="page-title">WISATA DESA</h1>
                <div class="title-underline"></div>
                <p class="page-subtitle">Temukan keindahan alam dan destinasi menarik di Desa Bedi Kulon</p>
            </div>

            <div class="grid-container">

                @forelse($wisatas as $item)
                <div class="card">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_wisata }}" class="card-img-top" onerror="this.src='https://placehold.co/400x220?text=No+Image'">

                    <div class="card-body">
                        <h3 class="card-title">{{ $item->nama_wisata }}</h3>

                        <div class="card-info">
                            <span><i class="ph ph-clock"></i> {{ $item->jam_buka ?? 'Buka 24 Jam' }}</span>
                            <span>|</span>
                            <span><i class="ph ph-ticket"></i> {{ $item->harga_tiket ?? 'Gratis' }}</span>
                        </div>

                        <p class="card-text">
                            {{ Str::limit(strip_tags($item->deskripsi), 100) }}
                        </p>
                    </div>

                    <a href="#" class="btn-selengkapnya">Selengkapnya</a>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px;">
                    <img src="https://placehold.co/100x100?text=Empty" style="margin: 0 auto 20px; opacity: 0.5; border-radius: 50%;">
                    <h3 style="color: #888;">Belum ada data wisata.</h3>
                </div>
                @endforelse

            </div>

            <div class="pagination-wrapper">
                {{ $wisatas->links() }}
            </div>

        </div>
    </section>
</x-frontend>
