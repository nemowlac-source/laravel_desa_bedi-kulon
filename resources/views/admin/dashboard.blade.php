<x-layouts.admin>

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            <p class="text-sm text-gray-500">Selamat datang kembali, Admin!</p>
        </div>
        <div class="text-sm text-gray-500 bg-white px-4 py-2 rounded-lg shadow-sm">
            {{ now()->format('l, d F Y') }}
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="card bg-white shadow-sm border border-gray-100">
            <div class="card-body flex flex-row items-center gap-4 p-6">
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                    <i class="ph ph-users text-2xl"></i>
                </div>
                <div>
                    <h2 class="card-title text-2xl font-bold">1,240</h2>
                    <p class="text-xs text-gray-500 uppercase font-semibold">Total Penduduk</p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-sm border border-gray-100">
            <div class="card-body flex flex-row items-center gap-4 p-6">
                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                    <i class="ph ph-newspaper text-2xl"></i>
                </div>
                <div>
                    <h2 class="card-title text-2xl font-bold">45</h2>
                    <p class="text-xs text-gray-500 uppercase font-semibold">Berita Terbit</p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-sm border border-gray-100">
            <div class="card-body flex flex-row items-center gap-4 p-6">
                <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-600">
                    <i class="ph ph-envelope-open text-2xl"></i>
                </div>
                <div>
                    <h2 class="card-title text-2xl font-bold">12</h2>
                    <p class="text-xs text-gray-500 uppercase font-semibold">Permohonan Surat</p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-sm border border-gray-100">
            <div class="card-body flex flex-row items-center gap-4 p-6">
                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center text-purple-600">
                    <i class="ph ph-eye text-2xl"></i>
                </div>
                <div>
                    <h2 class="card-title text-2xl font-bold">850</h2>
                    <p class="text-xs text-gray-500 uppercase font-semibold">Pengunjung Bulan Ini</p>
                </div>
            </div>
        </div>

    </div>

    <div class="card bg-white shadow-sm border border-gray-100">
        <div class="card-body">
            <h3 class="font-bold text-lg mb-4">Aktivitas Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="bg-gray-50">
                        <tr>
                            <th>No</th>
                            <th>Aktivitas</th>
                            <th>Waktu</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Warga mengajukan Surat Keterangan Domisili</td>
                            <td>Baru saja</td>
                            <td><span class="badge badge-warning badge-sm">Menunggu</span></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Admin memposting berita "Kerja Bakti"</td>
                            <td>1 Jam lalu</td>
                            <td><span class="badge badge-success badge-sm text-white">Terbit</span></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Budi (Warga) mendaftar akun</td>
                            <td>Hari ini, 08:00</td>
                            <td><span class="badge badge-ghost badge-sm">Aktif</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-layouts.admin>
