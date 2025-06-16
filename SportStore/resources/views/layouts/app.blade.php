<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased">
<!-- Language Switcher -->
<!--<div class="fixed top-6 left-6 z-50">
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="flex items-center gap-2 bg-gray-800 text-white px-4 py-2 rounded-full shadow hover:bg-gray-700 transition">
            🌐 {{ strtoupper(app()->getLocale()) }}
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" @click.away="open = false" class="absolute left-0 mt-2 bg-white border rounded-md shadow-lg w-40 z-50">
            <a href="{{ route('lang.switch', 'uk') }}"
               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ app()->getLocale() === 'uk' ? 'font-bold bg-gray-100' : '' }}">
                🇺🇦 Українська
            </a>
            <a href="{{ route('lang.switch', 'en') }}"
               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ app()->getLocale() === 'en' ? 'font-bold bg-gray-100' : '' }}">
                🇬🇧 English
            </a>
        </div>
    </div>
</div>-->

<script>
    function toggleLangPopup() {
        const popup = document.getElementById('langPopup');
        popup.classList.toggle('hidden');
    }
</script>
    @include('layouts.header')
    <main class="px-10">
        {{ $slot }}
    </main>
    @include('layouts.footer')
    @livewireScripts
</body>

</html>
