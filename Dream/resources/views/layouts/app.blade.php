<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-Index.Meta/>
        <title>@yield('title')</title>
        <x-Index.Linc/>
        <x-Index.ExceptionsIE9/>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <header>
            <x-Index.Header/>
        </header>
        <div class="min-h-screen bg-gray-100">
            <nav>
                <x-Index.BasicNavigation :getDate="$listDreamBooks"/>
                @yield('SourcesNavigation')
            </nav>
            <main>
                <article>
                    @yield('contentMainArticle')
                </article>
                <aside>
                    @yield('sidbarMainAside')
                </aside>
            </main>
        </div>
        <footer role="contentinfo">
            <x-Index.Footer/>
        </footer>
    </body>
</html>