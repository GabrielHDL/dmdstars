<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <style>
            @font-face {
                font-family: 'proxima_novabold';
                src: url('/assets/fonts/proximanova-bold-webfont.woff2') format('woff2'),
                    url('/assets/fonts/proximanova-bold-webfont.woff') format('woff');
                font-weight: normal;
                font-style: normal;

            }




            @font-face {
                font-family: 'proxima_novaregular';
                src: url('/assets/fonts/proxima_nova_font-webfont.woff2') format('woff2'),
                    url('/assets/fonts/proxima_nova_font-webfont.woff') format('woff');
                font-weight: normal;
                font-style: normal;

            }




            @font-face {
                font-family: 'saol_displayregular';
                src: url('/assets/fonts/saoldisplay-regular-webfont.woff2') format('woff2'),
                    url('/assets/fonts/saoldisplay-regular-webfont.woff') format('woff');
                font-weight: normal;
                font-style: normal;

            }
        </style>
        <x-banner />

        <div class="min-h-screen bg-platinum">
            @livewire('navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <x-footer />

    </body>
</html>
