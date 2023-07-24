<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="theme-color" content="#E6E1DE" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- DROPZONE CSS --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- Favicon --}}
        <link rel="icon" href="{{asset('assets/favicons/favicon32x32.png')}}" sizes="32x32" />
        <link rel="icon" href="{{asset('assets/favicons/favicon192x192.png')}}" sizes="192x192" />

        {{-- ckeditor --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

        {{-- sweetalert2 --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- DropZone --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
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
    <body class="font-sans antialiased w-full">
        @if (Request::routeIs('admin.home'))
            <div id="preloader" class="transition-all ease-out duration-300 opacity-100 bg-rifleGreen w-full h-screen flex justify-center items-center fixed top-0 z-[9999]">
                <div class="w-full flex justify-center items-center flex-col">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 328.23 79.06" class="h-20 mb-6 w-auto text-platinum fill-current" fill="none">
                        <g id="objects">
                            <path
                                d="M31.18,20.18H15.94V58.83h15.3c12.05,0,20.45-7.65,20.45-19.36S43.29,20.18,31.18,20.18Zm0,31.4h-7V27.42h7.07c7.88,0,12.05,5.28,12.05,12C43.29,46.08,38.83,51.58,31.18,51.58Z" />
                            <path
                                d="M87.84,20.18,78.46,44.34,69.07,20.18H57.54V58.83h8.23V31L76.66,58.83h3.59L91.15,31V58.83h8.28V20.18Z" />
                            <path
                                d="M122.32,20.18H107.08V58.83h15.3c12.05,0,20.45-7.65,20.45-19.36S134.43,20.18,122.32,20.18Zm0,31.4h-7V27.42h7.07c7.88,0,12.05,5.28,12.05,12C134.43,46.08,130,51.58,122.32,51.58Z" />
                            <path
                                d="M153.26,30c0-3.65,3.36-6.14,7.94-6.14a14.59,14.59,0,0,1,11.18,4.63l2.9-3.53c-3.25-3.42-7.83-5.45-13.68-5.45-7.65,0-13.32,4.41-13.32,10.78,0,13.79,22.88,8.23,22.88,18.19,0,3-2.2,6.72-9.09,6.72A15.92,15.92,0,0,1,150,49.67l-2.9,3.71c3.19,3.59,8.17,6.14,14.83,6.14,10.43,0,14.25-5.79,14.25-11.36C176.14,33.74,153.26,38.72,153.26,30Z" />
                            <path d="M180.32,20.18v4.29h12.22V58.83h4.81V24.47h12.29V20.18Z" />
                            <path d="M229.68,20.18h-6L208.13,58.83h5.27l13.27-33.72,13.38,33.72h5.16Z" />
                            <path
                                d="M267.86,43.07C273.14,42.6,278,38.78,278,31.83c0-7.13-5.1-11.65-12.17-11.65H250.25V58.83h4.81V43.47h7.76l9.8,15.36h5.67Zm-12.8-3.83V24.47H265.2c4.58,0,7.76,3,7.76,7.36s-3.18,7.41-7.76,7.41Z" />
                            <path
                                d="M289.42,30c0-3.65,3.36-6.14,7.94-6.14a14.59,14.59,0,0,1,11.18,4.63l2.9-3.53c-3.25-3.42-7.83-5.45-13.68-5.45-7.65,0-13.32,4.41-13.32,10.78,0,13.79,22.88,8.23,22.88,18.19,0,3-2.2,6.72-9.09,6.72a15.92,15.92,0,0,1-12.11-5.56l-2.9,3.71c3.19,3.59,8.17,6.14,14.83,6.14,10.43,0,14.25-5.79,14.25-11.36C312.3,33.74,289.42,38.72,289.42,30Z" />
                        </g>
                    </svg>
                    <div class="h-5 w-80 sm:w-96 relative max-w-xl rounded-full overflow-hidden">
                        <div class="w-full h-full bg-gray-200 absolute"></div>
                        <div id="bar" class="transition-all ease-in-out duration-[2000ms] h-full bg-deer relative w-0"></div>
                    </div>
                </div>
            </div>
        @endif
        <x-banner />

        <div class="min-h-screen bg-rifleGreen text-platinum">
            @livewire('admin.navigation')

            <!-- Page Content -->
            <main class="pt-28">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <x-admin.footer />

        @if (Request::routeIs('admin.home'))
            <script rel="preload" src="{{asset('assets/js/custom_admin.js')}}"></script>
        @endif

        @livewireScripts

        @stack('scripts')

    </body>
</html>
