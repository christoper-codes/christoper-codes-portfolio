<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700&family=jetbrains-mono:400,700" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
    </head>
    <body class="bg-white dark:bg-neutral-950 text-black dark:text-white overflow-x-hidden px-5 lg:px-0 py-5 md:py-7">
        @inertia
    </body>
</html>
