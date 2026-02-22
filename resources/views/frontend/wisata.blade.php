<x-frontend>
    <style>
        /* Styling Header mirip contoh */
        .page-header {
            margin-bottom: 20px;
        }

        .page-title {
            color: #8ce366;
            /* Hijau cerah sesuai contoh */
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 5px;
            text-transform: uppercase;
            align-items: start;
            display: flex;

        }

        .page-subtitle {
            color: #555;
            font-size: 1.1rem;
            margin-left: 0.1px;
            align-items: start;
            display: flex;

        }

        /* Styling Card */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            position: relative;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-img-top {
            width: 100%;
            height: 220px;
            object-cover: cover;
        }

        .card-body {
            padding: 20px;
            padding-bottom: 70px;
            /* Ruang untuk tombol di bawah */
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 12px;
        }

        .card-text {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Tombol Selengkapnya di pojok kanan bawah ⏺️ */
        .btn-selengkapnya {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: linear-gradient(to right, #a2e061, #84d64d);
            color: white !important;
            padding: 8px 20px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            font-size: 0.9rem;
            box-shadow: 0 4px 10px rgba(132, 214, 77, 0.3);
        }

    </style>

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
