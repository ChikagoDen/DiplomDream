<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Приснилось</title>
  
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/print/print.css')}}" media="print">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"  href="{{ asset('favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('../recources/img/icon/faviconpng.png')}}" type="image/x-icon">
    <!-- следующие 3 строки нужны для корректного отображения семантических элементов HTML5 в старых версиях Internet Explorer-->
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
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
  </head>

  <body>
        <header>
            <a href="#">
                <img src="{{asset('../resources/img/logo.png')}}" alt="Логотип организации Приснилось" class="logotype">                    
            </a>
            <h1 class="heading">Мы считаем, что понимание смысла снов и гороскопа помогает лучше понимать себя и других, принимать важные решения и улучшать отношения.</h1>
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
            <h2 class="h2-navigation">Для поиска толкования воспользуйтесь поиском или алфавитным указателем.</h2>
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
        <main>
            <article>
                <h2 class="h">"ПРИСНИЛОСЬ" - сайт, где вы можете узнать значение своих снов и получить гороскоп по дате рождения. </h2>
                <p class="text">Добро пожаловать на наш сайт! Здесь вы найдете подробные объяснения значений ваших снов и гороскоп на
                    основе даты рождения. Наша база данных содержит тысячи наиболее распространенных символов и предметов,
                    которые могут встречаться в ваших снах. Просто введите ключевые слова или описание сна, и наш алгоритм предоставит вам
                    подробное объяснение, что это может значить. Наши данные основаны на работе таких популярных сонников, как Миллера,
                    Фрейда, Цветкова, Густава Хиндмана Миллера и других. Кроме того, мы предлагаем гороскоп на основе даты рождения для
                    всех знаков зодиака, который поможет вам получить дополнительные предсказания и советы на каждый день.
                    Наш сайт также содержит различные статьи и советы по толкованию снов и гороскопа, чтобы помочь вам лучше понимать их
                    значение и влияние на вашу жизнь. С помощью нашего сайта вы сможете получить новые идеи, озарения и увидеть свою жизнь
                    по-новому.</p>
                <h2 class="h">Используемые сонники</h2>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                           <div  class="nested-container">
                                <h3><a href="#" class="basic-navigation-button" title="Перейти в сонник">Сонник  Фрейда</a></h3>
                                <p class="text">
                                    Сонник Фрейда - это книга, в которой австрийский психоаналитик Зигмунд Фрейд описывает свои теории о символическом значении снов и их связи с бессознательным. Он предлагает интерпретировать сны, как отражение подсознательных желаний и конфликтов, которые могут быть связаны с детством и сексуальностью. Фрейд утверждал, что понимание смысла снов может помочь людям понять свои эмоции и проблемы в жизни и дать возможность решить их.
                                </p>
                           </div>
                    </div>
                
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <div  class="nested-container">
                            <h3><a href="#" class="basic-navigation-button" title="Перейти в сонник">Сонник Миллера</a></h3>
                            <p class="text">
                                Сонник Миллера - это книга, в которой американский писатель Густав Миллер описывает тысячи символов, которые могут встречаться в снах, и предлагает их интерпретацию. Сонник Миллера является одним из наиболее распространенных и широко используемых сонников в мире.                            
                            </p>
                       </div>
                    </div>
                
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <div  class="nested-container">
                            <h3><a href="#" class="basic-navigation-button" title="Перейти в сонник">Сонник Ванги</a></h3>
                            <p class="text">
                                Сонник Ванги - это книга, в которой болгарская ясновидящая Ванга описывает символы и события, которые могут появиться в снах, и предлагает их интерпретацию.                             
                            </p>
                       </div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)"><p>назад  &#10094;</p></a>
                    <a class="next" onclick="plusSlides(1)"><p>&#10095;  следующий</p></a>
                </div>
                <br>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </article>
            <script src="{{ asset('js/carusel.js') }}"></script>
            <aside>
                <h3>Гороскоп</h3>
                <ul class="horoscope">
                    <li>
                        <a href="#" >
                            <img src="{{asset('../resources/img/zodiac_signs/Aquarius.png')}}" alt="Водолей" class="zodiac-signs">
                        </a>
                        <p>Водолей:<br> 21 января –<br> 19 февраля</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Pisces.png')}}" alt="Рыбы" class="zodiac-signs">
                        </a>
                        <p>Рыбы:<br> 20 февраля –<br> 20 марта</p>                    
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Aries.png')}}" alt="Овен" class="zodiac-signs">
                        </a>
                        <p>Овен:<br> 21 марта –<br> 20 апреля</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Taurus.png')}}" alt="Телец" class="zodiac-signs">
                        </a>
                        <p>Телец:<br> 21 апреля –<br> 21 мая</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Gemini.png')}}" alt="Близнецы"  class="zodiac-signs">
                        </a> 
                        <p>Близнецы:<br> 22 мая –<br> 21 июня</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Cancer.png')}}" alt="Рак"  class="zodiac-signs">
                        </a>
                        <p>Рак:<br> 22 июня –<br> 22 июля</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Leo.png')}}" alt="Лев"  class="zodiac-signs">
                        </a>
                        <p>Лев:<br> 23 июля –<br> 21 августа</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Virgo.png')}}" alt="Дева"  class="zodiac-signs">
                        </a>
                        <p>Дева:<br> 22 августа –<br> 23 сентября</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Libra.png')}}" alt="Весы"  class="zodiac-signs">
                        </a>
                        <p>Весы:<br> 24 сентября –<br> 23 октября</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Scorpio.png')}}" alt="Скорпион"  class="zodiac-signs">
                        </a>
                        <p>Скорпион:<br> 24 октября –<br> 22 ноября</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Sagittarius.png')}}" alt="Стрелец"  class="zodiac-signs">
                        </a>
                        <p>Стрелец:<br> 23 ноября –<br> 22 декабря</p>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('../resources/img/zodiac_signs/Capricorn.png')}}" alt="Козерог"  class="zodiac-signs">
                        </a>
                        <p>Козерог:<br> 23 декабря –<br> 20 января</p>
                    </li>
                </ul>
            </aside>
        </main>
      <footer role="contentinfo">
        <div class="row">
            <a href="#"><i class="fa fa-facebook "></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="row general-information">
            <ul>
                <li><a href="#" class="basic-navigation-button">Свяжитесь с нами</a></li>
                <li><a href="#" class="basic-navigation-button">Политика конфиденциальности</a></li>
                <li><a href="#" class="basic-navigation-button">Правила и условия</a></li>
            </ul>
        </div>
        <p>
             Авторское право. &copy; Все права защищены: <a href="/">ООО "Аркаим" </a><?php echo date('Y'); ?>г. || Автор: ЧикагоДен. 
        </p>
      </footer>
  </body>
</html>