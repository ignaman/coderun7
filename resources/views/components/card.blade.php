@props([
    'title' => null,
    'badge' => null,
    'subtitle' => null,
    'dashed' => false,
    'hover' => true,
])

@php
    $borderClass = $dashed
        ? 'border-2 border-dashed border-purple-500/40 bg-[#3d099c]/80'
        : 'card-glow';
    $hoverClass = $hover ? 'hover:-translate-y-1' : '';
@endphp

<div {{ $attributes->merge(['class' => "rounded-2xl p-6 sm:p-7 flex flex-col {$borderClass} {$hoverClass}"]) }}>
    @if ($badge || $title || $subtitle)
        <div class="mb-4">
            @if ($badge)
                <span class="inline-block text-[11px] font-mono uppercase tracking-wider px-2.5 py-0.5 rounded bg-purple-900/60 text-purple-200 border border-purple-500/40 mb-2">
                    {{ $badge }}
                </span>
            @endif
            @if ($title)
                <h3 class="text-xl sm:text-2xl font-bold italic text-white font-script tracking-wide drop-shadow-[0_0_10px_rgba(183,4,255,0.7)]">
                    {{ $title }}
                </h3>
            @endif
            @if ($subtitle)
                <p class="text-xs text-purple-200/80 mt-1 font-mono">
                    {{ $subtitle }}
                </p>
            @endif
        </div>
    @endif

    <div class="flex-1 text-gray-200/90 text-sm sm:text-base leading-relaxed font-body">
        {{ $slot }}
    </div>
</div>
