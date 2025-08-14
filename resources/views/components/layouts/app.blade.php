<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COC - Clash Of Clans</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0A0E23] text-white">
    <x-layouts.header/>
    <main>
        {{ $slot }}
    </main>
    <x-layouts.footer/>
</body>
</html>
