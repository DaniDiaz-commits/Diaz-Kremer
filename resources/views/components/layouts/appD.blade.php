<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Diaz Kremer') }}</title> --}}
        <title>{{ $title ?? 'Diaz Kremer' }}</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    </head>
    <body class="font-sans antialiased  bg-gray-100 dark:bg-gray-900">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            <x-header />
            {{-- @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <x-footer />
    </body>
</html>