<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <meta name="description" content="Data Guard - Platform belajar interaktif keamanan data pribadi untuk siswa SMA. Pelajari cara melindungi data pribadimu lewat e-book interaktif dan quiz.">
    <meta name="theme-color" content="#2563eb">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="DataGuard">
    <meta name="mobile-web-app-capable" content="yes">
    <title>{{ config('app.name', 'DataGuard') }} - Belajar Keamanan Data Pribadi</title>

    <!-- Favicon & PWA -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 font-sans antialiased">
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

    @stack('scripts')
</body>
</html>
