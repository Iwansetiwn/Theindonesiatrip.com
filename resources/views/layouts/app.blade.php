<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="flex flex-col min-h-full font-sans antialiased bg-[#F5F5F5]">
    <div id="app" x-data="{ mobileMenuOpen: false }" class="flex flex-col min-h-full">
        <x-header></x-header>

        <main class="flex-grow bg-[#f2efef] py-8">
            <div class="container mx-auto px-4">
                @yield('content')
            </div>
        </main>

        <x-footer></x-footer>
    </div>
</body>
</html>
