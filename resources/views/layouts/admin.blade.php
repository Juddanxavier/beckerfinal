<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="admin-logo-container">
        <img src="/images/logo.png" alt="Admin Logo" class="h-12 w-auto">
    </div>
    <div class="min-h-screen bg-gray-100">
        <!-- Admin-specific navigation, if any -->

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
