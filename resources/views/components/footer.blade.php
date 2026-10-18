<footer id="contact" class="border-t border-gray-200 bg-gray-50 text-gray-700 font-body">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <!-- Brand Section -->
            <div class="lg:col-span-1 space-y-4">
                <a href="{{ request()->is('/') ? '#home' : '/' }}" class="flex justify-center items-center group">
                    <img 
                        src="/images/logoCR-white.png" 
                        alt="CodeRun" 
                        class="h-10 sm:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105"
                        style="filter: drop-shadow(0 0 10px rgba(168, 85, 247, 0.5));"
                    >
                </a>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed max-w-xs mx-auto">
                    A Programming Challenge That Tests Your Skills And Sparks New Connections.
                </p>
                <div class="flex justify-center items-center space-x-4 pt-1">
                    <a 
                        href="https://www.facebook.com/BESTcluj?locale=ro_RO" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        aria-label="Facebook"
                        class="text-gray-500 hover:text-gray-900 transition-all duration-200 hover:scale-110"
                    >
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a 
                        href="https://www.instagram.com/best_clujnapoca/" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        aria-label="Instagram"
                        class="text-gray-500 hover:text-gray-900 transition-all duration-200 hover:scale-110"
                    >
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg>
                    </a>
                    <a 
                        href="https://www.linkedin.com/company/best-cluj-napoca?originalSubdomain=ro" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        aria-label="LinkedIn"
                        class="text-gray-500 hover:text-gray-900 transition-all duration-200 hover:scale-110"
                    >
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect width="4" height="12" x="2" y="9"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Event Section -->
            <div>
                <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-4 tracking-wider">
                    Event
                </h3>
                <ul class="space-y-3 text-xs sm:text-sm">
                    <li>
                        <a href="{{ request()->is('/') ? '#about' : '/#about' }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                            About CodeRun
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->is('/') ? '#how-it-works' : '/#how-it-works' }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                            How It Works
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->is('/') ? '#program' : '/#program' }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                            Schedule
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Participants Section -->
            <div>
                <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-4 tracking-wider">
                    Participants
                </h3>
                <ul class="space-y-3 text-xs sm:text-sm">
                    <li>
                        <a 
                            href="https://docs.google.com/forms/d/e/1FAIpQLSe3xJz42C0l2jfkKReQB6uPnQyifSRZZt914Q4-773WwAKysQ/viewform?usp=preview" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            class="text-gray-600 hover:text-gray-900 transition-colors"
                        >
                            Registration
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->is('/') ? '#faq' : '/#faq' }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a 
                            href="/documents/CodeRun%20Guidelines%20for%20Participants%20-%20English.pdf" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            class="text-gray-600 hover:text-gray-900 transition-colors"
                        >
                            Rules
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div>
                <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-4 tracking-wider">
                    Contact
                </h3>
                <ul class="space-y-3 mb-6 text-xs sm:text-sm">
                    <li>
                        <a href="{{ request()->is('/') ? '#contact' : '/#contact' }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="/partners" class="text-gray-600 hover:text-gray-900 transition-colors">
                            Partners
                        </a>
                    </li>
                </ul>

                <div class="space-y-2 text-xs sm:text-sm text-gray-600">
                    <div class="flex justify-center items-center space-x-2">
                        <svg class="w-4 h-4 text-gray-500 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                        <a href="mailto:cluj@best-eu.org" class="hover:text-gray-900 transition-colors">Cluj@best-eu.org</a>
                    </div>
                    <div class="flex justify-center items-center space-x-2">
                        <svg class="w-4 h-4 text-gray-500 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <a href="tel:+40740151222" class="hover:text-gray-900 transition-colors">+40 740 151 222</a>
                    </div>
                    <div class="flex justify-center items-center space-x-2">
                        <svg class="w-4 h-4 text-gray-500 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Cluj-Napoca, Romania</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="border-t border-gray-200 mt-12 pt-6">
            <div class="flex flex-col items-center justify-center space-y-4">
                <p class="text-gray-500 text-xs sm:text-sm text-center">
                    Copyright © {{ date('Y') }} BEST Cluj-Napoca | All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>
