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

<body class="font-sans antialiased m-0">
    @include('partials.loader')

    <!-- Navbar -->
    <div>
        @include('partials.navbar')
    </div>

    <div class="min-h-screen page-content-wrapper">
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.body.classList.add('loading');
            const loader = document.getElementById('loader-overlay');
            if (loader) {
                // The CSS animation 'logo-reveal' is 1.5s
                // We add a small buffer before hiding the loader
                setTimeout(() => {
                    loader.classList.add('hidden');
                    document.body.classList.remove('loading');
                    document.body.classList.add('loaded');
                }, 1600); // 1500ms for animation + 100ms buffer
            }
        });
    </script>
</body>

</html>