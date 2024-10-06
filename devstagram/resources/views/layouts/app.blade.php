<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>

    <body>

        <nav>
            <a href="/">Homepage</a>
            <a href="/about">About Us</a>
            <a href="/shop">Shop</a>
            <a href="/contact">Contact</a>
        </nav>

        <h1>@yield('title')</h1>

        <hr>

        @yield('content')
    </body>

</html>
