<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Search Console Verification -->
    @if(config('app.google_search_console_verification'))
    <meta name="google-site-verification" content="{{ config('app.google_search_console_verification') }}">
    @endif
    
    <!-- Site favicon -->
    <link rel="icon" type="image/x-icon"
        href="{{ asset('img/logotab.ico') }}?v={{ filemtime(public_path('img/logotab.ico')) }}">
    <link rel="icon" type="image/svg+xml"
        href="{{ asset('img/logotab.svg') }}?v={{ filemtime(public_path('img/logotab.svg')) }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('img/logotab.ico') }}?v={{ filemtime(public_path('img/logotab.ico')) }}">
    <link rel="alternate icon" type="image/png"
        href="{{ asset('img/logo2.png') }}?v={{ filemtime(public_path('img/logo2.png')) }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logo2.png') }}?v={{ filemtime(public_path('img/logo2.png')) }}">
    <title>@yield('title', 'EPBOX ENGINEERING PTE. LTD')</title>
    <meta name="description"
        content="@yield('meta_description','EPBOX ENGINEERING PTE LTD – Control panels and industrial automation solutions.')">
    <meta name="keywords"
        content="@yield('meta_keywords', 'control panel manufacturer, industrial automation, electrical control panels, PLC programming, SCADA systems, control system solutions, Singapore, EPBOX Engineering')">
    <meta name="author" content="EPBOX ENGINEERING PTE. LTD">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'EPBOX ENGINEERING PTE. LTD')">
    <meta property="og:description"
        content="@yield('og_description', 'EPBOX ENGINEERING PTE LTD – Control panels and industrial automation solutions.')">
    <meta property="og:image" content="@yield('og_image', url(asset('img/logo2.png')))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="EPBOX ENGINEERING PTE. LTD">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('twitter_title', 'EPBOX ENGINEERING PTE. LTD')">
    <meta name="twitter:description"
        content="@yield('twitter_description', 'EPBOX ENGINEERING PTE LTD – Control panels and industrial automation solutions.')">
    <meta name="twitter:image" content="@yield('twitter_image', url(asset('img/logo2.png')))">

    <!-- Structured Data - Organization -->
    @php
    $socialLinks = array_filter([
    config('app.facebook_url'),
    config('app.linkedin_url'),
    config('app.twitter_url'),
    config('app.instagram_url'),
    config('app.youtube_url')
    ]);

    $structuredData = [
    "@context" => "https://schema.org",
    "@type" => "Organization",
    "name" => "EPBOX ENGINEERING PTE. LTD",
    "alternateName" => "EPBOX Engineering",
    "url" => url('/'),
    "logo" => url(asset('img/logo2.png')),
    "description" => "Professional control panel manufacturer and industrial automation solutions provider",
    "address" => [
    "@type" => "PostalAddress",
    "addressCountry" => "SG",
    "addressLocality" => "Singapore",
    "streetAddress" => config('app.company_street', '1 Sunview Road Eco-Tech@Sunview'),
    "postalCode" => config('app.company_postal', '627615')
    ],
    "contactPoint" => [
    "@type" => "ContactPoint",
    "contactType" => "Customer Service",
    "email" => config('app.company_email', 'sales@epbox-engg.com'),
    "telephone" => config('app.company_phone', '+65 8282 9835'),
    "availableLanguage" => "English"
    ],
    "areaServed" => [
    [
    "@type" => "Country",
    "name" => "Singapore"
    ],
    [
    "@type" => "Country",
    "name" => "Indonesia"
    ]
    ]
    ];

    if (!empty($socialLinks)) {
    $structuredData["sameAs"] = array_values($socialLinks);
    }
    @endphp
    <script type="application/ld+json">
        {!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <!-- CRITICAL: Inline CSS for chatbot - MUST be first to prevent flash on first load -->
    <style id="chatbot-critical-css">
        /* Force hide chatbot immediately - highest priority, loaded before any external resource */
        #chatBox,
        .chat-box,
        #chatPopup,
        .chat-popup {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
            pointer-events: none !important;
            position: fixed !important;
        }

        /* Only show when explicitly enabled AND user scrolled */
        #chatBox.chat-ready.chat-visible,
        .chat-box.chat-ready.chat-visible {
            display: flex !important;
            opacity: 1 !important;
            visibility: visible !important;
            pointer-events: auto !important;
            cursor: pointer !important;
            animation: chatFadeIn 0.3s ease-out forwards;
        }

        /* Force pointer events to be enabled for visible chatbot */
        #chatBox.chat-visible,
        .chat-box.chat-visible {
            pointer-events: auto !important;
            cursor: pointer !important;
        }

        @keyframes chatFadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>

    <!-- Blocking script to hide chatbot before DOM is ready -->
    <script>
        // CRITICAL: Hide chatbot immediately - runs synchronously before any other resource
        (function() {
            'use strict';
            // Create style element and inject critical CSS immediately
            var style = document.createElement('style');
            style.id = 'chatbot-inline-critical';
            style.textContent = '#chatBox, .chat-box { display: none !important; opacity: 0 !important; visibility: hidden !important; pointer-events: none !important; }';
            document.head.insertBefore(style, document.head.firstChild);
            
            // Also hide via script when DOM is ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', function() {
                    var chatBox = document.getElementById('chatBox');
                    if (chatBox) {
                        chatBox.style.cssText = 'display: none !important; opacity: 0 !important; visibility: hidden !important; pointer-events: none !important;';
                    }
                });
            } else {
                var chatBox = document.getElementById('chatBox');
                if (chatBox) {
                    chatBox.style.cssText = 'display: none !important; opacity: 0 !important; visibility: hidden !important; pointer-events: none !important;';
                }
            }
        })();
    </script>

    <!-- Preconnect to external domains for faster loading -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <link rel="dns-prefetch" href="https://js.pusher.com">

    <!-- Load Font Awesome asynchronously -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Load Google Fonts with display=swap for better performance -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">

    <!-- CRITICAL: Industries page - Hide content before CSS loads -->
    @if(request()->routeIs('site.industries') || request()->is('industries') || request()->path() === 'industries')
    <style>
        /* Hide ALL content immediately - runs BEFORE site.css loads */
        body.page-loading>*:not(#page-loader),
        body.page-loading #main-content,
        body.page-loading .navbar,
        body.page-loading nav.navbar,
        body.page-loading footer {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
        }

        /* Ensure loader is ALWAYS visible */
        #page-loader {
            display: flex !important;
            opacity: 1 !important;
            visibility: visible !important;
            z-index: 99999 !important;
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
        }
    </style>
    <script>
        // CRITICAL: Hide content IMMEDIATELY - runs synchronously before any other script
        (function() {
            'use strict';
            
            // Inject blocking style IMMEDIATELY at the very top of head
            var blockingStyle = document.createElement('style');
            blockingStyle.id = 'industries-blocking-css';
            blockingStyle.textContent = 'body.page-loading > *:not(#page-loader), body.page-loading #main-content, body.page-loading .navbar, body.page-loading nav.navbar, body.page-loading footer { display: none !important; opacity: 0 !important; visibility: hidden !important; } #page-loader { display: flex !important; opacity: 1 !important; visibility: visible !important; z-index: 99999 !important; position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important; }';
            if (document.head) {
                if (document.head.firstChild) {
                    document.head.insertBefore(blockingStyle, document.head.firstChild);
                } else {
                    document.head.appendChild(blockingStyle);
                }
            }
            
            function hideContent() {
                if (!document.body) return;
                var children = document.body.children;
                for (var i = 0; i < children.length; i++) {
                    var el = children[i];
                    if (el.id !== 'page-loader') {
                        el.style.cssText = 'display: none !important; opacity: 0 !important; visibility: hidden !important; pointer-events: none !important;';
                    }
                }
                var loader = document.getElementById('page-loader');
                if (loader) {
                    loader.style.cssText = 'display: flex !important; opacity: 1 !important; visibility: visible !important; z-index: 99999 !important; position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important;';
                    loader.classList.remove('hidden');
                }
            }
            
            // Hide immediately
            if (document.body) {
                hideContent();
            }
            
            // Hide on DOM ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', hideContent);
            } else {
                hideContent();
            }
            
            // Aggressively hide any new content that appears
            var observer = new MutationObserver(function(mutations) {
                if (document.body && document.body.classList.contains('page-loading')) {
                    hideContent();
                }
            });
            
            if (document.body) {
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            } else {
                document.addEventListener('DOMContentLoaded', function() {
                    observer.observe(document.body, {
                        childList: true,
                        subtree: true
                    });
                });
            }
            
            // Continuously enforce hiding
            var interval = setInterval(function() {
                if (document.body && document.body.classList.contains('page-loading')) {
                    hideContent();
                } else {
                    clearInterval(interval);
                    observer.disconnect();
                }
            }, 10);
        })();
    </script>
    @endif

    <!-- Preload critical CSS with versioning for cache busting -->
    <link rel="preload" href="{{ asset('css/site.css') }}?v={{ filemtime(public_path('css/site.css')) }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/site.css') }}?v={{ filemtime(public_path('css/site.css')) }}">
    </noscript>

    <!-- Blog specific CSS -->
    @if(request()->routeIs('site.blog*'))
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    @endif

    @stack('head')
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0A1128;
            /* Prevent white flash */
        }

        /* Critical CSS: Prevent FOUC for hero sections */
        .gradient-bg {
            background: linear-gradient(135deg, #0A1128 0%, #0F1C3F 50%, #1E90FF 100%);
            background-color: #0A1128;
        }

        .industries-hero,
        .services-hero,
        .about-hero,
        .portfolio-hero {
            background: linear-gradient(135deg, #0F1C3F 0%, #1E90FF 100%);
            background-color: #0A1128;
            /* Hero sections should be visible immediately, only content animates */
            opacity: 1 !important;
            transform: none !important;
        }

        .fade-section {
            opacity: 0;
            transform: translateY(40px);
        }

        .fade-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Page Loader Styles */
        #page-loader {
            background: linear-gradient(135deg, #0A1128 0%, #0F1C3F 70%);
            z-index: 99999 !important;
            /* Higher than chatbot during loading */
        }

        .loader-bar {
            animation: loaderAnimation 2s ease-in-out infinite;
        }

        @keyframes loaderAnimation {

            0%,
            100% {
                transform: translateX(-100%);
            }

            50% {
                transform: translateX(300%);
            }
        }

        .hidden {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        /* Ensure chatbot is hidden when page loader is active */
        /* Using class-based approach for better browser compatibility */
        body.page-loading #chatBox,
        body.page-loading .chat-box {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
            pointer-events: none !important;
        }

        .skip-link {
            position: absolute;
            left: -9999px;
            top: auto;
            width: 1px;
            height: 1px;
            overflow: hidden;
        }

        .skip-link:focus {
            position: static;
            width: auto;
            height: auto;
            padding: 8px 12px;
            background: #0F1C3F;
            color: #fff;
            z-index: 9999;
        }
    </style>
    @yield('meta')

    <!-- Load site.js with versioning for cache busting -->
    <script defer src="{{ asset('js/site.js') }}?v={{ filemtime(public_path('js/site.js')) }}"></script>

    <!-- Blog specific JavaScript -->
    @if(request()->routeIs('site.blog*'))
    <script defer src="{{ asset('js/blog.js') }}"></script>
    @endif

    @stack('scripts_head')
    @stack('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="site-body page-loading">
    <a href="#main-content" class="skip-link">Skip to content</a>
    <!-- Page Loader -->
    <div id="page-loader" class="fixed inset-0 bg-gray-950 z-[9999] flex items-center justify-center">
        <div class="flex flex-col items-center gap-4">
            <img src="{{ asset('img/logo2.png') }}?v={{ filemtime(public_path('img/logo2.png')) }}" alt="Loading"
                class="h-12 w-auto object-contain" loading="eager" fetchpriority="high">
            <div class="h-1 w-40 bg-gray-800 rounded overflow-hidden">
                <div class="h-full w-1/3 bg-blue-500 loader-bar"></div>
            </div>
        </div>
    </div>

    @include('site.layouts.partials.navbar')
    <main id="main-content">
        @yield('content')
    </main>
    @include('site.layouts.partials.footer')
    @stack('scripts')
</body>

</html>