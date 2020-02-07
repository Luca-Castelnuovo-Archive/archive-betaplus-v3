<!DOCTYPE html>
<html lang="{{config('app.locale') }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.navbar')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @include('includes.footer')
        </footer>
    </body>
</html>
