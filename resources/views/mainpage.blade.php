<x-layout title="CodeRun 2025/2026 - IT Marathon Wireframe">

    {{-- ========================================================================= --}}
    {{-- 1. HERO SECTION (#home)                                                   --}}
    {{-- ========================================================================= --}}
    <section id="home" class="relative overflow-visible flex flex-col" style="min-height: 85vh;">

        {{-- ── TOP LOGO BAR ─────────────────────────────────────────────────────── --}}
        <div class="relative z-10 flex items-center justify-between px-6 sm:px-10 lg:px-16 pt-6 sm:pt-8 mb-4 lg:mb-12">

            {{-- BEST logo – left --}}
            <img
                src="/images/BESTCJ_signature_white.png"
                alt="BEST Cluj-Napoca"
                class="h-12 sm:h-15 lg:h-24 w-auto object-contain"
            >

            {{-- code.run; – center --}}
            <img
                src="/images/logoCR-white.png"
                alt="code.run;"
                class="h-7 sm:h-9 lg:h-11 w-auto object-contain"
            >

            {{-- Universitatea Tehnica – right --}}
            <img
                src="/images/UT_Logo_Alb.png"
                alt="Universitatea Tehnica din Cluj-Napoca"
                class="h-12 sm:h-14 lg:h-24 w-auto object-contain"
            >
        </div>

        {{-- ── DESKTOP LAYOUT (lg+): absolute-positioned three columns ──────────── --}}
        <div class="hidden lg:block relative flex-1" style="min-height: 68vh;">

            {{-- Girl character – left third, anchored to bottom --}}
            <div class="absolute bottom-0" style="left: 18%; transform: translateX(-50%);">
                <img
                    src="/images/fatacr.svg"
                    alt="CodeRun character"
                    class="w-auto object-contain object-bottom hero-glow-character"
                    style="height: 62vh; max-height: 580px;"
                >
            </div>

            {{-- Register here! – absolute centre, vertically centred --}}
            <div class="absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%); width: 28vw; max-width: 400px;">
                <a
                    href="https://docs.google.com/forms/d/e/1FAIpQLSe3xJz42C0l2jfkKReQB6uPnQyifSRZZt914Q4-773WwAKysQ/viewform?usp=preview"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="hero-register-btn group w-full"
                    aria-label="Register here for CodeRun"
                >
                    <img
                        src="/images/buton.svg"
                        alt="Register here!"
                        class="w-full h-auto hero-glow-intense"
                    >
                </a>
            </div>

            {{-- CodeRun 7 text – right third, vertically centred --}}
            <div class="absolute" style="right: 4%; top: 50%; transform: translateY(-50%); width: 26vw; max-width: 380px;">
                <img
                    src="/images/cr7svg.svg"
                    alt="CodeRun 7"
                    class="w-full h-auto hero-glow-intense"
                >
            </div>
        </div>

        {{-- ── MOBILE LAYOUT (<lg): stacked column ──────────────────────────────── --}}
        <div class="lg:hidden flex flex-col items-center gap-6 pt-4 pb-12 px-6">

            {{-- CodeRun 7 text --}}
            <img
                src="/images/cr7svg.svg"
                alt="CodeRun 7"
                class="w-full max-w-xs h-auto hero-glow-intense"
            >

            {{-- Register here! --}}
            <a
                href="https://docs.google.com/forms/d/e/1FAIpQLSe3xJz42C0l2jfkKReQB6uPnQyifSRZZt914Q4-773WwAKysQ/viewform?usp=preview"
                target="_blank"
                rel="noopener noreferrer"
                class="hero-register-btn w-full max-w-xs"
                aria-label="Register here for CodeRun"
            >
                <img
                    src="/images/buton.svg"
                    alt="Register here!"
                    class="w-full h-auto hero-glow-intense"
                >
            </a>

            {{-- Girl character --}}
            <img
                src="/images/fatacr.svg"
                alt="CodeRun character"
                class="w-44 xs:w-52 sm:w-64 h-auto hero-glow-character"
            >
        </div>

    </section>

    {{-- ========================================================================= --}}
    {{-- 2. ABOUT CODERUN (#about)                                                 --}}
    {{-- ========================================================================= --}}
    <section id="about" class="py-16 lg:py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="About"
                subtitle="CodeRun is an IT marathon for students organized by BEST Cluj-Napoca, taking place between 2-15 November."
            />

            <!-- Visual Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-16">
                <x-card title="11 days of intensive learning">
                    <p>
                        Level up your knowledge through exclusive training sessions delivered by top IT companies in Cluj-Napoca. Gain hands-on experience and learn real-world strategies directly from industry experts
                    </p>
                </x-card>

                <x-card title="2-day urban challenge">
                    <p>
                        Put your logic and teamwork to the ultimate test in our fast-paced, checkpoint-based competition. Navigate the city, solve practical tech problems under pressure, and keep moving forward.
                    </p>
                </x-card>

                <x-card title="Career boost & prizes">
                    <p>
                        Turn your skills into opportunities. Discover new working environments, win amazing rewards, and get your profile noticed.
                    </p>
                </x-card>
            </div>

            <!-- Video Section -->
            <div class="w-full max-w-4xl mx-auto">
                <div class="text-center mb-6 sm:mb-8">
                    <h3 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-normal text-white font-bluesakura tracking-normal shadow-pink-glow leading-none">
                        CodeRun Moments
                    </h3>
                </div>
                <div class="aspect-video w-full flex items-center justify-center relative overflow-hidden rounded-2xl shadow-2xl border border-white/20 bg-black/40">
                    <video 
                        id="coderun-moments-video"
                        class="w-full h-full object-cover rounded-2xl" 
                        controls 
                        autoplay
                        muted
                        loop
                        playsinline 
                        preload="auto"
                        poster="/images/video-poster.jpg">
                        <source src="/videos/coderun_moments.mp4" type="video/mp4">
                        <source src="/video-stream" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <script>
                    (function() {
                        const initVideo = function() {
                            const video = document.getElementById('coderun-moments-video');
                            if (video) {
                                video.play().catch(function() {});
                            }
                        };
                        if (document.readyState === 'loading') {
                            document.addEventListener('DOMContentLoaded', initVideo);
                        } else {
                            initVideo();
                        }
                    })();
                </script>
            </div>
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 3. HOW IT WORKS / GUIDELINES (#how-it-works)                              --}}
    {{-- ========================================================================= --}}
    <section id="how-it-works" class="py-16 lg:py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="How It Works"
                subtitle="The 7th edition of CodeRun is here! Two difficulty levels and one ultimate race."
            />

            <!-- Route & Checkpoints Progression -->
            <div class="mb-16 space-y-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div class="card-glow rounded-2xl p-6 sm:p-8 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <span class="inline-block text-[11px] font-mono uppercase tracking-wider px-2.5 py-0.5 rounded bg-purple-900/60 text-purple-200 border border-purple-500/40 mb-2 font-semibold">Phase 1</span>
                            <h4 class="text-xl sm:text-2xl font-bold italic text-white font-script tracking-wide drop-shadow-[0_0_10px_rgba(183,4,255,0.7)] mt-1">2-13 November - The Training Phase</h4>
                            <p class="text-sm sm:text-base text-gray-200/90 mt-3 leading-relaxed font-body">
                                Level up before the main event. Dive deep into intensive, specialized sessions delivered directly by our top-tier IT partner companies and 
                                professors from university. This is your chance to gain exclusive industry insights, master new technical skills, 
                                and build the ultimate toolkit you’ll need to crush the competition. 
                            </p>
                        </div>
                    </div>
                    <div class="card-glow rounded-2xl p-6 sm:p-8 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <span class="inline-block text-[11px] font-mono uppercase tracking-wider px-2.5 py-0.5 rounded bg-purple-900/60 text-purple-200 border border-purple-500/40 mb-2 font-semibold">Phase 2</span>
                            <h4 class="text-xl sm:text-2xl font-bold italic text-white font-script tracking-wide drop-shadow-[0_0_10px_rgba(183,4,255,0.7)] mt-1">14-15 November - The Competition</h4>
                            <p class="text-sm sm:text-base text-gray-200/90 mt-3 leading-relaxed font-body">
                                It’s time to show what you’re made of. Hit the streets, navigate your way through the city, and conquer a series of high-stakes checkpoints designed by our associates. 
                                Expect fast-paced coding challenges, real-time problem-solving, and networking on the move.
                                Take on the challenge solo and let us match you with the perfect crew, or bring two teammates to form an unstoppable trio.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Guidelines Section Header -->
                <div class="pt-8 sm:pt-12 pb-2">
                    <x-section-heading
                        title="Participant Guidelines"
                        class="!mb-0"
                    />
                </div>

                <!-- Mobile: Download Guidelines Button -->
                <div class="md:hidden w-full card-glow rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center text-center space-y-4">
                    <a 
                        href="/documents/CodeRun%20Guidelines%20for%20Participants%20-%20English.pdf" 
                        download="CodeRun Guidelines for Participants - English.pdf"
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-6 py-3.5 text-base font-bold rounded-xl text-white bg-gradient-to-r from-[#7A0BC0] to-[#FA58B6] hover:from-[#6608A3] hover:to-[#E5429F] border-2 border-white shadow-[0_0_20px_rgba(250,88,182,0.6)] active:scale-95 transition-all duration-300 font-body"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span>Download Guidelines</span>
                    </a>
                </div>

                <!-- Desktop: Guidelines PDF Viewer -->
                <div class="hidden md:flex w-full h-[600px] lg:h-[750px] card-glow rounded-2xl overflow-hidden flex-col">
                    <div class="px-4 py-2.5 bg-[#3d099c] border-b border-purple-800/60 flex items-center justify-between text-xs font-mono text-gray-200">
                        <span class="font-semibold flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                            </svg>
                            <span>CodeRun Guidelines.pdf</span>
                        </span>
                        <a 
                            href="/documents/CodeRun%20Guidelines%20for%20Participants%20-%20English.pdf" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="text-purple-200 hover:text-white underline flex items-center gap-1 font-body transition-colors"
                        >
                            <span>Open in new tab</span>
                            <span>↗</span>
                        </a>
                    </div>
                    <iframe 
                        src="/documents/CodeRun%20Guidelines%20for%20Participants%20-%20English.pdf#toolbar=1" 
                        class="w-full flex-grow border-0 bg-white" 
                        title="CodeRun Guidelines for Participants"
                    >
                        <p class="p-6 text-center text-sm text-gray-600 font-body">
                            Your browser does not support inline PDF viewing. 
                            <a 
                                href="/documents/CodeRun%20Guidelines%20for%20Participants%20-%20English.pdf" 
                                download="CodeRun Guidelines for Participants - English.pdf"
                                class="inline-flex items-center gap-2 px-4 py-2 mt-2 rounded-lg bg-purple-700 text-white font-semibold hover:bg-purple-800 transition-colors"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                <span>Download Guidelines</span>
                            </a>
                        </p>
                    </iframe>
                </div>
            </div>

            <!-- Difficulty Levels: Easy vs Hard Track -->
            <div class="mb-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Easy Track -->
                    <x-card title="Easy Track Example">
                        <div class="space-y-4">
                            <p class="text-sm sm:text-base text-gray-200/90 font-body">
                                Text utility with RLE compression.
                            </p>
                            <p class="text-sm sm:text-base text-gray-200/90 font-body">
                                -Implement the compression and decompression functions.
                            </p>
                            <p class="text-sm sm:text-base text-gray-200/90 font-body">
                                -User interface using HTML, CSS & JS.
                            </p>
                            <p class="text-sm sm:text-base text-gray-200/90 font-body">
                                -Document your code.
                            </p>
                        </div>
                    </x-card>

                    <!-- Hard Track -->
                    <x-card title="Hard Track Example">
                        <div class="space-y-4">
                            <p class="text-sm sm:text-base text-gray-200/90 font-body">
                                -Implement the compression and decompression functions (same as Easy Track).
                            </p>
                            <p class="text-sm sm:text-base text-gray-200/90 font-body">
                                -User interface using ReactJS.
                            </p>
                            <p class="text-sm sm:text-base text-gray-200/90 font-body">
                                -Compression and decompression supports special characters (emojis, etc.).
                            </p>
                            <p class="text-sm sm:text-base text-gray-200/90 font-body">
                                -Option to load text by uploading a file.
                            </p>
                        </div>
                    </x-card>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 4. PROGRAM / TIMELINE (#program)                                          --}}
    {{-- ========================================================================= --}}
    <section id="program" class="py-16 lg:py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="Schedule"
                subtitle="Coming soon!"
            />
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 5. PRIZES (#prizes) - (EXTRA PERKS SECTION REMOVED)                       --}}
    {{-- ========================================================================= --}}
    <section id="prizes" class="py-16 lg:py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="Prizes"
                subtitle="To be announced!"
            />
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 6. FAQ (#faq)                                                             --}}
    {{-- ========================================================================= --}}
    <section id="faq" class="py-16 lg:py-24 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="FAQ"
            />

            <!-- Accordion Items -->
            <div class="space-y-3">
                <x-accordion-item number="01" question="What is CodeRun?" :open="true">
                    As the first and only IT marathon of its kind in Cluj-Napoca, CodeRun transforms the city into an immersive tech journey. 
                    The route takes participants directly through partner companies, featuring checkpoints with a dynamic mix of practical challenges, valuable networking, and hands-on learning. 
                </x-accordion-item>

                <x-accordion-item number="02" question="Who can participate?">
                    Any university student, no matter your major. High schoolers, we can’t wait to have you join us once you start your freshman year.
                </x-accordion-item>

                <x-accordion-item number="03" question="How big can your team be?">
                    You can sign up solo or in teams of up to 3 students. But don't worry, if you register alone, you can easily find or join a team during the training period. In fact, we highly encourage it!
                </x-accordion-item>

                <x-accordion-item number="04" question="Do I need to be a pro to join?">
                    Not at all! Basic knowledge of any programming language is plenty, no advanced experience required. 
                    Plus, you’ll have the chance to sharpen your skills or learn new things during our training sessions.
                </x-accordion-item>
            </div>
        </div>
    </section>

</x-layout>