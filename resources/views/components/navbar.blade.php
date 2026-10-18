@php
    $isHome = request()->is('/');
    $navLinks = [
        ['name' => 'Home', 'href' => $isHome ? '#home' : '/#home'],
        ['name' => 'About', 'href' => $isHome ? '#about' : '/#about'],
        ['name' => 'How it works', 'href' => $isHome ? '#how-it-works' : '/#how-it-works'],
        ['name' => 'Schedule', 'href' => $isHome ? '#program' : '/#program'],
        ['name' => 'Prizes', 'href' => $isHome ? '#prizes' : '/#prizes'],
        ['name' => 'FAQ', 'href' => $isHome ? '#faq' : '/#faq'],
    ];
@endphp

<header x-data="{ mobileOpen: false }" class="sticky top-0 z-50 bg-[#23045c] border-b border-purple-900/60 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Brand / Logo Placeholder -->
            <div class="flex items-center">
                <a href="{{ $isHome ? '#home' : '/' }}" class="flex items-center group">
                    <img src="/images/titlu.svg" alt="CodeRun Logo" class="h-10 w-auto object-contain transition-transform duration-200 group-hover:scale-105">
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center gap-1 xl:gap-2">
                @foreach ($navLinks as $link)
                    <a href="{{ $link['href'] }}" class="px-3 py-1.5 text-xs font-medium text-white/90 hover:text-white hover:bg-white/10 rounded-md transition-colors">
                        {{ $link['name'] }}
                    </a>
                @endforeach

                <!-- Separate Page Link: Partners (swapped to come before Contact) -->
                <a href="/partners" class="px-3 py-1.5 text-xs font-medium rounded-md transition-colors {{ request()->is('partners*') ? 'text-white bg-white/20 font-semibold border border-white/30' : 'text-white/90 hover:text-white hover:bg-white/10' }}">
                    Partners
                </a>

                <!-- Contact Anchor Link: Takes directly to Footer (#contact) -->
                <a href="{{ $isHome ? '#contact' : '/#contact' }}" class="px-3 py-1.5 text-xs font-medium text-white/90 hover:text-white hover:bg-white/10 rounded-md transition-colors">
                    Contact
                </a>
            </nav>

            <!-- Prominent CTA Button -->
            <div class="hidden sm:flex items-center gap-3">
                <a
                    href="https://docs.google.com/forms/d/e/1FAIpQLSe3xJz42C0l2jfkKReQB6uPnQyifSRZZt914Q4-773WwAKysQ/viewform?usp=preview"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group inline-flex items-center justify-center font-body text-xs font-semibold px-4 py-1.5 rounded-full bg-[#23045c] text-white hover:text-[#8b38dc] border-2 border-[#8b38dc] shadow-[0_0_12px_rgba(139,56,220,0.6)] hover:shadow-[0_0_18px_rgba(139,56,220,0.9)] transition-all duration-300 select-none"
                >
                    <span class="transition-colors duration-300">Register Now</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center lg:hidden">
                <button
                    type="button"
                    @click="mobileOpen = !mobileOpen"
                    class="p-2 rounded-lg border border-purple-800 text-white/90 hover:text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/50"
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
        class="lg:hidden border-t border-purple-900/60 bg-[#23045c] px-4 pt-3 pb-5 space-y-1"
    >
        @foreach ($navLinks as $link)
            <a
                href="{{ $link['href'] }}"
                @click="mobileOpen = false"
                class="block px-3 py-2 rounded-md text-sm font-medium text-white/90 hover:text-white hover:bg-white/10"
            >
                {{ $link['name'] }}
            </a>
        @endforeach

        <!-- Mobile Partners Link -->
        <a
            href="/partners"
            @click="mobileOpen = false"
            class="block px-3 py-2 rounded-md text-sm font-medium {{ request()->is('partners*') ? 'text-white bg-white/20 font-semibold' : 'text-white/90 hover:text-white hover:bg-white/10' }}"
        >
            Partners
        </a>

        <!-- Mobile Contact Link (takes to footer) -->
        <a
            href="{{ $isHome ? '#contact' : '/#contact' }}"
            @click="mobileOpen = false"
            class="block px-3 py-2 rounded-md text-sm font-medium text-white/90 hover:text-white hover:bg-white/10"
        >
            Contact
        </a>

        <div class="pt-3 border-t border-purple-900/60">
            <a
                href="https://docs.google.com/forms/d/e/1FAIpQLSe3xJz42C0l2jfkKReQB6uPnQyifSRZZt914Q4-773WwAKysQ/viewform?usp=preview"
                target="_blank"
                rel="noopener noreferrer"
                class="group flex items-center justify-center font-body text-sm font-semibold px-4 py-2.5 rounded-full bg-[#23045c] text-white hover:text-[#8b38dc] border-2 border-[#8b38dc] shadow-[0_0_12px_rgba(139,56,220,0.6)] hover:shadow-[0_0_18px_rgba(139,56,220,0.9)] transition-all duration-300 w-full"
            >
                <span class="transition-colors duration-300">Register Now</span>
                <svg class="w-4 h-4 ml-1.5 transition-colors duration-300 group-hover:text-[#8b38dc]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </div>
    </div>
</header>
