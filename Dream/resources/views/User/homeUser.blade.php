<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Приснилось</title>
  
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
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
        <header>
            <h1 class="hidden">Мы уверены, что понимание смысла своих снов и знание гороскопа помогают лучше понимать себя и других, принимать важные решения и строить качественные отношения. </h1>
            <a href="#" class="logotype-a">
                <img src="{{asset('../resources/img/logo.png')}}" alt="Логотип кошка" class="logotype">                    
            </a>
            <h2 class="heading">Мы считаем, что понимание смысла снов и гороскопа помогает лучше понимать себя и других, принимать важные решения и улучшать отношения.</h2>
            <a href="#">
                <p class="authorization">войти</p>
            </a>
        </header>
        <nav>
            <ul class="basic-navigation">
                <li><a href="#" class="basic-navigation-button">Домашняя страница</a></li>
                <li><a href="#" class="basic-navigation-button">Сонник</a></li>
                <li><a href="#" class="basic-navigation-button">Гороскоп</a></li>
                <li><a href="#" class="basic-navigation-button">Магазин</a></li>
            </ul>
            <hr>
            <h3 class="h3-navigation">Для поиска толкования воспользуйтесь поиском или алфавитным указателем.</h3>
            <section class="sources-navigation">
                <form method="get" name="form-navigation">
                    <input type="search" name="search-form-navigation" placeholder="Ключевое слово из сна">
                    <input type="submit" value="Искать">
                </form> 
                <ul class="letters-navigation">
                    <li><a href="#" class="button">А</a></li>
                    <li><a href="#" class="button">Б</a></li>
                    <li><a href="#" class="button">В</a></li>
                    <li><a href="#" class="button">Г</a></li>
                    <li><a href="#" class="button">Д</a></li>
                    <li><a href="#" class="button">Е</a></li>
                    <li><a href="#" class="button">Ж</a></li>
                    <li><a href="#" class="button">З</a></li>
                    <li><a href="#" class="button">И</a></li>
                    <li><a href="#" class="button">Й</a></li>
                    <li><a href="#" class="button">К</a></li>
                    <li><a href="#" class="button">Л</a></li>
                    <li><a href="#" class="button">М</a></li>
                    <li><a href="#" class="button">Н</a></li>
                    <li><a href="#" class="button">О</a></li>
                    <li><a href="#" class="button">П</a></li>
                    <li><a href="#" class="button">Р</a></li>
                    <li><a href="#" class="button">С</a></li>
                    <li><a href="#" class="button">Т</a></li>
                    <li><a href="#" class="button">У</a></li>
                    <li><a href="#" class="button">Ф</a></li>
                    <li><a href="#" class="button">Х</a></li>
                    <li><a href="#" class="button">Ц</a></li>
                    <li><a href="#" class="button">Ч</a></li>
                    <li><a href="#" class="button">Ш</a></li>
                    <li><a href="#" class="button">Щ</a></li>
                    <li><a href="#" class="button">Э</a></li>
                    <li><a href="#" class="button">Ю</a></li>
                    <li><a href="#" class="button">Я</a></li>
                </ul>                
            </section>
        </nav>
        <!-- Здесь основное содержимое нашей страницы -->
        <main>
            <!-- Она содержит статью -->
            <article>
                <h3 class="h">"ПРИСНИЛОСЬ" - сайт, где вы можете узнать значение своих снов и получить гороскоп по дате рождения. </h3>
                <p class="text">Добро пожаловать на наш сайт! Здесь вы найдете подробные объяснения значений ваших снов и гороскоп на
                    основе даты рождения. Наша база данных содержит тысячи наиболее распространенных символов и предметов,
                    которые могут встречаться в ваших снах. Просто введите ключевые слова или описание сна, и наш алгоритм предоставит вам
                    подробное объяснение, что это может значить. Наши данные основаны на работе таких популярных сонников, как Миллера,
                    Фрейда, Цветкова, Густава Хиндмана Миллера и других. Кроме того, мы предлагаем гороскоп на основе даты рождения для
                    всех знаков зодиака, который поможет вам получить дополнительные предсказания и советы на каждый день.
                    Наш сайт также содержит различные статьи и советы по толкованию снов и гороскопа, чтобы помочь вам лучше понимать их
                    значение и влияние на вашу жизнь. С помощью нашего сайта вы сможете получить новые идеи, озарения и увидеть свою жизнь
                    по-новому.</p>
                <h3 class="h">Используемые сонники</h3>
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                           <div  class="nested-container">
                                <h4><a href="#" class="basic-navigation-button" title="Перейти в сонник">Сонник  Фрейда</a></h4>
                                <p class="text">
                                    Сонник Фрейда - это книга, в которой австрийский психоаналитик Зигмунд Фрейд описывает свои теории о символическом значении снов и их связи с бессознательным. Он предлагает интерпретировать сны, как отражение подсознательных желаний и конфликтов, которые могут быть связаны с детством и сексуальностью. Фрейд утверждал, что понимание смысла снов может помочь людям понять свои эмоции и проблемы в жизни и дать возможность решить их.
                                </p>
                           </div>
                    </div>
                
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <div  class="nested-container">
                            <h4><a href="#" class="basic-navigation-button" title="Перейти в сонник">Сонник Миллера</a></h4>
                            <p class="text">
                                Сонник Миллера - это книга, в которой американский писатель Густав Миллер описывает тысячи символов, которые могут встречаться в снах, и предлагает их интерпретацию. Сонник Миллера является одним из наиболее распространенных и широко используемых сонников в мире.                            </p>
                       </div>
                    </div>
                
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <div  class="nested-container">
                            <h4><a href="#" class="basic-navigation-button" title="Перейти в сонник">Сонник Ванги</a></h4>
                            <p class="text">
                                Сонник Ванги - это книга, в которой болгарская ясновидящая Ванга описывает символы и события, которые могут появиться в снах, и предлагает их интерпретацию.                             </p>
                       </div>
                    </div>
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)"><p>назад  &#10094;</p></a>
                    <a class="next" onclick="plusSlides(1)"><p>&#10095;  следующий</p></a>
                </div>
                <br>
                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </article>
            <script src="{{ asset('js/carusel.js') }}"></script>
            <!-- Дополнительный контент также может быть вложен в основной контент -->
            <aside>
            <h3>Гороскоп</h3>
    
            <ul>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Aquarius.png')}}" alt="Водолей" class="logotype">
                        <p>Водолей: 21 января – 19 февраля</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Pisces.png')}}" alt="Рыбы" class="logotype">
                        <p>Рыбы: 20 февраля – 20 марта</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Aries.png')}}" alt="Овен" class="logotype">
                        <p>Овен: 21 марта – 20 апреля</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Taurus.png')}}" alt="Телец" class="logotype">
                        <p>Телец: 21 апреля – 21 мая</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Gemini.png')}}" alt="Близнецы" class="logotype">
                        <p>Близнецы: 22 мая – 21 июня</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Cancer.png')}}" alt="Логотип кошка" class="logotype">
                        <p>Рак: 22 июня – 22 июля</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Leo.png')}}" alt="Логотип кошка" class="logotype">
                        <p>Лев: 23 июля – 21 августа</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Virgo.png')}}" alt="Логотип кошка" class="logotype">
                        <p>Дева: 22 августа – 23 сентября</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Libra.png')}}" alt="Логотип кошка" class="logotype">
                        <p>Весы: 24 сентября – 23 октября</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Scorpio.png')}}" alt="Логотип кошка" class="logotype">
                        <p>Скорпион: 24 октября – 22 ноября</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Sagittarius.png')}}" alt="Логотип кошка" class="logotype">
                        <p>Стрелец: 23 ноября – 22 декабря</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('../resources/img/zodiac_signs/Capricorn.png')}}" alt="Логотип кошка" class="logotype">
                        <p>Козерог: 23 декабря – 20 января</p>
                    </a>
                </li>
            </ul>
            </aside>
    
        </main>
        
        <!-- И вот наш главный нижний колонтитул, который используется на всех страницах нашего веб-сайта -->
      <footer>
        <p>©Авторские права никому не принадлежат, 2050. Все права защищены.</p>
      </footer>
    
  </body>
</html>