@php
    $isHome = request()->is('/');
    $navLinks = [
        ['name' => 'Home', 'href' => $isHome ? '#home' : '/#home'],
        ['name' => 'About', 'href' => $isHome ? '#about' : '/#about'],
        ['name' => 'How it works', 'href' => $isHome ? '#how-it-works' : '/#how-it-works'],
        ['name' => 'Program', 'href' => $isHome ? '#program' : '/#program'],
        ['name' => 'Prizes', 'href' => $isHome ? '#prizes' : '/#prizes'],
        ['name' => 'FAQ', 'href' => $isHome ? '#faq' : '/#faq'],
    ];
@endphp

<header x-data="{ mobileOpen: false }" class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Brand / Logo Placeholder -->
            <div class="flex items-center">
                <a href="{{ $isHome ? '#home' : '/' }}" class="flex items-center gap-3 group">
                    <div class="h-9 px-3 border-2 border-dashed border-gray-400 bg-gray-50 flex items-center justify-center rounded text-xs font-mono font-semibold text-gray-800 group-hover:border-gray-900 group-hover:bg-gray-100 transition-colors">
                        [Logo: CodeRun]
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center gap-1 xl:gap-2">
                @foreach ($navLinks as $link)
                    <a href="{{ $link['href'] }}" class="px-3 py-1.5 text-xs font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                        {{ $link['name'] }}
                    </a>
                @endforeach

                <!-- Separate Page Link: Partners (swapped to come before Contact) -->
                <a href="/partners" class="px-3 py-1.5 text-xs font-medium rounded-md transition-colors {{ request()->is('partners*') ? 'text-gray-900 bg-gray-100 font-semibold border border-gray-300' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                    Partners
                </a>

                <!-- Contact Anchor Link: Takes directly to Footer (#contact) -->
                <a href="{{ $isHome ? '#contact' : '/#contact' }}" class="px-3 py-1.5 text-xs font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                    Contact
                </a>
            </nav>

            <!-- Prominent CTA Button -->
            <div class="hidden sm:flex items-center gap-3">
                <x-button
                    href="https://forms.gle/placeholder"
                    target="_blank"
                    rel="noopener noreferrer"
                    variant="primary"
                    size="sm"
                    class="font-mono"
                >
                    <span>Register</span>
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </x-button>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center lg:hidden">
                <button
                    type="button"
                    @click="mobileOpen = !mobileOpen"
                    class="p-2 rounded-lg border border-gray-200 text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300"
                    aria-label="Toggle navigation menu"
                >
                    <svg x-show="!mobileOpen" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div
        x-show="mobileOpen"
        x-cloak
        @click.away="mobileOpen = false"
        class="lg:hidden border-t border-gray-200 bg-white px-4 pt-3 pb-5 space-y-1"
    >
        @foreach ($navLinks as $link)
            <a
                href="{{ $link['href'] }}"
                @click="mobileOpen = false"
                class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100"
            >
                {{ $link['name'] }}
            </a>
        @endforeach

        <!-- Mobile Partners Link -->
        <a
            href="/partners"
            @click="mobileOpen = false"
            class="block px-3 py-2 rounded-md text-sm font-medium {{ request()->is('partners*') ? 'text-gray-900 bg-gray-100 font-semibold' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' }}"
        >
            Partners
        </a>

        <!-- Mobile Contact Link (takes to footer) -->
        <a
            href="{{ $isHome ? '#contact' : '/#contact' }}"
            @click="mobileOpen = false"
            class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100"
        >
            Contact
        </a>

        <div class="pt-3 border-t border-gray-200">
            <x-button
                href="https://forms.gle/placeholder"
                target="_blank"
                rel="noopener noreferrer"
                variant="primary"
                size="md"
                class="w-full justify-center font-mono"
            >
                <span>Register Now</span>
                <svg class="w-4 h-4 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </x-button>
        </div>
    </div>
</header>
