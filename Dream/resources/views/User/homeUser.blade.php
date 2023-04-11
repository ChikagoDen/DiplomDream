<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Приснилось</title>
  
    <link rel="stylesheet" href="{{ asset('css/base/homeUser.css')}}">
    <link rel="stylesheet" href="{{ asset('css/print/print.css')}}" media="print">
    <!--[if IE 9]>
      <style>
        @media print { 
                header:after { content:""; display: block;height: 1px; width: 1px; position: absolute; top: 100px; right: 100px;outline: 100px solid invert; } 
        }
      </style>
   <![endif]-->
    <meta name="description" content="Наш сайт предоставляет толкование снов по различным сонникам и описание знаков зодиака. Мы также предлагаем ежедневные гороскопы для всех знаков зодиака. Мы уверены, что понимание смысла своих снов и знание гороскопа помогают лучше понимать себя и других, принимать важные решения и строить качественные отношения.">
    <meta property="og:title" content="Хотите разгадать тайны своих снов и лучше понимать свой характер? На нашем сайте вы найдете толкование снов по различным сонникам и описание знаков зодиака. Получите новые знания и научитесь принимать верные решения в жизни.">
    <meta property="og:description" content="Наш сайт предоставляет толкование снов по различным сонникам и описание знаков зодиака. Мы также предлагаем ежедневные гороскопы для всех знаков зодиака. Мы уверены, что понимание смысла своих снов и знание гороскопа помогают лучше понимать себя и других, принимать важные решения и строить качественные отношения.">
    <meta property="og:image" content="https://www.mywebsite.com/image.jpg изображения, которое будет использоваться для отображения при шаринге.">
    <meta property="og:image:alt" content="Фотография кошки, отражающая мистическую атмосферу, связанную со сновидениями">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    {{-- <meta property="og:url" content="https://www.mywebsite.com/page"> --}}
    {{-- <link rel="canonical" href="https://www.mywebsite.com/page"> --}}
  
    <link rel="icon" href="/favicon.ico за ссылку на иконку сайта, которая отображается во вкладке браузера">
    {{-- <link rel="icon" href="/favicon.svg" type="image/svg+xml"> --}}
    {{-- <link rel="apple-touch-icon" href="/apple-touch-icon.png казывает на иконку, которая будет использоваться в качестве значка приложения на устройствах Apple (iPhone, iPad, iPod Touch) вместо обычной иконки сайта. Файл иконки должен иметь формат PNG и размеры 180x180 пикселей для устройств с Retina-экранами и 60x60 пикселей для более старых устройств"> --}}
    {{-- <link rel="manifest" href="/my.webmanifest  это тег, который связывает веб-страницу с файлом манифеста, который обычно называется webmanifest. --}}
    {{-- Манифест - это файл JSON, который определяет настройки и параметры для веб-приложения. Например, в манифесте можно указать иконки, цвета, описание и т.д."> --}}
    {{-- <meta name="theme-color" content="#FF00FF который используется для задания цвета темы на мобильных устройствах. Он указывает браузеру, какой цвет должен быть использован для отображения адресной строки и других элементов пользовательского интерфейса браузера. --}}
    {{-- В данном случае, заданный цвет - это ярко-розовый (#FF00FF). Если вы откроете сайт на поддерживаемом браузере на мобильном устройстве, вы можете увидеть, что цвет адресной строки и других элементов пользовательского интерфейса браузера будет соответствовать указанному цвету."> --}}

    <!-- следующие 3 строки нужны для корректного отображения семантических элементов HTML5 в старых версиях Internet Explorer-->
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>
        <!-- Вот наш главный заголовок, который используется на всех страницах нашего веб-сайта -->
        <header>
            <div class="logo">
                <img src="{{ asset('img/logo3.png')}}" alt="Логотип кошка" class="logotype">
            </div>
            <h1>Заголовок</h1>
            <h2>Мы уверены, что понимание смысла своих снов и знание гороскопа помогают лучше понимать себя и других, принимать важные решения и строить качественные отношения.</h2>
            <div class="authorization">
                <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="115.618" x2="21.458" y1="115.577" y2="21.416"><stop offset="0" stop-color="#fd5c70"></stop><stop offset="1" stop-color="#ffce64"></stop></linearGradient><path d="m30.356 16.268a1.75 1.75 0 0 1 .538-2.416 55.284 55.284 0 0 1 84.1 37.3 1.749 1.749 0 1 1 -3.449.588 51.785 51.785 0 0 0 -78.773-34.935 1.749 1.749 0 0 1 -2.416-.537zm-9.3 9.849a1.746 1.746 0 0 0 1.29-.567c1.115-1.216 2.293-2.385 3.5-3.474a1.75 1.75 0 1 0 -2.344-2.6c-1.289 1.163-2.547 2.41-3.737 3.708a1.749 1.749 0 0 0 1.29 2.932zm101.7 72.241a24.38 24.38 0 0 1 -44.085 14.369 55.073 55.073 0 0 1 -13.38 2.853c-.051 0-.1.007-.151.007a1.75 1.75 0 0 1 -.148-3.493 51.638 51.638 0 0 0 11.777-2.416 24.307 24.307 0 0 1 1.048-24.437l-8.117-1.478a9.5 9.5 0 0 1 -9.187 5.878 9.5 9.5 0 0 1 -9.188-5.878l-18.033 3.288a10.451 10.451 0 0 0 -8.581 10.286v.422a51.429 51.429 0 0 0 31.454 14.341 1.75 1.75 0 0 1 -.144 3.494q-.072 0-.147-.006a55.279 55.279 0 0 1 -41.839-84.981 1.75 1.75 0 0 1 2.942 1.9 51.538 51.538 0 0 0 4.555 61.907 13.946 13.946 0 0 1 11.133-10.8l18.121-3.3v-7.367c-4.991-3.878-10.8-11.175-10.8-24.167v-6.445a20.528 20.528 0 0 1 41.055 0v6.445c0 12.992-5.806 20.289-10.8 24.167v7.358l9.935 1.811a24.334 24.334 0 0 1 29.5-5.353 51.64 51.64 0 0 0 2.605-16.246 1.75 1.75 0 0 1 3.5 0 55.071 55.071 0 0 1 -3.062 18.144 24.369 24.369 0 0 1 10.031 19.697zm-69.585-27.987a12.209 12.209 0 0 0 14.691 0c4.417-3.343 9.682-9.8 9.682-21.591v-6.445a17.028 17.028 0 0 0 -34.055 0v6.445c0 11.788 5.265 18.248 9.682 21.591zm13.576 11.209v-6.542a15.736 15.736 0 0 1 -12.461 0v6.54a5.977 5.977 0 0 0 6.231 4.563 5.972 5.972 0 0 0 6.23-4.561zm52.5 16.778a20.892 20.892 0 1 0 -20.889 20.892 20.915 20.915 0 0 0 20.892-20.892zm-10.142-2.121v12a1.749 1.749 0 0 1 -1.75 1.75h-18a1.75 1.75 0 0 1 -1.75-1.75v-12a1.751 1.751 0 0 1 1.75-1.75h2.07v-2.569a6.931 6.931 0 1 1 13.861 0v2.569h2.069a1.75 1.75 0 0 1 1.753 1.75zm-14.18-1.75h6.861v-2.569a3.431 3.431 0 1 0 -6.861 0zm10.68 3.5h-14.5v8.5h14.5z" fill="url(#a)" style="fill: rgb(255, 118, 5);"></path></svg>
            </div>
        </header>
    
        <nav>
            <ul>
            <li><a href="#">Домашняя страница</a></li>
            <li><a href="#">Наша команда</a></li>
            <li><a href="#">Проекты</a></li>
            <li><a href="#">Контакты</a></li>
            </ul>
    
            <!-- Форма поиска — это ещё один распространённый нелинейный способ навигации по веб-сайту. -->
    
            <form>
            <input type="search" name="q" placeholder="Search query">
            <input type="submit" value="Go!">
            </form>
        </nav>
    
        <!-- Здесь основное содержимое нашей страницы -->
        <main>
    
            <!-- Она содержит статью -->
            <article>
            <h2>Заголовок статьи</h2>
    
            <p>Lorem ipsum dolor sit amet, consecterrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrtur adipisicing elit. Donec a diam lectus. Set sit amet ipsum mauris. Maecenas congue ligula as quam viverra nec consectetur ant hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
    
            <h3>Подраздел</h3>
    
            <p>Donec ut librero sed accu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.</p>
    
            <p>Pelientesque auctor nisi id magna consequat sagittis. Curabitur dapibus, enim sit amet elit pharetra tincidunt feugiat nist imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros.</p>
    
            <h3>Ещё один подраздел</h3>
    
            <p>Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum soclis natoque penatibus et manis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
    
            <p>Vivamus fermentum semper porta. Nunc diam velit, adipscing ut tristique vitae sagittis vel odio. Maecenas convallis ullamcorper ultricied. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, is fringille sem nunc vet mi.</p>
            </article>
    
            <!-- Дополнительный контент также может быть вложен в основной контент -->
            <aside>
            <h2>Связанные темы</h2>
    
            <ul>
                <li><a href="#">Мне нравится стоять рядом с берегом моря</a></li>
                <li><a href="#">>Мне нравится стоять рядом с морем</a></li>
                <li><a href="#">Даже на севере Англии</a></li>
                <li><a href="#">Здесь не перестаёт дождь</a></li>
                <li><a href="#">Лаааадно...</a></li>
            </ul>
            </aside>
    
        </main>
        
        <!-- И вот наш главный нижний колонтитул, который используется на всех страницах нашего веб-сайта -->
      <footer>
        <p>©Авторские права никому не принадлежат, 2050. Все права защищены.</p>
      </footer>
    
  </body>
</html>