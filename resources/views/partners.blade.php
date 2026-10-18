<x-layout title="Partners - CodeRun">

    {{-- ========================================================================= --}}
    {{-- PARTNERS SECTION                                                          --}}
    {{-- ========================================================================= --}}
    <section class="py-16 lg:py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Centered Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16">
                <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-normal text-white tracking-normal leading-none font-bluesakura shadow-pink-glow">
                    Partners
                </h1>
                <p class="mt-4 text-base sm:text-lg text-gray-100 leading-relaxed drop-shadow-[0_1px_6px_rgba(0,0,0,0.5)]">
                    We are greatful for the support of out sponsors.
                </p>
            </div>

            @php
                $partnerLogos = [
                    [
                        'src' => '/images/BMW_TechWorks_Romania_white_RGB.png', 
                        'alt' => 'BMW TechWorks Romania',
                        'padding' => 'p-4 sm:p-6 lg:p-7',
                        'imgClass' => 'w-[96%] sm:w-[94%] lg:w-[92%] max-h-32 sm:max-h-36 lg:max-h-40',
                    ],
                    ['src' => '/images/Globant-White-Green.svg', 'alt' => 'Globant'],
                    ['src' => '/images/UNIQA_SoftwareServices_V1_1C_neg.svg', 'alt' => 'UNIQA Software Services'],
                    ['src' => '/images/SeeUS.jpg', 'alt' => 'SeeUS Work & Travel'],
                ];
            @endphp

            <!-- Partner Cards (2 on each row) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10 max-w-5xl mx-auto">
                @foreach ($partnerLogos as $logo)
                    <div class="h-60 sm:h-68 lg:h-72 partner-card-glow rounded-2xl flex items-center justify-center {{ $logo['padding'] ?? 'p-8 sm:p-12' }} hover:-translate-y-1 transition-all duration-300 group">
                        <img 
                            src="{{ $logo['src'] }}" 
                            alt="{{ $logo['alt'] }}" 
                            class="{{ $logo['imgClass'] ?? 'max-h-24 sm:max-h-28 lg:max-h-32 w-auto max-w-[85%]' }} object-contain transition-transform duration-300 group-hover:scale-105 {{ !empty($logo['invert']) ? 'brightness-0 invert' : '' }}"
                        >
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
