<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:title" content="DMD Stars®" />
        <meta property="og:description" content="Join DMD Stars on July 11th" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{Request::url()}}" />
        <meta property="og:image" content="{{asset('assets/og/og_dmd.png')}}" />

        <meta name="theme-color" content="#E6E1DE" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- Favicon --}}
        <link rel="icon" href="{{asset('assets/favicons/favicon32x32.png')}}" sizes="32x32" />
        <link rel="icon" href="{{asset('assets/favicons/favicon192x192.png')}}" sizes="192x192" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased w-full">
        <div id="preloader" class="transition-all ease-out duration-300 opacity-100 bg-platinum w-full h-screen flex justify-center items-center fixed top-0 z-[9999]">
            <div class="w-full flex justify-center items-center flex-col">
                <img class="h-20 mb-6 w-auto" src="{{asset('assets/logos/svg/isotipo_gre.svg')}}" alt="Logo">
                <div class="h-5 w-80 sm:w-96 relative max-w-xl rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-200 absolute"></div>
                    <div id="bar" class="transition-all ease-in-out duration-[2000ms] h-full bg-deer relative w-0"></div>
                </div>
            </div>
        </div>
        <x-banner />

        <div class="min-h-screen bg-platinum">
            @livewire('navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <x-footer />

        <script rel="preload" src="{{asset('assets/js/custom.js')}}"></script>

        @livewireScripts

    </body>
</html>
