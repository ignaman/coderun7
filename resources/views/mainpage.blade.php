<x-layout title="CodeRun 2025/2026 - IT Marathon Wireframe">

    {{-- ========================================================================= --}}
    {{-- 1. HERO SECTION (#home) - BLANK SPACE FOR DESIGNS (NO TEXT)               --}}
    {{-- ========================================================================= --}}
    <section id="home" class="min-h-[75vh] lg:min-h-[85vh] border-b border-gray-200 bg-white flex items-center justify-center p-4 sm:p-6 lg:p-8">
        <div class="w-full max-w-7xl h-[550px] lg:h-[700px] border-2 border-dashed border-gray-300 rounded-2xl bg-gray-50 flex items-center justify-center">
            <!-- Blank Space for Hero Design -->
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 2. ABOUT CODERUN (#about)                                                 --}}
    {{-- ========================================================================= --}}
    <section id="about" class="py-16 lg:py-24 border-b border-gray-200 bg-gray-50/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                badge="[ABOUT]"
                title="About"
                subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            />

            <!-- Visual Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-16">
                <x-card title="Lorem Ipsum" badge="Overview">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </x-card>

                <x-card title="Dolor Sit Amet" badge="Purpose">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
                    </p>
                </x-card>

                <x-card title="Consectetur Adipiscing" badge="Culture">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl eget ultricies tincidunt, nisl nisl aliquam nisl, nec aliquam nisl nisl eget nisl. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
                    </p>
                </x-card>
            </div>

            <!-- YouTube Video iFrame Placeholder Area (Past Editions replaced) -->
            <div class="w-full max-w-4xl mx-auto">
                <div class="aspect-video w-full border-2 border-dashed border-gray-300 rounded-2xl bg-gray-100 flex items-center justify-center relative overflow-hidden shadow-xs">
                    <!-- YouTube video iframe container placeholder -->
                    <!-- <iframe class="w-full h-full" src="https://www.youtube.com/embed/..." title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 3. HOW IT WORKS / GUIDELINES (#how-it-works)                              --}}
    {{-- ========================================================================= --}}
    <section id="how-it-works" class="py-16 lg:py-24 border-b border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                badge="[HOW IT WORKS]"
                title="How It Works"
                subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            />

            <!-- Route & Checkpoints Progression -->
            <div class="mb-16 border border-gray-200 rounded-2xl p-6 sm:p-8 bg-gray-50/50">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-4 mb-8">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="bg-white border border-gray-200 rounded-xl p-4 flex flex-col justify-between">
                            <div>
                                <span class="font-mono text-xs font-bold text-gray-800 bg-gray-100 px-2 py-0.5 rounded border border-gray-200">
                                    [0{{ $i }}]
                                </span>
                                <h4 class="text-sm font-semibold text-gray-900 mt-2.5">Lorem Ipsum {{ $i }}</h4>
                                <p class="text-xs text-gray-600 mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Visual Route Map Diagram Box -->
                <div class="h-44 sm:h-56 border-2 border-dashed border-gray-300 rounded-xl bg-white flex items-center justify-center p-6 text-center">
                    <!-- Route Map Diagram Placeholder -->
                </div>
            </div>

            <!-- Difficulty Levels: Easy vs Hard Track -->
            <div class="mb-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Easy Track -->
                    <x-card title="Easy Track" badge="Tier 01">
                        <div class="space-y-4">
                            <p class="text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                            <div class="border-t border-b border-gray-100 py-3 space-y-2 text-xs text-gray-700">
                                <div class="flex justify-between">
                                    <span class="font-medium">Lorem:</span>
                                    <span class="font-mono text-gray-500">Ipsum</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium">Dolor:</span>
                                    <span class="font-mono text-gray-500">Sit Amet</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium">Consectetur:</span>
                                    <span class="font-mono text-gray-500">Adipiscing Elit</span>
                                </div>
                            </div>
                        </div>
                    </x-card>

                    <!-- Hard Track -->
                    <x-card title="Hard Track" badge="Tier 02">
                        <div class="space-y-4">
                            <p class="text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.
                            </p>
                            <div class="border-t border-b border-gray-100 py-3 space-y-2 text-xs text-gray-700">
                                <div class="flex justify-between">
                                    <span class="font-medium">Lorem:</span>
                                    <span class="font-mono text-gray-500">Ipsum</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium">Dolor:</span>
                                    <span class="font-mono text-gray-500">Sit Amet</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium">Consectetur:</span>
                                    <span class="font-mono text-gray-500">Adipiscing Elit</span>
                                </div>
                            </div>
                        </div>
                    </x-card>
                </div>
            </div>

            <!-- Example Technical Challenges -->
            <div class="mb-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="border border-gray-200 rounded-xl p-5 bg-gray-50/50 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-[11px] font-mono uppercase bg-gray-200 text-gray-800 px-2 py-0.5 rounded">Lorem {{ $i }}</span>
                                </div>
                                <h4 class="text-base font-semibold text-gray-900">Lorem Ipsum Dolor</h4>
                                <p class="text-xs text-gray-600 mt-2 leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Regulations & PDF Download -->
            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 sm:p-8 bg-gray-50 flex flex-col lg:flex-row items-center justify-between gap-6">
                <div class="space-y-2 text-center lg:text-left">
                    <h3 class="text-xl font-bold text-gray-900">Lorem Ipsum Dolor</h3>
                    <p class="text-sm text-gray-600 max-w-2xl leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="shrink-0 flex flex-col sm:flex-row gap-3">
                    <x-button
                        href="https://forms.gle/placeholder"
                        target="_blank"
                        rel="noopener noreferrer"
                        variant="secondary"
                        class="font-mono text-xs"
                    >
                        <span>Download PDF</span>
                    </x-button>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 4. PROGRAM / TIMELINE (#program)                                          --}}
    {{-- ========================================================================= --}}
    <section id="program" class="py-16 lg:py-24 border-b border-gray-200 bg-gray-50/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                badge="[PROGRAM]"
                title="Program"
                subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            />

            <!-- Timeline Container -->
            <div class="max-w-4xl mx-auto space-y-6">
                <div class="relative pl-6 sm:pl-8 border-l-2 border-dashed border-gray-300 space-y-8">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="relative group">
                            <!-- Bullet -->
                            <div class="absolute -left-[31px] sm:-left-[39px] top-1.5 w-4 h-4 rounded-full bg-white border-4 border-gray-800"></div>

                            <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 shadow-xs">
                                <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                                    <span class="text-xs font-mono font-semibold text-gray-900 bg-gray-100 border border-gray-200 px-2.5 py-0.5 rounded">
                                        Lorem 0{{ $i }}
                                    </span>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 tracking-tight">
                                    Lorem Ipsum Dolor Sit Amet
                                </h3>
                                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 5. PRIZES (#prizes) - (EXTRA PERKS SECTION REMOVED)                       --}}
    {{-- ========================================================================= --}}
    <section id="prizes" class="py-16 lg:py-24 border-b border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                badge="[PRIZES]"
                title="Prizes"
                subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            />

            <!-- Tiered Prize Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8">
                <!-- 1st Place -->
                <div class="rounded-xl border-2 border-gray-900 bg-white p-6 flex flex-col justify-between shadow-md relative">
                    <div class="pt-2">
                        <div class="text-center pb-4 border-b border-gray-200">
                            <span class="text-3xl font-extrabold text-gray-900 font-mono">1st Place</span>
                        </div>
                        <ul class="mt-5 space-y-2.5 text-xs text-gray-700">
                            <li class="flex items-start gap-2">
                                <span class="font-mono text-gray-400">✓</span>
                                <span>Lorem ipsum dolor sit amet</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="font-mono text-gray-400">✓</span>
                                <span>Consectetur adipiscing elit</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="font-mono text-gray-400">✓</span>
                                <span>Sed do eiusmod tempor incididunt</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 2nd Place -->
                <div class="rounded-xl border border-gray-300 bg-white p-6 flex flex-col justify-between shadow-sm">
                    <div>
                        <div class="text-center pb-4 border-b border-gray-200">
                            <span class="text-2xl font-bold text-gray-900 font-mono">2nd Place</span>
                        </div>
                        <ul class="mt-5 space-y-2.5 text-xs text-gray-700">
                            <li class="flex items-start gap-2">
                                <span class="font-mono text-gray-400">✓</span>
                                <span>Lorem ipsum dolor sit amet</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="font-mono text-gray-400">✓</span>
                                <span>Consectetur adipiscing elit</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 3rd Place -->
                <div class="rounded-xl border border-gray-300 bg-white p-6 flex flex-col justify-between shadow-sm">
                    <div>
                        <div class="text-center pb-4 border-b border-gray-200">
                            <span class="text-2xl font-bold text-gray-900 font-mono">3rd Place</span>
                        </div>
                        <ul class="mt-5 space-y-2.5 text-xs text-gray-700">
                            <li class="flex items-start gap-2">
                                <span class="font-mono text-gray-400">✓</span>
                                <span>Lorem ipsum dolor sit amet</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="font-mono text-gray-400">✓</span>
                                <span>Consectetur adipiscing elit</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Special Mentions -->
                <div class="rounded-xl border border-gray-300 bg-gray-50/60 p-6 flex flex-col justify-between">
                    <div>
                        <div class="text-center pb-4 border-b border-gray-200">
                            <span class="text-lg font-bold text-gray-900 font-mono">Special Mentions</span>
                        </div>
                        <ul class="mt-5 space-y-2 text-xs text-gray-700">
                            <li class="p-2 rounded bg-white border border-gray-200">
                                Lorem ipsum dolor sit amet
                            </li>
                            <li class="p-2 rounded bg-white border border-gray-200">
                                Consectetur adipiscing elit
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 6. REGISTRATION INFORMATION & RULES (#registration-info)                  --}}
    {{-- ========================================================================= --}}
    <section id="registration-info" class="py-16 lg:py-24 border-b border-gray-200 bg-gray-50/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                badge="[REGISTRATION]"
                title="Registration"
                subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            />

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Left: Info & Criteria -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="border border-gray-200 rounded-xl bg-white p-6 shadow-xs">
                        <h3 class="text-lg font-bold text-gray-900">Lorem Ipsum Dolor</h3>
                        <p class="mt-3 text-xs text-gray-600 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>

                    <div class="border border-gray-200 rounded-xl bg-white p-6 shadow-xs">
                        <h3 class="text-lg font-bold text-gray-900">Lorem Ipsum Criteria</h3>
                        <ul class="mt-4 space-y-2.5 text-xs text-gray-700">
                            <li class="flex items-start gap-2.5">
                                <span class="font-mono text-gray-900 font-bold">[✓]</span>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="font-mono text-gray-900 font-bold">[✓]</span>
                                <span>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="font-mono text-gray-900 font-bold">[✓]</span>
                                <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="border border-gray-200 rounded-xl bg-gray-100/60 p-5 text-xs text-gray-600">
                        <p class="leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <!-- Right: CTA Card -->
                <div class="lg:col-span-5">
                    <div class="border-2 border-gray-900 rounded-2xl bg-white p-6 sm:p-8 shadow-sm text-center flex flex-col justify-between">
                        <div class="space-y-4">
                            <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight">
                                Lorem Ipsum Dolor Sit Amet
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                        <div class="pt-6">
                            <x-button
                                href="https://forms.gle/placeholder"
                                target="_blank"
                                rel="noopener noreferrer"
                                size="lg"
                                variant="primary"
                                class="w-full font-mono text-sm py-3.5"
                            >
                                <span>Register (Google Form)</span>
                                <svg class="w-4 h-4 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 7. FAQ (#faq)                                                             --}}
    {{-- ========================================================================= --}}
    <section id="faq" class="py-16 lg:py-24 border-b border-gray-200 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                badge="[FAQ]"
                title="FAQ"
                subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            />

            <!-- Accordion Items -->
            <div class="space-y-3">
                <x-accordion-item number="01" question="Lorem ipsum dolor sit amet?" :open="true">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </x-accordion-item>

                <x-accordion-item number="02" question="Consectetur adipiscing elit sed do eiusmod?">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </x-accordion-item>

                <x-accordion-item number="03" question="Tempor incididunt ut labore et dolore magna aliqua?">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl eget ultricies tincidunt, nisl nisl aliquam nisl, nec aliquam nisl nisl eget nisl. Integer nec odio. Praesent libero.
                </x-accordion-item>

                <x-accordion-item number="04" question="Ut enim ad minim veniam quis nostrud exercitation?">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </x-accordion-item>

                <x-accordion-item number="05" question="Duis aute irure dolor in reprehenderit in voluptate?">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                </x-accordion-item>
            </div>
        </div>
    </section>

</x-layout>