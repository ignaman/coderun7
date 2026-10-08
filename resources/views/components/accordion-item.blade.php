@props([
    'question',
    'open' => false,
    'number' => null,
])

<details {{ $attributes->merge(['class' => 'group border border-gray-200 rounded-xl bg-white overflow-hidden transition-all duration-200 open:border-gray-400 open:shadow-sm']) }} @if($open) open @endif>
    <summary class="flex items-center justify-between gap-4 p-5 text-left font-medium text-gray-900 cursor-pointer select-none hover:bg-gray-50 list-none transition-colors [&::-webkit-details-marker]:hidden">
        <span class="flex items-center gap-3">
            @if ($number)
                <span class="text-xs font-mono text-gray-400 bg-gray-100 border border-gray-200 px-1.5 py-0.5 rounded">
                    {{ $number }}
                </span>
            @endif
            <span class="text-base sm:text-lg font-semibold tracking-tight text-gray-800 group-open:text-gray-900">
                {{ $question }}
            </span>
        </span>
        <span class="shrink-0 w-7 h-7 rounded-full bg-gray-100 border border-gray-200 flex items-center justify-center text-gray-500 group-hover:bg-gray-200 group-open:rotate-180 transition-transform duration-200">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </span>
    </summary>
    <div class="px-5 pb-5 pt-1 text-sm text-gray-600 leading-relaxed border-t border-gray-100 bg-gray-50/40">
        {{ $slot }}
    </div>
</details>
