<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <x-Index.Linc/>
        <x-Index.Meta/>
        <x-Index.ExceptionsIE9/>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <header>
            <x-Index.Header/>
        </header>
        <div  style="background-color: aqua">
            {{ $slot }}
        </div>
        <footer role="contentinfo">
            <x-Index.Footer/>
        </footer>
    </body>
</html>