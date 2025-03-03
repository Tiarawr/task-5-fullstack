<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Blog')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-200">

    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="container mx-auto px-4 py-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
