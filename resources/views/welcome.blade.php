<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Radiocúbito</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-red-600">
        <div class="flex items-center justify-center leading-6 min-h-screen text-gray-900">
            <div class="text-2xl leading-normal mx-auto max-w-xl px-8 pt-8 pb-32 text-red-300">
                <p class="leading-normal pb-8">
                    <strong class="font-bold text-2xl text-red-100">Radiocúbito</strong
                >
                    is an indie software shop owned and operated by
                    <a
                        href="https://oliverservin.com"
                        class="font-bold text-2xl text-gray-100 border-b-4 border-red-400 hover:text-red-300 transition ease-in-out duration-150"
                        >Oliver Servín</a
                    >.
                </p>
            </div>
        </div>
    </body>
</html>
