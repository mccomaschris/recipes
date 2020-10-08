<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-touch-fullscreen" content="yes" />
        <meta name="apple-mobile-web-app-title" content="CMM Cooks" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="default" />

        <link href="/assets/iphonex_splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
        <link href="/assets/iphonexr_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <link href="/assets/iphonexsmax_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
        <link href="/assets/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <link href="/assets/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <link href="/assets/ipadpro3_splash.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <link href="/assets/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">

        <link rel="manifest" href="/manifest.webmanifest">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Recipes') }}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        @livewireStyles

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="min-h-screen bg-gray-100 lg:py-12">
            <main class="bg-white mx-auto px-6 lg:px-10 py-6 w-full lg:w-3/5 rounded shadow">
                <div class="flex flex-col lg:flex-row items-center justify-center mb-8">
                    <svg class="text-green-500 fill-current h-6 w-6 lg:h-10 lg:w-10 mb-2 lg:mb-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#48bb78" d="M416 32a95.17 95.17 0 0 0-57.73 19.74C334.93 20.5 298 0 256 0s-78.93 20.5-102.27 51.74A95.56 95.56 0 0 0 0 128c0 41.74 64 224 64 224v128a32 32 0 0 0 32 32h320a32 32 0 0 0 32-32V352s64-182.26 64-224a96 96 0 0 0-96-96zM112 464v-80h288v80zm290.74-128h-29.55L384 201.25a8 8 0 0 0-7.33-8.61l-16-1.28h-.65a8 8 0 0 0-8 7.37l-11 137.3h-69.68V200a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v136h-68.42l-11-137.3a8 8 0 0 0-8-7.37h-.65l-16 1.28a8 8 0 0 0-7.33 8.61L138.81 336h-29.55C80 252.78 48.46 149.34 48 128a47.57 47.57 0 0 1 76.72-38l38.52 29.22 28.94-38.73C207.6 59.84 230.86 48 256 48s48.4 11.84 63.82 32.47l28.94 38.73L387.28 90A47.57 47.57 0 0 1 464 127.92c-.46 21.42-32 124.86-61.26 208.08z"></path></svg>
                    <div class="text-2xl lg:text-4xl uppercase ml-4 font-bold"><a href="/" class="text-green-500">CMM Cooks</a></div>
                </div>

                <div class="my-4">
                    @yield('content')
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
