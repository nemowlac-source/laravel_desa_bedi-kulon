<x-frontend>
    <section class="belanja-section">
        <div class="container-custom">

            <div class="belanja-header">
                <h1 class="belanja-title">Beli Dari Desa</h1>
                <div class="title-underline"></div>
                <p class="belanja-subtitle">
                    Dukung perekonomian lokal dengan membeli produk asli buatan warga desa kami.
                    Kualitas terjamin, harga bersahabat.
                </p>
            </div>

            <div class="product-grid">

                @forelse($products as $item)
                <div class="product-card">

                    <div class="product-thumb">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" onerror="this.src='https://placehold.co/400x300?text=No+Image'">
                    </div>

                    <div class="product-content">
                        <h3 class="product-name">{{ $item->nama_produk }}</h3>

                        <div class="product-seller">
                            <i class="icon-user"></i> {{ $item->penjual }}
                        </div>

                        <p class="product-desc">
                            {{ Str::limit($item->deskripsi, 80) ?? 'Tidak ada deskripsi.' }}
                        </p>

                        <div class="product-footer">
                            <span class="price">Rp{{ number_format($item->harga, 0, ',', '.') }}</span>

                            <a href="{{ route('frontend.belanja.detail', $item->id) }}" class="btn-beli" target="_blank">

                                <i class="icon-phone"></i> Beli
                            </a>
                            {{-- <a href="https://wa.me/{{ $item->no_hp }}?text=Halo, saya tertarik membeli {{ $item->nama_produk }} yang ada di website Desa." class="btn-beli" target="_blank">
                            <i class="icon-phone"></i> Beli
                            </a> --}}
                        </div>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                    <img src="https://placehold.co/100x100?text=Empty" style="margin: 0 auto 20px; opacity: 0.5; border-radius: 50%;">
                    <h3 style="color: #888; font-weight: 600;">Belum ada produk yang ditawarkan.</h3>
                    <p style="color: #aaa;">Silakan hubungi admin desa untuk mendaftarkan produk UMKM Anda.</p>
                </div>
                @endforelse

            </div>

            <div class="pagination-wrapper-center">
                {{ $products->links() }}
            </div>

        </div>
    </section>
</x-frontend>
