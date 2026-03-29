<x-frontend>
    {{-- Halaman 404 - Full Height --}}
    {{-- UBAH: bg-[#fafafa] dihapus, ditambah mb-32 dan pb-24 untuk jarak ekstra ke footer --}}
    <section class="min-h-[80vh] flex items-center justify-center  pb-60 my-32">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">

            {{-- Grid 2 Kolom (Kiri: Teks, Kanan: Gambar) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center flex-col-reverse md:flex-row">

                {{-- Bagian Kiri: Teks & Tombol --}}
                <div class="order-2 md:order-1 text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 tracking-tight">
                        Halaman tidak ditemukan!
                    </h1>

                    <p class="text-gray-500 text-base md:text-lg mb-8 leading-relaxed max-w-lg mx-auto md:mx-0">
                        Halaman yang Anda coba buka tidak ada. Anda mungkin salah mengetik alamatnya, atau halamannya telah dipindahkan ke URL lain. Jika Anda menganggap ini adalah kesalahan, hubungi kami.
                    </p>

                    <div class="flex flex-wrap items-center justify-center md:justify-start gap-4">
                        {{-- Tombol Halaman Utama (Outline Hijau) --}}
                        <a href="{{ route('frontend.dashboard') }}" class="px-6 py-2.5 border-2 border-[#2ac0b4] text-[#2ac0b4] hover:bg-[#2ac0b4] hover:text-white font-bold rounded-lg transition-all duration-300">
                            Halaman utama
                        </a>

                        {{-- Tombol Kembali (Outline Biru) - Menggunakan JS History Back --}}
                        <button onclick="window.history.back()" class="px-6 py-2.5 border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-bold rounded-lg transition-all duration-300">
                            Kembali
                        </button>
                    </div>
                </div>

                {{-- Bagian Kanan: Ilustrasi 404 --}}
                <div class="order-1 md:order-2 flex justify-center md:justify-end">
                    {{-- Pastikan kamu menyimpan gambar 404 milikmu di folder public/images/ --}}
                    <img src="{{ asset('assets/img/404.png') }}" alt="404 Not Found" class="w-full max-w-md object-contain drop-shadow-sm" onerror="this.onerror=null; this.src='https://placehold.co/600x400?text=404+Not+Found';">
                </div>

            </div>

        </div>
    </section>
</x-frontend>
