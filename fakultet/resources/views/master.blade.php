<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Pocetna')</title>

    </head>
    <body>
        <h1>Fakultet</h1>
        <a href="/">O nama</a>
        <a href="/novosti">Novosti</a>
        <a href="/predmeti">Premeti</a>
        <a href="/kontakt">Kontakt</a>

        @yield('sadrzaj')

    </body>
</html>
