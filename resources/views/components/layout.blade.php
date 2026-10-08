@props([
    'title' => 'CodeRun - IT Marathon',
    'description' => 'Site oficial CodeRun - Cea mai mare competiție de programare din România. Hackathon & IT marathon organizat de BEST Cluj-Napoca.',
    'keywords' => 'programare, competiție, coding, hackathon, IT marathon, Cluj-Napoca, BEST Cluj-Napoca, UTCN, student challenge',
    'author' => 'BEST Cluj-Napoca',
    'robots' => 'index, follow',
    'ogTitle' => null,
    'ogDescription' => null,
    'ogType' => 'website',
    'ogUrl' => null,
    'ogImage' => '/images/logo.png',
    'twitterCard' => 'summary_large_image',
    'twitterTitle' => null,
    'twitterDescription' => null,
    'twitterImage' => null,
    'canonicalUrl' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Standard SEO Metadata -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="{{ $author }}">
    <meta name="robots" content="{{ $robots }}">
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}">

    <!-- Open Graph Tags (Modeled after Next.js layout.tsx metadata) -->
    <meta property="og:title" content="{{ $ogTitle ?? $title }}">
    <meta property="og:description" content="{{ $ogDescription ?? $description }}">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:url" content="{{ $ogUrl ?? url()->current() }}">
    <meta property="og:site_name" content="CodeRun">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:locale" content="ro_RO">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="{{ $twitterCard }}">
    <meta name="twitter:title" content="{{ $twitterTitle ?? ($ogTitle ?? $title) }}">
    <meta name="twitter:description" content="{{ $twitterDescription ?? ($ogDescription ?? $description) }}">
    <meta name="twitter:image" content="{{ $twitterImage ?? $ogImage }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/images/titlu.svg">

    <!-- Tailwind CSS Setup -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        title: ["'BlueSakura'", 'sans-serif'],
                        body: ["'From the Stars Sb It'", 'sans-serif'],
                        sans: ["'From the Stars Sb It'", 'sans-serif'],
                    },
                    colors: {
                        wireframe: {
                            50: '#f9fafb',
                            100: '#f3f4f6',
                            200: '#e5e7eb',
                            300: '#d1d5db',
                            400: '#9ca3af',
                            500: '#6b7280',
                            600: '#4b5563',
                            700: '#374151',
                            800: '#1f2937',
                            900: '#111827',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js for lightweight wireframe interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        @font-face {
            font-family: 'BlueSakura';
            src: url('/fonts/BlueSakura.ttf') format('truetype'),
                 url('/fonts/BlueSakura.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'From the Stars Sb It';
            src: url('/fonts/From%20the%20Stars%20Sb%20It.otf') format('opentype'),
                 url('/fonts/From the Stars Sb It.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        body {
            font-family: 'From the Stars Sb It', sans-serif;
        }

        h1, h2, .font-title {
            font-family: 'BlueSakura', sans-serif;
        }

        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="min-h-screen bg-gray-50 text-gray-900 font-sans antialiased flex flex-col selection:bg-gray-200 selection:text-gray-900">
    <!-- Sticky Navigation -->
    <x-navbar />

    <!-- Main Content Slot -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Minimal Footer -->
    <x-footer />
</body>
</html>