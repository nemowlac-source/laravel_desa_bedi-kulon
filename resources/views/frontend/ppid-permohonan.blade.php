<x-frontend>
    <section class="py-10 md:mt-[60px] bg-gray-50/50 min-h-screen" style="margin-top: 40px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Header Form --}}
            <div class="mb-8">
                <h1 class="text-[#2ac0b4] font-extrabold text-2xl mt-[30px] md:text-5xl tracking-tight uppercase mb-1">
                    FORM PERMOHONAN INFORMASI
                </h1>
                <p class="text-gray-600 font-medium text-sm md:text-3x1">
                    Harap mengisi form untuk permohonan informasi
                </p>
            </div>

            {{-- Card Form --}}
            <div class="bg-white shadow-sm border border-gray-100 rounded-2xl p-6 md:p-8">

                {{-- Notifikasi Sukses --}}
                @if(session('success'))
                <div class="bg-emerald-50 text-emerald-700 px-4 py-3 rounded-lg mb-6 border-l-4 border-emerald-500 font-medium text-sm flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('frontend.ppid.permohonan.store') }}" method="POST">
                    @csrf

                    {{-- Grid Layout: 1 Kolom di Mobile, 2 Kolom di Desktop --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6">

                        {{-- Input Nama --}}
                        <div class="col-span-1">
                            <label class="block text-gray-800 font-bold text-[13px] mb-2">Nama <span class="text-red-500">*</span></label>
                            <div class="relative flex items-center">
                                <span class="absolute left-3.5 text-gray-400">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </span>
                                <input type="text" name="nama" class="w-full pl-11 pr-4 py-3 bg-[#f8f9fb] border border-transparent focus:border-[#2ac0b4] focus:bg-white focus:ring-0 rounded-xl text-sm transition-all duration-300 placeholder-gray-400" placeholder="Masukkan nama Anda" required>
                            </div>
                        </div>

                        {{-- Input Instansi --}}
                        <div class="col-span-1">
                            <label class="block text-gray-800 font-bold text-[13px] mb-2">Asal Instansi <span class="text-red-500">*</span></label>
                            <div class="relative flex items-center">
                                <span class="absolute left-3.5 text-gray-400">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </span>
                                <input type="text" name="instansi" class="w-full pl-11 pr-4 py-3 bg-[#f8f9fb] border border-transparent focus:border-[#2ac0b4] focus:bg-white focus:ring-0 rounded-xl text-sm transition-all duration-300 placeholder-gray-400" placeholder="Masukkan asal instansi Anda" required>
                            </div>
                        </div>

                        {{-- Input Nomor Telepon --}}
                        <div class="col-span-1">
                            <label class="block text-gray-800 font-bold text-[13px] mb-2">Nomor Telepon <span class="text-red-500">*</span></label>
                            <div class="relative flex items-center">
                                <span class="absolute left-3.5 text-gray-400">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </span>
                                <input type="tel" name="telepon" class="w-full pl-11 pr-4 py-3 bg-[#f8f9fb] border border-transparent focus:border-[#2ac0b4] focus:bg-white focus:ring-0 rounded-xl text-sm transition-all duration-300 placeholder-gray-400" placeholder="Masukkan nomor telepon Anda" required>
                            </div>
                        </div>

                        {{-- Input Email --}}
                        <div class="col-span-1">
                            <label class="block text-gray-800 font-bold text-[13px] mb-2">Alamat E-mail <span class="text-red-500">*</span></label>
                            <div class="relative flex items-center">
                                <span class="absolute left-3.5 text-gray-400">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg>
                                </span>
                                <input type="email" name="email" class="w-full pl-11 pr-4 py-3 bg-[#f8f9fb] border border-transparent focus:border-[#2ac0b4] focus:bg-white focus:ring-0 rounded-xl text-sm transition-all duration-300 placeholder-gray-400" placeholder="Masukkan alamat email" required>
                            </div>
                        </div>

                        {{-- Textarea Permohonan (Memenuhi 2 kolom di desktop) --}}
                        <div class="col-span-1 md:col-span-2">
                            <label class="block text-gray-800 font-bold text-[13px] mb-2">Permohonan <span class="text-red-500">*</span></label>
                            <textarea name="permohonan" rows="4" class="w-full p-4 bg-[#f8f9fb] border border-transparent focus:border-[#2ac0b4] focus:bg-white focus:ring-0 rounded-xl text-sm transition-all duration-300 placeholder-gray-400 resize-none" placeholder="Masukkan permohonan Anda" required></textarea>
                        </div>

                    </div>

                    {{-- Tombol Submit (Rata kanan) --}}
                    <div class="mt-6 flex justify-end">
                        <button type="submit" class="bg-[#2ac0b4] hover:bg-[#6ec21f] text-white font-bold text-sm px-6 py-3 rounded-lg flex items-center gap-2 transition-all duration-300 shadow-sm hover:shadow-md">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                            </svg>
                            Kirim
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </section>
</x-frontend>
