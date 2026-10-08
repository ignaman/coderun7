@props([
    'title' => null,
    'badge' => null,
    'subtitle' => null,
    'dashed' => false,
    'hover' => true,
])

@php
    $borderClass = $dashed
        ? 'border-2 border-dashed border-gray-300 bg-gray-50/60'
        : 'border border-gray-200 bg-white shadow-sm';
    $hoverClass = $hover ? 'hover:border-gray-400 hover:shadow transition duration-200' : '';
@endphp

<div {{ $attributes->merge(['class' => "rounded-xl p-6 flex flex-col {$borderClass} {$hoverClass}"]) }}>
    @if ($badge || $title || $subtitle)
        <div class="mb-4">
            @if ($badge)
                <span class="inline-block text-[11px] font-mono uppercase tracking-wider px-2 py-0.5 rounded bg-gray-100 text-gray-600 border border-gray-200 mb-2">
                    {{ $badge }}
                </span>
            @endif
            @if ($title)
                <h3 class="text-lg font-semibold text-gray-900 tracking-tight">
                    {{ $title }}
                </h3>
            @endif
            @if ($subtitle)
                <p class="text-xs text-gray-500 mt-1 font-mono">
                    {{ $subtitle }}
                </p>
            @endif
        </div>
    @endif

    <div class="flex-1 text-gray-600 text-sm leading-relaxed">
        {{ $slot }}
    </div>
</div>
