<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/icon-app.jpg') }}" type="image/x-icon">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-[#0A0E23] text-white">
    <x-layouts.header/>
    <main>
        {{ $slot }}
    </main>
    <x-layouts.footer/>
    <x-toast/>
</body>
</html>
