<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('ppid.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Upload Dokumen PPID</h2>

        <form action="{{ route('ppid.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-bold">Judul Informasi</label>
                <input type="text" name="judul" class="input input-bordered" placeholder="Contoh: APBDes Tahun 2025" required>
            </div>

            @if ($errors->any())
            <div class="alert alert-error mb-4 text-white">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-control mb-4">
                <label class="label font-bold">Kategori Utama <span class="text-error">*</span></label>
                <select name="kategori" id="kategori" class="select select-bordered w-full" required>
                    <option value="">-- Pilih Kategori Utama --</option>
                    <option value="Berkala" {{ old('kategori', $ppid->kategori ?? '') == 'Berkala' ? 'selected' : '' }}>Informasi Secara Berkala</option>
                    <option value="Serta Merta" {{ old('kategori', $ppid->kategori ?? '') == 'Serta Merta' ? 'selected' : '' }}>Informasi Serta Merta</option>
                    <option value="Setiap Saat" {{ old('kategori', $ppid->kategori ?? '') == 'Setiap Saat' ? 'selected' : '' }}>Informasi Setiap Saat</option>
                </select>
            </div>

            <div class="form-control mb-4">
                <label for="sub_kategori" class="label font-bold">Pilih Sub-Kategori / Kelompok Dokumen <span class="text-error">*</span></label>
                <select name="sub_kategori" id="sub_kategori" class="select select-bordered w-full" required>
                    <option value="">-- Pilih Kelompok Dokumen --</option>

                    <optgroup label="Informasi Berkala" class="grup-berkala">
                        <option value="Anggaran Pendapatan dan Belanja Desa" data-kategori="Berkala">Anggaran Pendapatan dan Belanja Desa</option>
                        <option value="Informasi tentang Peraturan, Keputusan, dan/atau Kebijakan" data-kategori="Berkala">Informasi tentang Peraturan, Keputusan, dan/atau Kebijakan</option>
                        <option value="Struktur Organisasi Pemerintah Desa" data-kategori="Berkala">Struktur Organisasi Pemerintah Desa</option>
                        <option value="Informasi tentang program atau kegiatan desa" data-kategori="Berkala">Informasi tentang program atau kegiatan desa</option>
                        <option value="Ringkasan Laporan Keuangan" data-kategori="Berkala">Ringkasan Laporan Keuangan</option>
                        <option value="Informasi Lembaga Desa" data-kategori="Berkala">Informasi Lembaga Desa</option>
                        <option value="Informasi tentang profil desa" data-kategori="Berkala">Informasi tentang profil desa</option>
                    </optgroup>

                    <optgroup label="Informasi Serta Merta" class="grup-serta-merta">
                        <option value="Informasi Bencana Alam" data-kategori="Serta Merta">Informasi Bencana Alam</option>
                        <option value="Informasi Keadaan Darurat / Bahaya" data-kategori="Serta Merta">Informasi Keadaan Darurat / Bahaya</option>
                        <option value="Informasi Wabah Penyakit" data-kategori="Serta Merta">Informasi Wabah Penyakit</option>
                    </optgroup>

                    <optgroup label="Informasi Setiap Saat" class="grup-setiap-saat">
                        <option value="Rencana Kerja Pemerintah Desa" data-kategori="Setiap Saat">Rencana Kerja Pemerintah Desa</option>
                        <option value="Daftar Informasi Publik" data-kategori="Setiap Saat">Daftar Informasi Publik</option>
                        <option value="Realisasi Pembangunan Desa" data-kategori="Setiap Saat">Realisasi Pembangunan Desa</option>
                        <option value="Daftar Aset Desa" data-kategori="Setiap Saat">Daftar Aset Desa</option>
                    </optgroup>

                    <option value="Lainnya" data-kategori="Semua">Lainnya...</option>
                </select>
            </div>



            <div class="form-control mb-4">
                <label class="label font-bold">Deskripsi (Opsional)</label>
                <textarea name="deskripsi" class="textarea textarea-bordered h-24"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="form-control">
                    <label class="label font-bold">Tanggal Upload</label>
                    <input type="date" name="tanggal_upload" class="input input-bordered" value="{{ date('Y-m-d') }}" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">File Dokumen</label>
                    <input type="file" name="file" class="file-input file-input-bordered w-full" required>
                    <span class="text-xs text-gray-500 mt-1">PDF, Word, Excel. Max 5MB.</span>
                </div>
            </div>

            <button class="btn btn-primary w-full text-white">Publikasikan</button>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const kategoriUtama = document.getElementById('kategori');
            const subKategori = document.getElementById('sub_kategori');

            // Simpan semua opsi asli ke dalam memori saat halaman dimuat
            const allOptions = Array.from(subKategori.options);
            const optGroups = subKategori.querySelectorAll('optgroup');

            function filterSubKategori() {
                const pilihanKategori = kategoriUtama.value;

                // Kosongkan isi dropdown sub_kategori sementara
                subKategori.innerHTML = '';

                // Kembalikan opsi default "-- Pilih --"
                subKategori.appendChild(allOptions[0]);

                if (pilihanKategori) {
                    // Sembunyikan semua label OptGroup
                    optGroups.forEach(group => group.style.display = 'none');

                    // Filter dan tampilkan hanya opsi yang cocok dengan kategori utama
                    allOptions.forEach(option => {
                        if (option.getAttribute('data-kategori') === pilihanKategori) {
                            // Tampilkan OptGroup parent-nya
                            if (option.parentElement.tagName === 'OPTGROUP') {
                                option.parentElement.style.display = '';
                                subKategori.appendChild(option.parentElement);
                            }
                            subKategori.appendChild(option);
                        }
                    });

                    // Tambahkan opsi "Lainnya" di paling bawah
                    const opsiLainnya = allOptions.find(opt => opt.value === 'Lainnya');
                    if (opsiLainnya) subKategori.appendChild(opsiLainnya);
                }
            }

            // Eksekusi fungsi setiap kali Admin mengubah Kategori Utama
            kategoriUtama.addEventListener('change', function() {
                filterSubKategori();
                subKategori.value = ''; // Reset pilihan sub kategori agar admin memilih ulang
            });

            // Jalankan sekali saat halaman pertama kali dimuat (penting untuk mode Edit atau saat ada error validasi)
            filterSubKategori();

            // Pilih kembali opsi yang sebelumnya dipilih (jika ada error form / mode Edit)
            const oldSubKategori = "{{ old('sub_kategori', $ppid->sub_kategori ?? '') }}";
            if (oldSubKategori) {
                subKategori.value = oldSubKategori;
            }
        });

    </script>

</x-layouts.admin>
