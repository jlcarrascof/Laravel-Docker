<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStagram - @yield('title')</title>
        @vite('resources/css/app.css')

    </head>
    <body>
        <h1 class="text-6xl font-extrabold">@yield('title')</h1>

        <hr>

        @yield('content')
    </body>
</html>
