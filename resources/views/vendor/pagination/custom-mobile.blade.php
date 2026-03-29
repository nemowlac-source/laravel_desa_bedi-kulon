@if ($paginator->hasPages())
<div role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-center items-center gap-1.5">
    {{-- Tombol Sebelumnya (Previous) --}}
    @if ($paginator->onFirstPage())
    <span class="w-9 h-9 flex items-center justify-center bg-white border border-gray-100 rounded-lg text-gray-300 shadow-sm cursor-default">
        <i class="ph ph-caret-left text-sm"></i>
    </span>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" class="w-9 h-9 flex items-center justify-center bg-white border border-gray-100 rounded-lg text-gray-400 shadow-sm hover:bg-gray-50 transition-colors">
        <i class="ph ph-caret-left text-sm"></i>
    </a>
    @endif

    {{-- Nomor Halaman (Page Numbers) --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <span class="w-9 h-9 flex items-center justify-center text-gray-400">...</span>
    @endif

    {{-- Array Halaman --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    {{-- Halaman Aktif (Hijau Terang #81d64d) ⏺️ --}}
    <span class="w-9 h-9 flex items-center justify-center bg-[#2ac0b4] text-white rounded-lg text-[13px] font-bold shadow-sm">

        {{ $page }}
    </span>
    @else
    {{-- Halaman Biasa (Putih) --}}
    <a href="{{ $url }}" class="w-9 h-9 flex items-center justify-center bg-white border border-gray-100 text-gray-600 rounded-lg text-[13px] font-medium shadow-sm hover:bg-gray-50 transition-colors">
        {{ $page }}
    </a>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Tombol Berikutnya (Next) --}}
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" class="w-9 h-9 flex items-center justify-center bg-white border border-gray-100 rounded-lg text-gray-400 shadow-sm hover:bg-gray-50 transition-colors">
        <i class="ph ph-caret-right text-sm"></i>
    </a>
    @else
    <span class="w-9 h-9 flex items-center justify-center bg-white border border-gray-100 rounded-lg text-gray-300 shadow-sm cursor-default">
        <i class="ph ph-caret-right text-sm"></i>
    </span>
    @endif
</div>
@endif
