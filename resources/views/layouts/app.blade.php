<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts - Work Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased m-0" x-data="{ loading: true }"
    x-init="window.addEventListener('DOMContentLoaded', () => { setTimeout(() => loading = false, 600); })">
    <!-- Page Loader Overlay -->
    <div x-show="loading" x-transition.opacity.duration.500ms
        class="fixed inset-0 z-50 flex items-center justify-center bg-white">
        <img src="/images/becker-logo-new.png" alt="Loading..." class="w-full max-w-4xl animate-bounce"
            style="animation: bounce 1.2s infinite;" />
        <style>
            @keyframes bounce {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-30px);
                }
            }
        </style>
    </div>
    <!-- Navbar (hidden while loading) -->
    <div x-show="!loading" x-transition.opacity.duration.300ms>
        @include('partials.navbar')
    </div>

    <div class="min-h-screen ">
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    @include('partials.footer')

</body>

</html>
