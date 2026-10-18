@props([
    'question',
    'open' => false,
    'number' => null,
])

<details {{ $attributes->merge(['class' => 'group card-glow rounded-2xl overflow-hidden transition-all duration-300']) }} @if($open) open @endif>
    <summary class="flex items-center justify-between gap-4 p-5 sm:p-6 text-left cursor-pointer select-none hover:bg-white/5 list-none transition-colors [&::-webkit-details-marker]:hidden">
        <span class="flex items-center gap-3.5">
            @if ($number)
                <span class="text-xs font-mono text-purple-300 bg-purple-900/60 border border-purple-500/40 px-2 py-0.5 rounded-md">
                    {{ $number }}
                </span>
            @endif
            <span class="text-lg sm:text-xl font-bold italic text-white font-script tracking-wide drop-shadow-[0_0_10px_rgba(183,4,255,0.7)]">
                {{ $question }}
            </span>
        </span>
        <span class="shrink-0 w-8 h-8 rounded-full bg-purple-600/60 border border-purple-500/40 flex items-center justify-center text-purple-200 group-hover:text-white group-hover:border-purple-400 group-open:rotate-180 transition-all duration-200">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </span>
    </summary>
    <div class="px-5 sm:px-6 pb-6 pt-2 text-sm sm:text-base text-gray-200/90 leading-relaxed border-t border-purple-900/60 font-body">
        {{ $slot }}
    </div>
</details>
