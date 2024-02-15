<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>{{ $title ?? 'Radiocubito' }}</title>
    </head>
    <body class="antialiased">
        {{ $slot }}
    </body>
</html>
