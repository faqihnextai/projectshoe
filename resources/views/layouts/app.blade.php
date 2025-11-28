<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SHOENIX')</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">

    {{-- BARIS KRUSIAL UNTUK MEMUAT CSS/JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Oswald:wght@200..700&display=swap"rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    {{-- BARIS BARU INI UNTUK MEMANGGIL LOADING SCREEN --}}
    @include('partials.loadingscreen')

    {{-- 1. HEADER (Partial View) --}}
    @include('partials.header')

    {{-- SLOT UNTUK HERO (Full Width, tidak ada class 'container') --}}
    @yield('full-width-content') 

    {{-- SLOT UTAMA (Menggunakan container untuk membatasi lebar) --}}
    <div class="container mx-auto py-4">
        @yield('content')
    </div>

    {{-- 3. FOOTER (Partial View) --}}
    @include('partials.footer')
</body>

</html>