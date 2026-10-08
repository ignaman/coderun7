<x-layout title="Partners - CodeRun">

    {{-- ========================================================================= --}}
    {{-- 1. INTRO SECTION                                                          --}}
    {{-- ========================================================================= --}}
    <section class="pt-12 pb-16 lg:pt-20 lg:pb-24 border-b border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-gray-300 bg-gray-50 text-xs font-mono text-gray-700 mb-6">
                    <span>[PARTNERS] • Ecosystem</span>
                </div>

                <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-normal leading-tight font-title">
                    Partners
                </h1>

                <p class="mt-4 text-base sm:text-lg text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 2. PARTNERS GRID                                                          --}}
    {{-- ========================================================================= --}}
    <section class="py-16 lg:py-24 border-b border-gray-200 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                badge="[DIRECTORY]"
                title="Partners Directory"
                subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            />

            @php
                $partners = [
                    [
                        'name' => 'Lorem Partner 01',
                        'tier' => 'Tier 01',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'url' => '#',
                        'logo' => '[Partner Logo 01]',
                    ],
                    [
                        'name' => 'Lorem Partner 02',
                        'tier' => 'Tier 01',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'url' => '#',
                        'logo' => '[Partner Logo 02]',
                    ],
                    [
                        'name' => 'Lorem Partner 03',
                        'tier' => 'Tier 02',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'url' => '#',
                        'logo' => '[Partner Logo 03]',
                    ],
                    [
                        'name' => 'Lorem Partner 04',
                        'tier' => 'Tier 02',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'url' => '#',
                        'logo' => '[Partner Logo 04]',
                    ],
                    [
                        'name' => 'Lorem Partner 05',
                        'tier' => 'Tier 03',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'url' => '#',
                        'logo' => '[Partner Logo 05]',
                    ],
                    [
                        'name' => 'Lorem Partner 06',
                        'tier' => 'Tier 03',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'url' => '#',
                        'logo' => '[Partner Logo 06]',
                    ],
                    [
                        'name' => 'Lorem Partner 07',
                        'tier' => 'Tier 03',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'url' => '#',
                        'logo' => '[Partner Logo 07]',
                    ],
                    [
                        'name' => 'Lorem Partner 08',
                        'tier' => 'Tier 03',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'url' => '#',
                        'logo' => '[Partner Logo 08]',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($partners as $partner)
                    <div class="border border-gray-200 rounded-xl bg-white p-5 flex flex-col justify-between hover:border-gray-400 hover:shadow-sm transition-all group">
                        <div>
                            <!-- Grayscale Partner Logo Box with subtle hover state -->
                            <div class="h-28 border-2 border-dashed border-gray-300 rounded-lg bg-gray-50/80 flex flex-col items-center justify-center p-3 text-center mb-4 group-hover:bg-gray-100 group-hover:border-gray-500 transition-colors">
                                <span class="font-mono text-xs font-bold text-gray-800">
                                    {{ $partner['logo'] }}
                                </span>
                            </div>

                            <div class="text-[11px] font-mono uppercase tracking-wider text-gray-500 mb-1">
                                {{ $partner['tier'] }}
                            </div>

                            <h3 class="text-base font-bold text-gray-900 tracking-tight">
                                {{ $partner['name'] }}
                            </h3>

                            <p class="text-xs text-gray-600 leading-relaxed mt-2">
                                {{ $partner['desc'] }}
                            </p>
                        </div>

                        <div class="mt-5 pt-3 border-t border-gray-100">
                            <a
                                href="{{ $partner['url'] }}"
                                class="inline-flex items-center gap-1.5 text-xs font-mono font-medium text-gray-700 hover:text-gray-900 hover:underline"
                            >
                                <span>Lorem Link</span>
                                <span class="text-[10px]">↗</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
