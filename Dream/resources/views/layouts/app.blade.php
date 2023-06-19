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
        @if (Auth::check()&&Auth::user()->status>=1)
            <div style="text-align: center;margin: 0 10px;color:red">
                <h2>{{ Auth::user()->name }}</h2>
                <h3>сожалеем, но Вы заблокированы. </h3>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <p style="background: rgb(255, 234, 122);
                        border: 1px solid;
                        border-radius: 3px;
                        padding: 3px 7px;">Выход</p>
                    </a>
                </form>
            </div>
        @else
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
        @endif 
    </body>
</html>