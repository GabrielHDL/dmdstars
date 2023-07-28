<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
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
    <body>
        <div class="font-sans text-gray-900 antialiased bg-rifleGreen">
            {{ $slot }}
        </div>
    </body>
</html>
