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
                    <h3 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 font-title tracking-normal">
                        CodeRun Moments
                    </h3>
                </div>
                <div class="aspect-video w-full flex items-center justify-center relative overflow-hidden shadow-xs">
                    <!-- YouTube video iframe container -->
                    <video 
                        class="w-full h-full object-cover rounded-2xl" 
                        controls 
                        playsinline 
                        preload="metadata"
                        poster="/images/video-poster.jpg">
                        <source src="/video-stream" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
            </div>
        </div>
    </section>

    {{-- ========================================================================= --}}
    {{-- 3. HOW IT WORKS / GUIDELINES (#how-it-works)                              --}}
    {{-- ========================================================================= --}}
    <section id="how-it-works" class="py-16 lg:py-24 border-b border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="How It Works"
                subtitle="The 7th edition of CodeRun is here! Two difficulty levels and one ultimate race."
            />

            <!-- Route & Checkpoints Progression -->
            <div class="mb-16 border border-gray-200 rounded-2xl p-6 sm:p-8 bg-gray-50/50">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white border border-gray-200 rounded-xl p-6 flex flex-col justify-between shadow-xs">
                        <div>
                            
                            <h4 class="text-base sm:text-lg font-semibold text-gray-900 mt-3">2-13 November - The Training Phase</h4>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                                Level up before the main event. Dive deep into intensive, specialized sessions delivered directly by our top-tier IT partner companies and 
                                professors from university. This is your chance to gain exclusive industry insights, master new technical skills, 
                                and build the ultimate toolkit you’ll need to crush the competition. 

                            </p>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl p-6 flex flex-col justify-between shadow-xs">
                        <div>
                            
                            <h4 class="text-base sm:text-lg font-semibold text-gray-900 mt-3">14-15 November - The Competition</h4>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                                It’s time to show what you’re made of. Hit the streets, navigate your way through the city, and conquer a series of high-stakes checkpoints designed by our associates. 
                                Expect fast-paced coding challenges, real-time problem-solving, and networking on the move.
                                Take on the challenge solo and let us match you with the perfect crew, or bring two teammates to form an unstoppable trio.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Guidelines PDF Viewer (replaces route map diagram) -->
                <div class="w-full h-[600px] lg:h-[750px] border border-gray-300 rounded-xl overflow-hidden bg-white shadow-xs flex flex-col">
                    <div class="px-4 py-2.5 bg-gray-100 border-b border-gray-200 flex items-center justify-between text-xs font-mono text-gray-700">
                        <span class="font-semibold flex items-center gap-2">
                            <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                            </svg>
                            
                        </span>
                        <a 
                            href="/documents/CodeRun%20Guidelines%20for%20Participants%20-%20English.pdf" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="text-gray-600 hover:text-gray-900 underline flex items-center gap-1 font-body"
                        >
                            <span>Open in new tab</span>
                            <span>↗</span>
                        </a>
                    </div>
                    <iframe 
                        src="/documents/CodeRun%20Guidelines%20for%20Participants%20-%20English.pdf#toolbar=1" 
                        class="w-full flex-grow border-0" 
                        title="CodeRun Guidelines for Participants"
                    >
                        <p class="p-6 text-center text-sm text-gray-600 font-body">
                            Your browser does not support inline PDF viewing. 
                            <a href="/documents/CodeRun%20Guidelines%20for%20Participants%20-%20English.pdf" target="_blank" class="text-gray-900 underline">
                                Download the PDF here
                            </a>.
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
                            <p class="text-sm text-gray-600">
                                Text utility with RLE compression.
                            </p>
                            <p class="text-sm text-gray-600">
                                -Implement the compression and decompression functions.
                            </p>
                            <p class="text-sm text-gray-600">
                                -User interface using HTML, CSS & JS.
                            </p>
                            <p class="text-sm text-gray-600">
                                -Document your code.
                            </p>
                        </div>
                    </x-card>

                    <!-- Hard Track -->
                    <x-card title="Hard Track Example">
                        <div class="space-y-4">
                            <p class="text-sm text-gray-600">
                                -Implement the compression and decompression functions (same as Easy Track).
                            </p>
                            <p class="text-sm text-gray-600">
                                -User interface using ReactJS.
                            </p>
                            <p class="text-sm text-gray-600">
                                -Compression and decompression supports special characters (emojis, etc.).
                            </p>
                            <p class="text-sm text-gray-600">
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
    <section id="program" class="py-16 lg:py-24 border-b border-gray-200 bg-gray-50/40">
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
    <section id="prizes" class="py-16 lg:py-24 border-b border-gray-200 bg-white">
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
    <section id="faq" class="py-16 lg:py-24 border-b border-gray-200 bg-white">
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