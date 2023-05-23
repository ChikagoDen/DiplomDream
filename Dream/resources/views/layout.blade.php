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
        <x-Index.BasicNavigation :getDate="$listDreamBooks"/>
        {{-- <x-Index.SourcesNavigation/> --}}
    </nav>
    <main>
        <article>
            @yield('contentMainArticle')
        </article>
        <aside>
            @yield('sidbarMainAside')
        </aside>
    </main>
    <footer role="contentinfo">
        <x-Index.Footer/>
    </footer>
  </body>
</html>