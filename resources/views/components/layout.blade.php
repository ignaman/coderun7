@props([
    'title' => 'CodeRun',
    'description' => 'The 7th edition of CodeRun. By BEST Cluj-Napoca',
    'keywords' => 'programare, competiție, coding, hackathon, IT marathon, Cluj-Napoca, BEST Cluj-Napoca, UTCN, student challenge',
    'author' => 'BEST Cluj-Napoca',
    'robots' => 'index, follow',
    'ogTitle' => 'CodeRun',
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
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JKXX9WDBB1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JKXX9WDBB1');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Standard SEO Metadata -->
    <title>CodeRun</title>
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
    <link rel="icon" href="/favicon.ico?v=2" sizes="48x48">
    <link rel="icon" type="image/png" href="/images/favicon-512.png?v=2" sizes="512x512">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png?v=2">

    <!-- Tailwind CSS Setup -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        bluesakura: ["'BlueSakura'", 'sans-serif'],
                        title: ["'BlueSakura'", 'sans-serif'],
                        script: ["'From the Stars Sb It'", "'From the Stars Sb'", 'cursive', 'sans-serif'],
                        body: ["'From the Stars Sb'", 'sans-serif'],
                        sans: ["'From the Stars Sb'", 'sans-serif'],
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

        @font-face {
            font-family: 'From the Stars Sb It';
            src: url('/fonts/From%20the%20Stars%20Sb%20It.otf') format('opentype'),
                 url('/fonts/From the Stars Sb It.otf') format('opentype');
            font-weight: normal;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'From the Stars Sb';
            src: url('/fonts/From%20the%20Stars%20Sb.otf') format('opentype'),
                 url('/fonts/From the Stars Sb.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        body {
            font-family: 'From the Stars Sb', sans-serif;
        }

        .font-bluesakura {
            font-family: 'BlueSakura', sans-serif;
            font-style: normal;
            font-weight: normal !important;
        }

        .font-script {
            font-family: 'From the Stars Sb It', 'From the Stars Sb', cursive, sans-serif;
            font-style: italic;
        }

        .shadow-pink-glow {
            text-shadow: 0 0 16px #f236ff,
                         0 0 32px rgba(242, 54, 255, 0.75),
                         0 0 55px rgba(242, 54, 255, 0.5),
                         0 3px 10px rgba(0, 0, 0, 0.9);
        }

        /* Static Fullscreen Background Layer */
        .site-static-bg {
            position: fixed;
            inset: 0;
            width: 100vw;
            height: 100vh;
            height: 100dvh;
            z-index: -10;
            pointer-events: none;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            /* Default: computers or mobile landscape mode */
            background-image: url('/images/bgsitef.svg');
        }

        /* Mobile phones in vertical / portrait position */
        @media (orientation: portrait) and (max-width: 1024px) {
            .site-static-bg {
                background-image: url('/images/bgtel.svg');
            }
        }

        /* Hero Neon Glows - Refined & Balanced */
        .hero-glow-intense {
            filter: drop-shadow(0 0 8px rgba(240, 99, 255, 0.8))
                   drop-shadow(0 0 18px rgba(183, 4, 255, 0.6))
                   drop-shadow(0 0 36px rgba(124, 57, 230, 0.35));
            transition: filter 0.3s ease;
        }

        .hero-glow-character {
            filter: drop-shadow(0 0 10px rgba(240, 99, 255, 0.7))
                   drop-shadow(0 0 22px rgba(183, 4, 255, 0.55))
                   drop-shadow(0 0 45px rgba(124, 57, 230, 0.3));
        }

        @media (max-width: 768px) {
            .hero-glow-intense {
                filter: drop-shadow(0 0 6px rgba(240, 99, 255, 0.75))
                       drop-shadow(0 0 14px rgba(183, 4, 255, 0.5))
                       drop-shadow(0 0 25px rgba(124, 57, 230, 0.25));
            }

            .hero-glow-character {
                filter: drop-shadow(0 0 7px rgba(240, 99, 255, 0.65))
                       drop-shadow(0 0 16px rgba(183, 4, 255, 0.45))
                       drop-shadow(0 0 30px rgba(124, 57, 230, 0.25));
            }
        }

        /* Register Button - Solid Navbar-Color Contour (#23045c) & Button Shape */
        .hero-register-btn {
            display: block;
            border: 3.5px solid #23045c;
            border-radius: 1.5rem;
            background-color: rgba(35, 4, 92, 0.55);
            padding: 0.5rem 1rem;
            box-shadow: 0 4px 16px rgba(35, 4, 92, 0.5);
            transform-origin: center center;
            transition: transform 0.25s ease-out, background-color 0.25s ease-out, box-shadow 0.25s ease-out;
            cursor: pointer;
        }

        .hero-register-btn:hover {
            transform: scale(1.04);
            background-color: rgba(35, 4, 92, 0.85);
            box-shadow: 0 6px 22px rgba(35, 4, 92, 0.75);
        }

        .hero-register-btn:active {
            transform: scale(0.98);
        }

        .hero-register-btn:hover .hero-glow-intense {
            filter: drop-shadow(0 0 10px rgba(240, 99, 255, 0.95))
                   drop-shadow(0 0 24px rgba(183, 4, 255, 0.75))
                   drop-shadow(0 0 45px rgba(124, 57, 230, 0.5));
        }

        @media (max-width: 768px) {
            .hero-register-btn {
                border-width: 3px;
                border-radius: 1.25rem;
                padding: 0.4rem 0.85rem;
            }
        }

        /* Card Glow - Matching fatacr.svg glow colors & Navbar Background #23045c */
        .card-glow {
            background-color: #3d099c;
            border: 1.5px solid rgba(183, 4, 255, 0.45);
            box-shadow: 0 0 16px rgba(240, 99, 255, 0.35),
                        0 0 32px rgba(183, 4, 255, 0.25),
                        0 0 55px rgba(124, 57, 230, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .card-glow:hover {
            border-color: rgba(240, 99, 255, 0.7);
            box-shadow: 0 0 22px rgba(240, 99, 255, 0.5),
                        0 0 45px rgba(183, 4, 255, 0.35),
                        0 0 70px rgba(124, 57, 230, 0.3);
        }

        @media (max-width: 768px) {
            .card-glow {
                box-shadow: 0 0 12px rgba(240, 99, 255, 0.3),
                            0 0 24px rgba(183, 4, 255, 0.2),
                            0 0 38px rgba(124, 57, 230, 0.15);
            }
        }

        /* Partner Cards - Semi-see-through glass with glowing border */
        .partner-card-glow {
            background-color: rgba(26, 26, 64, 0.45);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 2px solid #7A0BC0;
            box-shadow: 0 0 16px rgba(122, 11, 192, 0.9),
                        0 0 32px rgba(183, 4, 255, 0.5),
                        0 0 50px rgba(124, 57, 230, 0.3);
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .partner-card-glow:hover {
            border-color: #FA58B6;
            box-shadow: 0 0 25px rgba(250, 88, 182, 0.85),
                        0 0 45px rgba(183, 4, 255, 0.6),
                        0 0 70px rgba(124, 57, 230, 0.35);
        }

        @media (max-width: 768px) {
            .partner-card-glow {
                box-shadow: 0 0 12px rgba(122, 11, 192, 0.75),
                            0 0 24px rgba(183, 4, 255, 0.35);
            }
        }

        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="min-h-screen text-gray-900 font-sans antialiased flex flex-col selection:bg-gray-200 selection:text-gray-900 relative overflow-x-hidden">
    <!-- Static Fullscreen Background Layer -->
    <div class="site-static-bg" aria-hidden="true"></div>

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