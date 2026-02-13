<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Desa Bedi Kulon</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

    </style>
</head>
<body class="bg-gray-100">

    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex flex-col">

            <div class="w-full navbar bg-white shadow-sm lg:hidden">
                <div class="flex-none">
                    <label for="my-drawer-2" class="btn btn-square btn-ghost">
                        <i class="ph ph-list text-2xl"></i>
                    </label>
                </div>
                <div class="flex-1 px-2 mx-2 font-bold text-lg">Admin Desa</div>
            </div>

            <main class="p-6 bg-gray-50 min-h-screen">
                {{ $slot }}
            </main>

        </div>

        <div class="drawer-side z-50">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-64 min-h-full bg-[#1e293b] text-white">

                <li class="mb-6">
                    <div class="flex flex-col items-start gap-1 hover:bg-transparent">
                        <span class="text-xl font-bold text-blue-400">BEDI KULON</span>
                        <span class="text-xs text-gray-400">Panel Administrator</span>
                    </div>
                </li>

                <li class="mb-1">
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active bg-blue-600' : '' }}">
                        <i class="ph ph-squares-four text-xl"></i> Dashboard
                    </a>
                </li>

                <li class="menu-title text-gray-500 mt-4 mb-2 uppercase text-xs font-bold">Data Desa</li>

                <li class="mb-1">
                    <a href="{{ route('penduduk.index') }}" class="hover:bg-gray-700">

                        <i class="ph ph-users text-xl"></i> Penduduk
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('berita.index') }}" class="{{ request()->routeIs('admin.berita.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-newspaper-clipping text-xl"></i> Berita Desa
                    </a>
                </li>

                <li class="mb-1">
                    <a href="{{ route('galeri.index') }}" class="hover:bg-gray-700">


                        <i class="ph ph-image text-xl"></i> Galeri
                    </a>
                </li>

                <li class="mb-1">
                    <a href="{{ route('umkm.index') }}" class="{{ request()->routeIs('admin.umkm.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-storefront text-xl"></i> UMKM / Pasar
                    </a>
                </li>

                <li class="mb-1">
                    <a href="{{ route('perangkat.index') }}" class="{{ request()->routeIs('admin.perangkat.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-users-three text-xl"></i> Perangkat Desa
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('potensi.index') }}" class="{{ request()->routeIs('admin.potensi.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-plant text-xl"></i> Potensi Desa
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('wisata.index') }}" class="{{ request()->routeIs('admin.wisata.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-island text-xl"></i> Destinasi Wisata
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('penduduk.index') }}" class="{{ request()->routeIs('admin.penduduk.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-users-four text-xl"></i> Administrasi Penduduk
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('apbd.index') }}" class="{{ request()->routeIs('admin.apbd.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-chart-bar text-xl"></i> APBD Desa
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('agama.index') }}" class="{{ request()->routeIs('admin.agama.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-hands-praying text-xl"></i> Data Agama
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('kawin.index') }}" class="{{ request()->routeIs('admin.kawin.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-heart text-xl"></i> Status Perkawinan
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('pekerjaan.index') }}" class="{{ request()->routeIs('admin.pekerjaan.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-briefcase text-xl"></i> Data Pekerjaan
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('pendidikan.index') }}" class="{{ request()->routeIs('admin.pendidikan.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-graduation-cap text-xl"></i> Data Pendidikan
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('usia.index') }}" class="{{ request()->routeIs('admin.usia.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-chart-bar-horizontal text-xl"></i> Data Umur (Piramida)
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('wajibpilih.index') }}" class="{{ request()->routeIs('admin.wajibpilih.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-check-square-offset text-xl"></i> Wajib Pilih
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('bansos.index') }}" class="{{ request()->routeIs('admin.bansos.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-hand-heart text-xl"></i> Bantuan Sosial (Bansos)
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('stunting.index') }}" class="{{ request()->routeIs('admin.stunting.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-baby text-xl"></i> Data Stunting
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('sdgs.index') }}" class="{{ request()->routeIs('admin.sdgs.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-globe-hemisphere-east text-xl"></i> SDGs Desa
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('ppid.index') }}" class="{{ request()->routeIs('admin.ppid.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-file-text text-xl"></i> Dokumen PPID
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('idm.index') }}" class="{{ request()->routeIs('admin.idm.*') ? 'active bg-blue-600' : 'hover:bg-gray-700' }}">
                        <i class="ph ph-chart-line-up text-xl"></i> Status IDM
                    </a>
                </li>












                <li class="menu-title text-gray-500 mt-4 mb-2 uppercase text-xs font-bold">Pengaturan</li>

                <li class="mt-auto">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-400 hover:bg-red-900/30 w-full text-left flex gap-3 items-center">
                            <i class="ph ph-sign-out text-xl"></i> Keluar
                        </button>
                    </form>
                </li>
            </ul>

        </div>
    </div>

</body>
</html>
