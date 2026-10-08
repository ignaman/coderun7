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
        <span class="inline-flex items-center text-xs font-mono uppercase tracking-widest px-2.5 py-1 rounded bg-gray-100 text-gray-700 border border-gray-300 mb-3 shadow-xs">
            {{ $badge }}
        </span>
    @endif

    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 tracking-normal font-title">
        {{ $title }}
    </h2>

    @if ($subtitle)
        <p class="mt-3 text-sm sm:text-base text-gray-600 max-w-2xl font-normal leading-relaxed">
            {{ $subtitle }}
        </p>
    @endif
</div>
