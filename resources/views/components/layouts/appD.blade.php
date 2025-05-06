<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Diaz Kremer' }}</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    </head>
    <body class="font-sans antialiased bg-gray-100 min-h-screen flex flex-col">

            <!-- Page Heading -->
            <x-header />

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <x-footer />
    </body>
</html>
