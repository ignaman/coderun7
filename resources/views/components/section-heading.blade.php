@props([
    'title',
    'subtitle' => null,
    'badge' => null,
    'align' => 'center',
])

@php
    $alignmentClass = match($align) {
        'left' => 'text-left items-start',
        default => 'text-center items-center mx-auto',
    };
@endphp

<div {{ $attributes->merge(['class' => "flex flex-col max-w-3xl mb-12 sm:mb-16 {$alignmentClass}"]) }}>
    @if ($badge)
        <span class="inline-flex items-center text-xs font-mono uppercase tracking-widest px-2.5 py-1 rounded bg-purple-900/60 text-purple-200 border border-purple-500/40 mb-3 shadow-xs">
            {{ $badge }}
        </span>
    @endif

    <h2 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-normal text-white tracking-normal font-bluesakura shadow-pink-glow leading-none">
        {{ $title }}
    </h2>

    @if ($subtitle)
        <p class="mt-3 text-sm sm:text-base text-gray-100 max-w-2xl font-normal leading-relaxed drop-shadow-[0_1px_6px_rgba(0,0,0,0.5)]">
            {{ $subtitle }}
        </p>
    @endif
</div>
