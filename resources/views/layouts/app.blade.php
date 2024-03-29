<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-touch-fullscreen" content="yes" />
        <meta name="apple-mobile-web-app-title" content="CMM Cooks" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="default" />

        <meta name="apple-mobile-web-app-status-bar-style" content="black">

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

        <title>{{ config('app.name', 'CMMCooks') }}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <style>

            </style>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/taggle/1.15.0/taggle.min.js" integrity="sha512-ec0hRvl1JcgfEPnylsv87/d7Vig+RVTsatwTxDK8GTiRQVgX9tB1SqdpNQ/lkW6cJF0rCwCEliZK8/wgnFGYzA==" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 lg:py-12">
            <div class="relative lg:static lg:bg-white mx-auto w-full lg:w-3/5 rounded shadow">
                <header class="bg-black lg:bg-white fixed lg:static top-0 left-0 right-0 z-50 flex items-center px-4 lg:px-0">
                    <div class="block lg:hidden">
                        <div x-data="{}" x-on:click="window.history.back();" class="bg-gray-700 text-white flex rounded py-1 px-1">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                        </div>
                    </div>

                    <div class="flex-1 flex items-center justify-center py-2 lg:py-6">
                        <svg class="text-white lg:text-green-500 fill-current h-4 w-4 lg:h-10 lg:w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 32a95.17 95.17 0 0 0-57.73 19.74C334.93 20.5 298 0 256 0s-78.93 20.5-102.27 51.74A95.56 95.56 0 0 0 0 128c0 41.74 64 224 64 224v128a32 32 0 0 0 32 32h320a32 32 0 0 0 32-32V352s64-182.26 64-224a96 96 0 0 0-96-96zM112 464v-80h288v80zm290.74-128h-29.55L384 201.25a8 8 0 0 0-7.33-8.61l-16-1.28h-.65a8 8 0 0 0-8 7.37l-11 137.3h-69.68V200a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v136h-68.42l-11-137.3a8 8 0 0 0-8-7.37h-.65l-16 1.28a8 8 0 0 0-7.33 8.61L138.81 336h-29.55C80 252.78 48.46 149.34 48 128a47.57 47.57 0 0 1 76.72-38l38.52 29.22 28.94-38.73C207.6 59.84 230.86 48 256 48s48.4 11.84 63.82 32.47l28.94 38.73L387.28 90A47.57 47.57 0 0 1 464 127.92c-.46 21.42-32 124.86-61.26 208.08z"></path></svg>
                        <div class="text-xl  lg:text-4xl uppercase ml-2 lg:ml-4 font-bold"><a href="{{ route('site.index') }}" class="text-white lg:text-green-500">CMM Cooks</a></div>
                    </div>

                    <div class="block lg:hidden">
                        <div x-data="{}" x-on:click="location.reload();" class="bg-gray-700 text-white flex rounded py-1 px-1">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M500.33 0h-47.41a12 12 0 0 0-12 12.57l4 82.76A247.42 247.42 0 0 0 256 8C119.34 8 7.9 119.53 8 256.19 8.1 393.07 119.1 504 256 504a247.1 247.1 0 0 0 166.18-63.91 12 12 0 0 0 .48-17.43l-34-34a12 12 0 0 0-16.38-.55A176 176 0 1 1 402.1 157.8l-101.53-4.87a12 12 0 0 0-12.57 12v47.41a12 12 0 0 0 12 12h200.33a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12z"></path></svg>
                        </div>
                    </div>
                </header>

                <main class="px-6 lg:px-10 bg-white pb-8 pt-12 lg:pt-4">
                    <div class="my-4">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

        @livewireScripts

        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
    </body>
</html>
