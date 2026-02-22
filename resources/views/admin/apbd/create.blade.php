<x-layouts.admin>
    <div class="mb-4">
        <a href="{{ route('apbd.index') }}" class="btn btn-ghost">← Kembali</a>
    </div>

    <div class="card bg-white shadow max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6">Tambah Data APBD</h2>

        <form action="{{ route('apbd.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="form-control">
                    <label class="label font-bold">Tahun Anggaran</label>
                    <input type="number" name="tahun" class="input input-bordered" value="{{ date('Y') }}" required>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Jenis Anggaran</label>
                    <select name="jenis" id="jenis_anggaran" class="select select-bordered" required>
                        <option value="Pendapatan">Pendapatan (Uang Masuk)</option>
                        <option value="Belanja">Belanja (Pengeluaran)</option>
                        <option value="Pembiayaan">Pembiayaan (Sisa Anggaran/SiLPA)</option>

                    </select>
                </div>


            </div>

            <div class="form-control mb-4">
                <label class="label font-bold">Kategori / Bidang <span class="text-error">*</span></label>
                <select name="kategori" id="kategori_select" class="select select-bordered w-full" required>
                    <option value="">-- Pilih Kelompok --</option>

                    <optgroup label="KELOMPOK PEMBIAYAAN" id="opt_pembiayaan">
                        <option value="Penerimaan">Penerimaan Pembiayaan (SiLPA, dll)</option>
                        <option value="Pengeluaran">Pengeluaran Pembiayaan</option>
                    </optgroup>


                    <optgroup label="KELOMPOK PENDAPATAN" id="opt_pendapatan">
                        <option value="Pendapatan Asli Desa">Pendapatan Asli Desa</option>
                        <option value="Pendapatan Transfer">Pendapatan Transfer</option>
                        <option value="Pendapatan Lain-lain">Pendapatan Lain-lain</option>
                    </optgroup>

                    <optgroup label="KELOMPOK BELANJA" id="opt_belanja">
                        <option value="Bidang Penyelenggaraan Pemerintahan Desa">1. Pemerintahan Desa</option>
                        <option value="Bidang Pelaksanaan Pembangunan Desa">2. Pembangunan Desa</option>
                        <option value="Bidang Pembinaan Kemasyarakatan">3. Pembinaan Kemasyarakatan</option>
                        <option value="Bidang Pemberdayaan Masyarakat">4. Pemberdayaan Masyarakat</option>
                        <option value="Bidang Penanggulangan Bencana, Keadaan Darurat, dan Mendesak Desa">5. Bencana & Darurat</option>
                    </optgroup>
                </select>
            </div>



            <div class="form-control mb-4">
                <label class="label font-bold">Uraian Detail (Opsional)</label>
                <input type="text" name="uraian" class="input input-bordered" placeholder="Contoh: Dana Desa Tahap 1">
            </div>


            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="form-control">
                    <label class="label font-bold">Jumlah Anggaran (Rp)</label>
                    <input type="number" name="anggaran" class="input input-bordered" placeholder="0" required>
                    <span class="text-xs text-gray-500 mt-1">Isi angka saja tanpa titik/koma.</span>
                </div>
                <div class="form-control">
                    <label class="label font-bold">Realisasi (Rp)</label>
                    <input type="number" name="realisasi" class="input input-bordered" placeholder="0" required>
                    <span class="text-xs text-gray-500 mt-1">Berapa yang sudah terpakai/diterima?</span>
                </div>
            </div>

            <button class="btn btn-primary w-full text-white">Simpan Data</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const jenisSelect = document.getElementById('jenis_anggaran'); // Pastikan ID ini sesuai di select Jenis
            const kategoriSelect = document.getElementById('kategori_select');

            // Identifikasi semua grup kategori
            const optPendapatan = document.getElementById('opt_pendapatan');
            const optBelanja = document.getElementById('opt_belanja');
            const optPembiayaan = document.getElementById('opt_pembiayaan');

            function filterKategori() {
                const jenis = jenisSelect.value;

                // 1. Reset: Sembunyikan/Nonaktifkan semua grup terlebih dahulu
                const semuaGrup = [optPendapatan, optBelanja, optPembiayaan];
                semuaGrup.forEach(group => {
                    if (group) {
                        group.disabled = true;
                        group.hidden = true;
                    }
                });

                // 2. Tampilkan hanya grup yang sesuai dengan pilihan Jenis Anggaran
                if (jenis === 'Pendapatan') {
                    optPendapatan.disabled = false;
                    optPendapatan.hidden = false;
                } else if (jenis === 'Belanja') {
                    optBelanja.disabled = false;
                    optBelanja.hidden = false;
                } else if (jenis === 'Pembiayaan') { // Logika baru untuk Pembiayaan ⏺️
                    optPembiayaan.disabled = false;
                    optPembiayaan.hidden = false;
                }

                // 3. Kosongkan pilihan kategori setiap kali jenis anggaran berubah
                kategoriSelect.value = "";
            }

            jenisSelect.addEventListener('change', filterKategori);
            filterKategori(); // Jalankan saat halaman pertama kali dimuat
        });

    </script>


</x-layouts.admin>
