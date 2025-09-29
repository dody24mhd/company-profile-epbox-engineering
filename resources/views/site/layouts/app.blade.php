<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EPBOX ENGINEERING')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    <!-- Blog specific CSS -->
    @if(request()->routeIs('site.blog*'))
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    @endif

    @stack('head')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Page Loader Styles */
        #page-loader {
            background: linear-gradient(135deg, #0A1128 0%, #0F1C3F 70%);
        }
        
        .loader-bar {
            animation: loaderAnimation 2s ease-in-out infinite;
        }
        
        @keyframes loaderAnimation {
            0%, 100% { transform: translateX(-100%); }
            50% { transform: translateX(300%); }
        }
        
        .hidden {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
    </style>
    @yield('meta')

    <script defer src="{{ asset('js/site.js') }}"></script>

    <!-- Blog specific JavaScript -->
    @if(request()->routeIs('site.blog*'))
    <script defer src="{{ asset('js/blog.js') }}"></script>
    @endif

    @stack('scripts_head')
    @stack('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>

<body class="site-body">
    <!-- Page Loader -->
    <div id="page-loader" class="fixed inset-0 bg-gray-950 z-[9999] flex items-center justify-center">
        <div class="flex flex-col items-center gap-4">
            <img src="{{ asset('img/logo2.png') }}" alt="Loading" class="h-12 w-auto object-contain">
            <div class="h-1 w-40 bg-gray-800 rounded overflow-hidden">
                <div class="h-full w-1/3 bg-blue-500 loader-bar"></div>
            </div>
        </div>
    </div>

    @include('site.layouts.partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('site.layouts.partials.footer')
    @stack('scripts')
</body>

</html>