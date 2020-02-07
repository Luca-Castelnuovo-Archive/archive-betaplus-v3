<!DOCTYPE html>
<html lang="{{config('app.locale') }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <main>
            @yield('content')
        </main>
    </body>
</html>
