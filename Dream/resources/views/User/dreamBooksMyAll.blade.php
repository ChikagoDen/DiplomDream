<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
<link rel="stylesheet" href="{{ asset('css/dreamBooksMyAll.css')}}">
@extends('layout')

@section('title', "Окунитесь в мир снов: общайтесь и делись впечатлениями")

@section('contentMainArticle')
    <h2 class="h">На этой страничке вы можете посмотреть сны других пользователей и оставить свои комментарии под их постами.</h2>
    {{-- описание сонника --}}
    {{-- <h3 class="h3Letter">Слово:  <strong>{{$temp=array_key_first($getPuttBooks[0]['abc']['words'])}}</strong></h3> --}}
    
    @for ($i = 0; $i < count($getPuttBooks4); $i++)
        <div>
            <h3>Сны пользователя: {{$getPuttBooks4[$i]['name']}}</h3>
            <div class="container-My-Dream">
                <h4 style="text-align: center">{{$getPuttBooks4[$i]['title']}}</h4>
                <p class="text">{{$getPuttBooks4[$i]['son1']}}</p>
            </div>
            <h4 class="title-comments">Комментарии (6)</h4>
            <label for="pseudoBtn{{$i}}" class="tmp-navig-button">Ответить</label>
            <input type="checkbox" id="pseudoBtn{{$i}}" class="coment input">
            <div class="coment">
                <form action="" method="get">
                    @csrf
                    <label>
                        <p>Поделитесь своими впечатлениями, эмоциями и размышлениями.</p>
                        <textarea name="descriptionDream" rows="3" cols="10" value="Описание сна" style="width: 100%"></textarea>
                    </label>
                    <p><input type="submit" value="Добавить"></p>
                </form> 
                <h4 style="margin: 0">Коментарии:</h4>
                <ul class="media-list" style="margin-top: 0;">
                <!-- Комментарий (уровень 1) -->
                    <li class="media">
                        <div class="div1">
                            <a href="#">
                                <img class="img-rounded" src={{asset('../resources/img/user_faise/winkingSmail.svg')}} alt="Улыбающийся смайлик">
                            </a>
                            <h4 class="author">Дима</h4> 
                            <span class="date">16 ноября 2015, 13:43</span>
                        </div>
                        <div>
                            <p class="media-text">Lorem ipsum dolor sit amet. Blanditiis praesentium voluptatum deleniti atque. Autem vel illum, qui blanditiis praesentium voluptatum deleniti atque corrupti. Dolor repellendus cum soluta nobis. Corporis suscipit laboriosam, nisi ut enim. Debitis aut perferendis doloribus asperiores repellat. sint, obcaecati cupiditate non numquam eius. Itaque earum rerum facilis. Similique sunt in ea commodi. Dolor repellendus numquam eius modi. Quam nihil molestiae consequatur, vel illum, qui ratione voluptatem accusantium doloremque.</p>
                            <div class="footer-comment">
                                <span class="vote plus" title="Нравится">
                                    <i class="fa fa-thumbs-up"></i>
                                </span>
                                <span class="rating">
                                    +1
                                </span>
                                <span class="vote minus" title="Не нравится">
                                    <i class="fa fa-thumbs-down"></i>
                                </span>
                                <span style="color:black">
                                    <label for="pseudoBtn{{$i+10}}" class="tmp-navig-button">Ответить</label>
                                    <input type="checkbox" id="pseudoBtn{{$i+10}}" class="coment input">
                                    <div class="coment">
                                        <form action="" method="get">
                                            @csrf
                                            <label>
                                                <textarea name="descriptionDream" rows="3" cols="10" value="Описание сна" style="width: 100%"></textarea>
                                            </label>
                                            <p><input type="submit" value="ответить"></p>
                                        </form>
                                    </div>
                                </span>
                            </div>
                            <!-- Вложенный медиа-компонент (уровень 2) -->
                            <ul class="media-list" style="padding: 0;">
                                <!-- Комментарий (уровень 2) -->
                                <li class="media">
                                    <div class="media2">
                                        <div class="div1">
                                            <a href="#">
                                                <img class="img-rounded" src={{asset('../resources/img/user_faise/thinkingSmail.svg')}} alt="Задумчивыйсмайлик">
                                            </a>
                                            <h4 class="author">Пётр</h4>
                                            <span class="date">19 ноября 2015, 10:28</span>
                                        </div>
                                        <div class="media-body">
                                            <p class="media-text">Dolor sit, amet, consectetur, adipisci velit. Aperiam eaque ipsa, quae. Amet, consectetur, adipisci velit, sed quia consequuntur magni dolores. Ab illo inventore veritatis et quasi architecto. Quisquam est, omnis voluptas nulla. Obcaecati cupiditate non numquam eius modi tempora. Corporis suscipit laboriosam, nisi ut labore et aut reiciendis.</p>
                                            <div class="footer-comment">
                                                <span class="vote plus" title="Нравится">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </span>
                                                <span class="rating">
                                                    +0
                                                </span>
                                                <span class="vote minus" title="Не нравится">
                                                    <i class="fa fa-thumbs-down"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- Конец вложенного комментария (уровень 2) -->
                                <!-- Ещё один вложенный медиа-компонент (уровень 2) -->
                                <li class="media">
                                    <div class="media2">
                                        <div class="div1">
                                            <a href="#">
                                                <img class="img-rounded" src={{asset('../resources/img/user_faise/thinkingSmail.svg')}} alt="Задумчивыйсмайлик">
                                            </a>
                                            <h4 class="author">Сергей</h4> 
                                            <span class="date">20 ноября 2015, 17:45</span>                             
                                        </div>
                                        <div class="media-body">
                                            <p class="media-text">Ex ea voluptate velit esse, quam nihil impedit, quo minus id quod. Totam rem aperiam eaque ipsa, quae ab illo. Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid. Iste natus error sit voluptatem. Sunt, explicabo deleniti atque corrupti, quos dolores et expedita.</p>
                                            <div class="footer-comment">
                                                <span class="vote plus" title="Нравится">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </span>
                                                <span class="rating">
                                                +1
                                                </span>
                                                <span class="vote minus" title="Не нравится">
                                                    <i class="fa fa-thumbs-down"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Конец ещё одного вложенного комментария (уровень 2) -->
                                </li>                            
                            </ul>
                        </div>
                    </li>
                    <!-- Конец комментария (уровень 1) -->

                    <!-- Комментарий (уровень 1) -->
                    <li class="media">
                        <div class="div1">
                            <a href="#">
                                <img class="img-rounded" src={{asset('../resources/img/user_faise/winkingSmail.svg')}} alt="Улыбающийся смайлик">
                            </a>
                            <h4 class="author">Иван</h4>
                            <span class="date">Вчера в 17:34</span>
                        </div>
                        <div>
                            <p class="media-text">Eum iure reprehenderit, qui dolorem eum fugiat. Sint et expedita distinctio velit. Architecto beatae vitae dicta sunt, explicabo unde omnis. Qui aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto. Nemo enim ipsam voluptatem quia. Eos, qui ratione voluptatem sequi nesciunt, neque porro. A sapiente delectus, ut enim ipsam voluptatem, quia non recusandae architecto beatae.</p>
                            <div class="footer-comment">
                                <span class="vote plus" title="Нравится"><i class="fa fa-thumbs-up"></i></span>
                                <span class="rating">+2</span>
                                <span class="vote minus" title="Не нравится"><i class="fa fa-thumbs-down"></i></span>
                                <span style="color:black">
                                    <label for="pseudoBtn{{$i+20}}" class="tmp-navig-button">Ответить</label>
                                    <input type="checkbox" id="pseudoBtn{{$i+20}}" class="coment input">
                                    <div class="coment">
                                        <form action="" method="get">
                                            <label>
                                                <textarea name="descriptionDream" rows="3" cols="10" value="Описание сна" style="width: 100%">
                                                </textarea>
                                            </label>
                                            <p><input type="submit" value="ответить"></p>
                                        </form>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- Конец комментария (уровень 1) -->

                    <!-- Комментарий (уровень 1) -->
                    <li class="media">
                        <div class="div1">
                            <a href="#">
                                <img class="img-rounded" src={{asset('../resources/img/user_faise/winkingSmail.svg')}} alt="Улыбающийся смайлик">
                            </a>
                            <h4 class="author">Дима</h4>
                            <span class="date">3 минуты назад</span>
                        </div>
                        <div>
                            <p class="media-text">Tempore, cum soluta nobis est et quas. Quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in. Obcaecati cupiditate non recusandae impedit. Hic tenetur a sapiente delectus. Facere possimus, omnis dolor repellendus inventore veritatis et voluptates. Ipsa, quae ab illo inventore veritatis et quasi architecto beatae. In culpa, qui in culpa. Cum soluta nobis est laborum et aut perferendis doloribus. Vitae dicta sunt, explicabo perspiciatis. Amet, consectetur, adipisci velit, sed quia voluptas sit, aspernatur. Obcaecati cupiditate non provident, similique sunt in. Reiciendis voluptatibus maiores alias consequatur aut officiis debitis aut perferendis doloribus asperiores. Assumenda est, omnis dolor repellendus voluptas assumenda est omnis.</p>
                            <div class="footer-comment">
                                <span class="vote plus" title="Нравится">
                                    <i class="fa fa-thumbs-up"></i>
                                </span>
                                <span class="rating">+0</span>
                                <span class="vote minus" title="Не нравится">
                                    <i class="fa fa-thumbs-down"></i>
                                </span>
                                <span style="color:black">
                                    <label for="pseudoBtn{{$i+30}}" class="tmp-navig-button">Ответить</label>
                                    <input type="checkbox" id="pseudoBtn{{$i+30}}" class="coment input">
                                    <div class="coment">
                                        <form action="" method="get">
                                            <label>
                                                <textarea name="descriptionDream" rows="3" cols="10" value="Описание сна" style="width: 100%">
                                                </textarea>
                                            </label>
                                            <p><input type="submit" value="ответить"></p>
                                        </form>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- Конец комментария (уровень 1) -->
                </ul>
            </div>
        <div>
    @endfor
@endsection
@section('sidbarMainAside')
<h3>Посмотреть сны пользователя:</h3>
@for ($i = 0; $i < count($getPuttBooks4); $i++)
    <a href="#"> {{$getPuttBooks4[$i]['name']}}</a>
    <br>
@endfor
@endsection