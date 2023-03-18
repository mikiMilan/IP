<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Pocetna')</title>
        @include('inc.links')

    </head>
    <body>
        @include('inc.meni')
        @yield('sadrzaj')
        @include('inc.scripts')
    </body>
</html>
