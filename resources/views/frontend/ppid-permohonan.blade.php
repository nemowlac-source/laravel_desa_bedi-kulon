<x-frontend>
    <style>
        /* --- WADAH UTAMA --- */
        .permohonan-section {
            padding: 80px 20px;
            background-color: #f8fafc;
            /* Latar belakang abu-abu sangat terang */
            font-family: 'Poppins', sans-serif;
            min-height: 80vh;
        }

        .permohonan-container {
            max-width: 1000px;
            /* Dibuat lebih lebar agar form proporsional */
            margin: 0 auto;
        }

        /* --- HEADER --- */
        .permohonan-header {
            margin-bottom: 40px;
        }

        .permohonan-title {
            font-size: 2.8rem;
            font-weight: 800;
            color: #8ade54;
            /* Hijau terang khas contoh */
            margin: 0 0 10px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .permohonan-subtitle {
            font-size: 1.1rem;
            color: #111;
            font-weight: 500;
            margin: 0;
        }

        /* --- FORM CARD --- */
        .permohonan-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            padding: 40px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* 2 Kolom untuk input pendek */
            gap: 30px;
            margin-bottom: 30px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        /* Kolom Penuh untuk Textarea */
        .form-group-full {
            grid-column: 1 / -1;
        }

        .form-label {
            font-size: 0.95rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 10px;
        }

        .text-red {
            color: #ef4444;
            /* Bintang merah untuk required */
        }

        /* Input Field dengan Icon */
        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            color: #9ca3af;
            /* Warna ikon abu-abu */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-icon svg {
            width: 18px;
            height: 18px;
        }

        .form-control-custom {
            width: 100%;
            background-color: #f3f4f6;
            /* Latar input abu-abu halus */
            border: 2px solid transparent;
            border-radius: 8px;
            padding: 15px 15px 15px 45px;
            /* Padding kiri lebih besar untuk tempat ikon */
            font-family: inherit;
            font-size: 0.95rem;
            color: #333;
            transition: all 0.3s ease;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: #8ade54;
            /* Border hijau saat diklik */
            background-color: #ffffff;
        }

        .form-control-custom::placeholder {
            color: #9ca3af;
            font-weight: 500;
        }

        /* Textarea Khusus (Tanpa Ikon) */
        .textarea-custom {
            padding: 15px;
            /* Padding normal karena tanpa ikon */
            min-height: 150px;
            resize: vertical;
        }

        /* Tombol Kirim */
        .btn-submit-wrapper {
            margin-top: 10px;
            text-align: right;
        }

        .btn-submit {
            background-color: #7ED957;
            color: #ffffff;
            font-weight: 800;
            font-size: 1rem;
            padding: 15px 40px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #6bc248;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
                /* Jadi 1 kolom di HP */
                gap: 20px;
            }

            .permohonan-card {
                padding: 25px;
            }

            .permohonan-title {
                font-size: 2.2rem;
            }
        }

    </style>

    <section class="permohonan-section">
        <div class="permohonan-container">

            <div class="permohonan-header">
                <h1 class="permohonan-title">FORM PERMOHONAN INFORMASI</h1>
                <p class="permohonan-subtitle">Harap mengisi form untuk permohonan informasi</p>
            </div>

            <div class="permohonan-card">
                @if(session('success'))
                <div style="background-color: #d1fae5; color: #065f46; padding: 15px 20px; border-radius: 8px; margin-bottom: 25px; border-left: 5px solid #10b981; font-weight: 500;">
                    ✓ {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('frontend.ppid.permohonan.store') }}" method="POST">
                    @csrf

                    <div class="form-grid">

                        <div class="form-group">
                            <label class="form-label">Nama <span class="text-red">*</span></label>
                            <div class="input-wrapper">
                                <span class="input-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </span>
                                <input type="text" name="nama" class="form-control-custom" placeholder="Masukkan nama Anda" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Asal Instansi <span class="text-red">*</span></label>
                            <div class="input-wrapper">
                                <span class="input-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </span>
                                <input type="text" name="instansi" class="form-control-custom" placeholder="Masukkan asal instansi Anda" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Nomor Telepon <span class="text-red">*</span></label>
                            <div class="input-wrapper">
                                <span class="input-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </span>
                                <input type="tel" name="telepon" class="form-control-custom" placeholder="Masukkan nomor telepon Anda" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Alamat E-mail <span class="text-red">*</span></label>
                            <div class="input-wrapper">
                                <span class="input-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg>
                                </span>
                                <input type="email" name="email" class="form-control-custom" placeholder="Masukkan alamat email" required>
                            </div>
                        </div>

                        <div class="form-group form-group-full">
                            <label class="form-label">Permohonan <span class="text-red">*</span></label>
                            <textarea name="permohonan" class="form-control-custom textarea-custom" placeholder="Masukkan permohonan Anda" required></textarea>
                        </div>

                    </div>

                    <div class="btn-submit-wrapper">
                        <button type="submit" class="btn-submit">Kirim Permohonan</button>
                    </div>

                </form>
            </div>

        </div>
    </section>
</x-frontend>
