<x-layout title="Partners - CodeRun">

    {{-- ========================================================================= --}}
    {{-- PARTNERS SECTION                                                          --}}
    {{-- ========================================================================= --}}
    <section class="py-16 lg:py-24 border-b border-gray-200 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Centered Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 tracking-normal leading-tight font-title">
                    Partners
                </h1>
                <p class="mt-4 text-base sm:text-lg text-gray-600 leading-relaxed">
                    We are greatful for the support of out sponsors.
                </p>
            </div>

            @php
                $partnerLogos = [
                    ['src' => '/images/BMW_TechWorks_Romania_black_RGB.png', 'alt' => 'BMW TechWorks Romania'],
                    ['src' => '/images/Globant-Original.svg', 'alt' => 'Globant'],
                    ['src' => '/images/UNIQA_SoftwareServices_V1_4C-_1_.svg', 'alt' => 'UNIQA Software Services'],
                    ['src' => '/images/SeeUS.jpg', 'alt' => 'SeeUS'],
                ];
            @endphp

            <!-- Partner Cards (2 on each row) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10 max-w-5xl mx-auto">
                @foreach ($partnerLogos as $logo)
                    <div class="h-60 sm:h-68 lg:h-72 rounded-2xl border border-gray-200 bg-white shadow-xs hover:shadow-md hover:border-gray-300 transition-all flex items-center justify-center p-8 sm:p-12 group">
                        <img 
                            src="{{ $logo['src'] }}" 
                            alt="{{ $logo['alt'] }}" 
                            class="max-h-24 sm:max-h-28 lg:max-h-32 w-auto max-w-[80%] object-contain transition-transform duration-300 group-hover:scale-105"
                        >
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
