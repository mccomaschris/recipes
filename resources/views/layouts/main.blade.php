<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">

        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CMMCooks') }}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="font-sans antialiased bg-stone-100">
        <header class="py-6 border-b border-stone-200 bg-white px-6 lg:px-0">
            <div class=" w-full lg:max-w-5xl mx-auto flex flex-wrap items-center lg:justify-between">
                <div class="w-full lg:w-2/3">
                    <a href="{{ route('site.index') }}" class="flex items-center justify-center lg:justify-start">
                        <svg class="h-6 w-6 lg:h-10 lg:w-10 fill-green-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 32a95.17 95.17 0 0 0-57.73 19.74C334.93 20.5 298 0 256 0s-78.93 20.5-102.27 51.74A95.56 95.56 0 0 0 0 128c0 41.74 64 224 64 224v128a32 32 0 0 0 32 32h320a32 32 0 0 0 32-32V352s64-182.26 64-224a96 96 0 0 0-96-96zM112 464v-80h288v80zm290.74-128h-29.55L384 201.25a8 8 0 0 0-7.33-8.61l-16-1.28h-.65a8 8 0 0 0-8 7.37l-11 137.3h-69.68V200a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v136h-68.42l-11-137.3a8 8 0 0 0-8-7.37h-.65l-16 1.28a8 8 0 0 0-7.33 8.61L138.81 336h-29.55C80 252.78 48.46 149.34 48 128a47.57 47.57 0 0 1 76.72-38l38.52 29.22 28.94-38.73C207.6 59.84 230.86 48 256 48s48.4 11.84 63.82 32.47l28.94 38.73L387.28 90A47.57 47.57 0 0 1 464 127.92c-.46 21.42-32 124.86-61.26 208.08z"></path></svg>
                        <span class="ml-2 lg:ml-4 uppercase font-bold text-green-700 text-3xl lg:text-4xl">CMM Cooks</span>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 mt-6 lg:mt-0">
                    <form method="GET" action="/search-recipes">
                        <label for="search" class="hidden">Search Recipes</label>
                        <input value="{{ isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' }}" type="search" name="search" id="search" class="border-stone-200 shadow-sm focus:ring-green-700 focus:outline-none focus:border-green-700 block w-full sm:text-sm rounded-md" placeholder="Search recipes...">
                    </form>
                </div>
            </div>
        </header>

        <div class="py-4 border-b border-stone-200 shadow-sm bg-white">
            <div class=" w-full lg:max-w-5xl mx-auto flex items-center px-6 lg:px-0">
                <a href="{{ route('site.index') }}" class="font-semibold text-stone-700 underline hover:text-stone-900 hover:no-underline">Home</a>
                @yield('nav')
            </div>
        </div>

        <div class=" w-full lg:max-w-5xl mx-auto py-10 px-6 lg:px-0">
            <main class="prose max-w-none prose-stone">
                @yield('content')
            </main>
        </div>

        <footer class=" w-full lg:max-w-5xl mx-auto py-12 text-center text-sm text-stone-700 px-6 lg:px-0">
            &copy; <?php echo date("Y"); ?> <a href="mailto:mccomas.chris@gmail.com" class="underline hover:no-underline">Christopher McComas</a>.
        </footer>
    </body>
</html>
