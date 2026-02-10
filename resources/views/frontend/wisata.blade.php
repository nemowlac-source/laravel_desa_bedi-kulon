<x-frontend>

    <style>
        /* Reset dan Font Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
        }

        /* Container Utama */
        .container-wisata {
            max-width: 1140px;
            margin: 40px auto;
            padding: 0 20px;
            min-height: 80vh;
        }

        /* Header Halaman */
        .page-header {
            margin-bottom: 40px;
            text-align: center;
        }

        .page-title {
            color: #5cb85c;
            /* Hijau */
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #5cb85c;
            margin: 0 auto 15px auto;
            border-radius: 2px;
        }

        .page-subtitle {
            color: #666;
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Grid Kartu */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Gaya Kartu */
        .card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
            border: 1px solid #eee;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Gambar Thumbnail */
        .card-img-top {
            width: 100%;
            height: 220px;
            object-fit: cover;
            background-color: #eee;
        }

        /* Konten Kartu */
        .card-body {
            padding: 20px;
            padding-bottom: 70px;
            /* Ruang untuk tombol */
            flex-grow: 1;
        }

        .card-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
            color: #333;
        }

        .card-info {
            font-size: 13px;
            color: #5cb85c;
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            gap: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #777;
            line-height: 1.6;
        }

        /* Tombol Selengkapnya */
        .btn-selengkapnya {
            position: absolute;
            bottom: 0;
            right: 0;
            background: linear-gradient(to right, #66cc66, #5cb85c);
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            border-radius: 20px 0 0 0;
            /* Lengkungan kiri atas */
            box-shadow: -2px -2px 5px rgba(0, 0, 0, 0.1);
            transition: opacity 0.3s;
        }

        .btn-selengkapnya:hover {
            opacity: 0.9;
        }

        /* Custom Pagination Wrapper */
        .pagination-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination-wrapper nav div {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }

    </style>

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
