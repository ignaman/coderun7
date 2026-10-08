@props([
    'href' => null,
    'target' => null,
    'rel' => null,
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 select-none';

    $sizeClasses = match($size) {
        'sm' => 'px-3 py-1.5 text-xs gap-1.5',
        'lg' => 'px-6 py-3 text-base gap-2.5 shadow-sm',
        default => 'px-4 py-2 text-sm gap-2',
    };

    $variantClasses = match($variant) {
        'secondary' => 'bg-gray-100 text-gray-800 border border-gray-300 hover:bg-gray-200 hover:text-gray-900',
        'outline' => 'bg-white text-gray-800 border border-gray-300 hover:bg-gray-100 hover:border-gray-400',
        'wireframe' => 'bg-gray-50 text-gray-700 border-2 border-dashed border-gray-400 hover:bg-gray-100 hover:border-gray-600 font-mono text-xs',
        default => 'bg-gray-900 text-white border border-gray-900 hover:bg-gray-800 hover:border-gray-800 shadow-sm',
    };

    $classes = "{$baseClasses} {$sizeClasses} {$variantClasses}";
    $effectiveRel = $rel ?? ($target === '_blank' ? 'noopener noreferrer' : null);
@endphp

@if ($href)
    <a href="{{ $href }}" @if($target) target="{{ $target }}" @endif @if($effectiveRel) rel="{{ $effectiveRel }}" @endif {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
