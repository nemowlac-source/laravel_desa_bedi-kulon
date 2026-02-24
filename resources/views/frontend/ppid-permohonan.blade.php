<x-frontend>


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
