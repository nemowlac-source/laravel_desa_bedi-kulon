<x-frontend>

    <style>
        /* --- CSS RESET & BASE --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* --- PAGE CONTENT --- */
        .container-custom {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            min-height: 80vh;
        }

        .page-header {
            margin-bottom: 50px;
            text-align: center;
        }

        .page-title {
            color: #72c02c;
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #72c02c;
            margin: 0 auto 15px auto;
            border-radius: 2px;
        }

        .page-subtitle {
            font-size: 16px;
            color: #555;
            max-width: 600px;
            margin: 0 auto;
        }

        /* --- GRID KARTU POTENSI --- */
        .potensi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            position: relative;
            transition: transform 0.3s ease;
            height: 100%;
            border: 1px solid #f0f0f0;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* Desain Header Gambar Geometris */
        .card-image-header {
            height: 250px;
            position: relative;
            background-color: #eee;
            overflow: hidden;
        }

        /* Gambar Latar Utama (Kiri) */
        .img-main {
            position: absolute;
            top: 0;
            left: 0;
            width: 65%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            transition: transform 0.5s;
        }

        .card:hover .img-main {
            transform: scale(1.05);
        }

        /* Elemen Dekorasi Miring (Tengah) */
        .shape-dark {
            position: absolute;
            top: 0;
            right: 25%;
            width: 30%;
            height: 100%;
            background-color: #3e404e;
            transform: skewX(-20deg);
            z-index: 2;
            border-left: 3px solid white;
        }

        /* Gambar Kecil (Kanan Atas) */
        .img-small-top {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 28%;
            height: 45%;
            object-fit: cover;
            z-index: 3;
            border: 2px solid white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Elemen Dekorasi Aksen (Bawah) */
        .shape-accent {
            position: absolute;
            bottom: 20px;
            left: 55%;
            width: 40px;
            height: 40px;
            background-color: #ff5722;
            transform: rotate(45deg);
            z-index: 4;
            border: 3px solid white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* VARIAN KARTU 2 (Untuk selang-seling warna) */
        .card-2 .shape-dark {
            background-color: #2c3e50;
            /* Biru Tua */
            right: 30%;
        }

        .card-2 .shape-accent {
            background-color: #e67e22;
            /* Oranye */
            left: 50%;
        }

        .card-2 .page-title {
            color: #2980b9;
        }

        /* Konten Teks Kartu */
        .card-body {
            padding: 25px;
            padding-bottom: 70px;
            /* Ruang tombol */
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 18px;
            font-weight: 800;
            color: #333;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .card-location {
            font-size: 12px;
            color: #888;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .card-text {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Batasi 3 baris */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Tombol Selengkapnya */
        .btn-selengkapnya {
            position: absolute;
            bottom: 0;
            right: 0;
            background: linear-gradient(90deg, #a4e766 0%, #7bc62d 100%);
            color: white;
            font-weight: 700;
            padding: 12px 30px;
            border-radius: 20px 0 0 0;
            text-decoration: none;
            font-size: 14px;
            transition: opacity 0.3s;
        }

        /* Variasi Tombol untuk Card 2 */
        .card-2 .btn-selengkapnya {
            background: linear-gradient(90deg, #3498db 0%, #2980b9 100%);
        }

        .btn-selengkapnya:hover {
            opacity: 0.9;
        }

        /* Pagination */
        .pagination-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination-wrapper nav div {
            display: flex;
            justify-content: center;
            gap: 5px;
            flex-wrap: wrap;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .potensi-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>

    <section>
        <div class="container-custom">

            <div class="page-header">
                <h2 class="page-title">POTENSI DESA</h2>
                <div class="title-underline"></div>
                <p class="page-subtitle">Menjelajahi kekayaan alam, budaya, dan inovasi Desa Bedi Kulon</p>
            </div>

            <div class="potensi-grid">

                @forelse($potensis as $item)
                <div class="card {{ $loop->even ? 'card-2' : '' }}">

                    <div class="card-image-header">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-main" onerror="this.src='https://placehold.co/400x300?text=No+Image'">

                        <div class="shape-dark"></div>

                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Detail" class="img-small-top" onerror="this.src='https://placehold.co/150x150?text=Icon'">

                        <div class="shape-accent"></div>
                    </div>

                    <div class="card-body">
                        <h3 class="card-title">{{ $item->judul }}</h3>

                        @if($item->lokasi)
                        <div class="card-location">
                            <i class="ph ph-map-pin"></i> {{ $item->lokasi }}
                        </div>
                        @endif

                        <p class="card-text">
                            {{ Str::limit(strip_tags($item->deskripsi), 120) }}
                        </p>
                    </div>

                    <a href="#" class="btn-selengkapnya">Selengkapnya</a>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px;">
                    <img src="https://placehold.co/100x100?text=Empty" style="margin: 0 auto 20px; opacity: 0.5; border-radius:50%;">
                    <h3 style="color: #888;">Belum ada data potensi.</h3>
                </div>
                @endforelse

            </div>

            <div class="pagination-wrapper">
                {{ $potensis->links() }}
            </div>

        </div>
    </section>

</x-frontend>
