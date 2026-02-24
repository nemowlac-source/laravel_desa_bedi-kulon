<x-frontend>
    <section class="belanja-section-baru">
        <div class="belanja-container-baru">

            <div class="belanja-header-baru">
                <h1 class="belanja-title-baru">Beli Dari Desa</h1>
                <p class="belanja-subtitle-baru">
                    Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa
                </p>
            </div>

            <div class="belanja-grid-baru">

                @forelse($products as $item)
                <div class="belanja-card-baru">
                    <a href="{{ route('frontend.belanja.detail', $item->id) }}" class="belanja-link-wrapper">

                        <div class="belanja-thumb-baru">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" onerror="this.src='https://placehold.co/400x300?text=No+Image'">
                        </div>

                        <div class="belanja-content-baru">
                            <h3 class="belanja-name-baru">{{ $item->nama_produk }}</h3>

                            <div class="belanja-meta-baru">
                                <div class="belanja-stars">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                </div>

                                <div class="belanja-price-baru">
                                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 15px;">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
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
