<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'TBD WST') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Meta -->
    <meta name="description" content="Туристическая компания ТОО TBD - ваш надежный партнер в сфере B2B туризма.">
    <meta name="keywords" content="туризм, агентства, туры, B2B, TBD WST">
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <x-navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="flex-grow">
            @yield('content') <!-- Используем секцию вместо $slot -->
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white text-center py-4">
            <div class="container mx-auto">
                <p>&copy; {{ date('Y') }} ТОО TBD (Тибиди). Все права защищены.</p>
                <p>Свяжитесь с нами: <a href="mailto:info@tbd.kz" class="text-blue-400 hover:underline">info@tbd.kz</a></p>
            </div>
        </footer>
    </div>
</body>
</html>
