<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>@yield('title')</title>
    <x-Index.Linc/>
    <x-Index.Meta/>
    <x-Index.ExceptionsIE9/>
  </head>
  <body>
    <header>
        <x-Index.Header/>
    </header>
    <nav>
        <x-Index.BasicNavigation/>
        @yield('SourcesNavigation')
    </nav>
    <main>
        <article>
            <h2 class="h">@yield('h')</h2>
            <p class="text">@yield('text')</p>
            @yield('content')
        </article>
        <aside>
            @yield('sidbar')
        </aside>
    </main>
    <footer role="contentinfo">
        <x-Index.Footer/>
    </footer>
  </body>
</html>