<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>

<body class="antialiased font-roboto flex flex-col min-h-screen">
    <div class="flex justify-between px-16 py-4 text-gray-600">
        <h1 class="font-medium">SKSU TBI - STEP APP</h1>
        <x-nav></x-nav>
    </div>
    <div class="flex-1">
        {{ $slot }}
    </div>
    <div class="bg-gray-200 px-16 text-gray-500">
        <h4 class="py-8">&copy;2023 SKSU TBI - STEP APP</h4>
        <hr class="border-gray-400">
        <div class="py-4 flex justify-between">
            <x-nav></x-nav>
            <div class="flex gap-4">
                <a href="#">
                    <x-ri-facebook-box-fill class="h-3"></x-ri-facebook-box-fill>
                </a>
                <a href="#">
                    <x-ri-linkedin-fill class="h-3"></x-ri-linkedin-fill>
                </a>
                <a href="#">
                    <x-ri-twitter-fill class="h-3"></x-ri-twitter-fill>
                </a>
                <a href="#">
                    <x-ri-youtube-fill class="h-3"></x-ri-youtube-fill>
                </a>
                <a href="#">
                    <x-ri-instagram-fill class="h-3"></x-ri-instagram-fill>
                </a>
            </div>
        </div>

    </div>
    @livewire('notifications')
</body>

</html>
