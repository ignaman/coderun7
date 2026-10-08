<footer id="contact" class="border-t border-gray-200 bg-gray-50 text-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 lg:gap-12">
            <!-- Col 1: Brand & Wireframe Info -->
            <div class="md:col-span-1 space-y-4">
                <div class="inline-block px-3 py-1.5 border-2 border-dashed border-gray-400 bg-white rounded font-mono text-xs font-bold text-gray-900">
                    [Logo Placeholder]
                </div>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="text-[11px] font-mono text-gray-400">
                    [Wireframe Prototype]
                </div>
            </div>

            <!-- Col 2: Navigation -->
            <div class="space-y-3">
                <h4 class="text-xs font-mono uppercase tracking-wider text-gray-900 font-semibold">
                    Navigation
                </h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="{{ request()->is('/') ? '#home' : '/#home' }}" class="text-gray-600 hover:text-gray-900 transition-colors">Home</a></li>
                    <li><a href="{{ request()->is('/') ? '#about' : '/#about' }}" class="text-gray-600 hover:text-gray-900 transition-colors">About</a></li>
                    <li><a href="{{ request()->is('/') ? '#how-it-works' : '/#how-it-works' }}" class="text-gray-600 hover:text-gray-900 transition-colors">How It Works</a></li>
                    <li><a href="{{ request()->is('/') ? '#program' : '/#program' }}" class="text-gray-600 hover:text-gray-900 transition-colors">Program</a></li>
                    <li><a href="{{ request()->is('/') ? '#prizes' : '/#prizes' }}" class="text-gray-600 hover:text-gray-900 transition-colors">Prizes</a></li>
                    <li><a href="{{ request()->is('/') ? '#faq' : '/#faq' }}" class="text-gray-600 hover:text-gray-900 transition-colors">FAQ</a></li>
                </ul>
            </div>

            <!-- Col 3: Ecosystem -->
            <div class="space-y-3">
                <h4 class="text-xs font-mono uppercase tracking-wider text-gray-900 font-semibold">
                    Lorem Links
                </h4>
                <ul class="space-y-2 text-xs">
                    <li>
                        <a href="https://forms.gle/placeholder" target="_blank" rel="noopener noreferrer" class="text-gray-900 font-medium hover:underline inline-flex items-center gap-1">
                            <span>Register</span>
                            <span class="text-[10px] font-mono text-gray-400">↗</span>
                        </a>
                    </li>
                    <li><a href="{{ request()->is('/') ? '#registration-info' : '/#registration-info' }}" class="text-gray-600 hover:text-gray-900 transition-colors">Registration Info</a></li>
                    <li><a href="/partners" class="text-gray-600 hover:text-gray-900 transition-colors">Partners</a></li>
                    <li><a href="{{ request()->is('/') ? '#contact' : '/#contact' }}" class="text-gray-600 hover:text-gray-900 transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Col 4: Social Placeholders & Contact -->
            <div class="space-y-3">
                <h4 class="text-xs font-mono uppercase tracking-wider text-gray-900 font-semibold">
                    Social Placeholders
                </h4>
                <div class="flex flex-wrap gap-2 pt-1">
                    <span class="px-2.5 py-1 rounded border border-gray-300 bg-white text-xs font-mono text-gray-700">
                        [Social 01]
                    </span>
                    <span class="px-2.5 py-1 rounded border border-gray-300 bg-white text-xs font-mono text-gray-700">
                        [Social 02]
                    </span>
                    <span class="px-2.5 py-1 rounded border border-gray-300 bg-white text-xs font-mono text-gray-700">
                        [Social 03]
                    </span>
                </div>
                <div class="pt-2 text-xs text-gray-500 font-mono">
                    <div>Email: lorem@example.com</div>
                    <div>Location: Lorem Ipsum</div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-6 border-t border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
            <p>© {{ date('Y') }} Lorem Ipsum. Grayscale Wireframe Prototype.</p>
            <div class="flex items-center gap-4 text-[11px] font-mono">
                <span>[Placeholder]</span>
                <span>[Placeholder]</span>
            </div>
        </div>
    </div>
</footer>
