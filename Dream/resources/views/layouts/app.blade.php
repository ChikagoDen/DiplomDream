<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-Index.Meta/>
        <title>@yield('title')</title>

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

        <!-- Fonts -->
        <x-Index.Linc/>
        <x-Index.ExceptionsIE9/>

        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <header>
            <x-Index.Header/>
        </header>
        
        
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}
            <nav>
                <x-Index.BasicNavigation :getDate="$listDreamBooks"/>
                @yield('SourcesNavigation')
            </nav>

            <!-- Page Content -->
            <main>
                <article>
                    @yield('contentMainArticle')
                </article>
                <aside>
                    @yield('sidbarMainAside')
                </aside>
                {{-- {{ $slot }} --}}
            </main>
        </div>
        <footer role="contentinfo">
            <x-Index.Footer/>
        </footer>
    </body>
</html>

{{-- 
  <body>
    <header>
        <x-Index.Header/>
    </header>
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
    <footer role="contentinfo">
        <x-Index.Footer/>
    </footer>
  </body>
</html> --}}