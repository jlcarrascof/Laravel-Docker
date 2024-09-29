<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/shop">Shop</a>
        </nav>
    </body>

    <h1>@yield('title')</h1>

    <hr>

    @yield('content')

</html>
