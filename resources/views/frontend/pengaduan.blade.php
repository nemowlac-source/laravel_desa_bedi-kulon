<x-frontend>
    {{-- Header Khusus Mobile --}}
    <div class="block md:hidden bg-[#2ac0b4] text-white px-5 py-4 flex items-center gap-2 sticky top-0 z-[50]">
        <a href="{{ route('frontend.dashboard') }}" class="hover:opacity-80">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
        </a>
        <h1 class="text-lg font-bold">Layanan Pengaduan</h1>
    </div>

    <section class="min-h-screen bg-[#f9f9f9] pb-24 md:py-12">
        <div class="max-w-xl mx-auto px-5 py-8 bg-white md:rounded-2xl md:shadow-sm">

            {{-- Deskripsi Singkat --}}
            <div class="mb-2 text-center md:text-left">
                <h2 class="text-2xl font-black text-gray-800 mb-2">FORM PENGADUAN</h2>
            </div>

            <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-1">
                @csrf

                {{-- Field Nama --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                    <input type="text" name="nama" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#2ac0b4]/20 focus:border-[#2ac0b4] outline-none transition-all text-sm" placeholder="Contoh: Budi Santoso" required>
                </div>

                {{-- Field No HP --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-700">Nomor WhatsApp <span class="text-red-500">*</span></label>
                    <input type="text" name="no_hp" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#2ac0b4]/20 focus:border-[#2ac0b4] outline-none transition-all text-sm" placeholder="0812xxxx" required>
                </div>

                {{-- Field Kategori --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-700">Kategori <span class="text-red-500">*</span></label>
                    <select name="kategori" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#2ac0b4]/20 focus:border-[#2ac0b4] outline-none transition-all text-sm appearance-none" required>
                        <option value="" disabled selected>Pilih kategori aduan</option>
                        <option value="Infrastruktur">Infrastruktur (Jalan, Jembatan, dll)</option>
                        <option value="Pelayanan">Pelayanan Masyarakat</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                {{-- Field Detail Pengaduan --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-700">Detail Pengaduan <span class="text-red-500">*</span></label>
                    <textarea name="isi_pengaduan" rows="4" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#2ac0b4]/20 focus:border-[#2ac0b4] outline-none transition-all text-sm resize-none" placeholder="Ceritakan kendala atau saran Anda secara detail..." required></textarea>
                </div>

                {{-- Field Lampiran --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-700">Lampiran Foto/PDF</label>
                    <div class="relative">
                        <input type="file" name="lampiran" id="input-file-mobile" class="hidden" accept=".jpg,.jpeg,.png,.pdf">
                        <label for="input-file-mobile" class="flex flex-col items-center justify-center w-full py-8 border-2 border-dashed border-gray-200 rounded-xl hover:bg-gray-50 cursor-pointer transition-colors group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-300 group-hover:text-[#2ac0b4] transition-colors mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                                <path d="M7 9l5 -5l5 5"></path>
                                <path d="M12 4l0 12"></path>
                            </svg>
                            <span id="file-name-mobile" class="text-xs text-gray-400 font-medium">Klik untuk unggah (Maks. 5MB)</span>
                        </label>
                    </div>
                </div>

                {{-- Tombol Kirim --}}
                <button type="submit" class="w-full bg-[#2ac0b4] hover:bg-[#23a096] text-white font-bold py-4 rounded-xl shadow-lg shadow-[#2ac0b4]/20 transition-all active:scale-[0.98] flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M10 14l11 -11"></path>
                        <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path>
                    </svg>
                    Kirim Pengaduan
                </button>
            </form>
        </div>
    </section>

    {{-- Script untuk ganti teks file --}}
    @push('scripts')
    <script>
        const fileInput = document.getElementById('input-file-mobile');
        const fileName = document.getElementById('file-name-mobile');

        fileInput.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                fileName.textContent = this.files[0].name;
                fileName.classList.add('text-[#2ac0b4]', 'font-bold');
            }
        });

    </script>
    @endpush
</x-frontend>
