<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
<link rel="stylesheet" href="{{ asset('css/dreamBooksMyAll.css')}}">
@extends('layouts.app')

@section('title', "Окунитесь в мир снов: общайтесь и делись впечатлениями")

@section('contentMainArticle')
    <h2 class="h">На этой страничке вы можете посмотреть сны других пользователей и оставить свои комментарии под их постами.</h2>
        @php
            $tempUser = array();
        @endphp
    @for ($i = 0; $i < count($AllDream); $i++)
        @php
            $tempUser[$AllDream[$i]->user->id]=$AllDream[$i]->user->name;
        @endphp
        <div> 
            <p style="word-wrap: break-word">Сон пользователя: <strong>{{$AllDream[$i]->user->name}}</strong> <span class="date">{{$AllDream[$i]->dream_user_date}}</span></p>
            <div class="container-My-Dream">
                <h4 style="text-align: center; margin-bottom: 5px;">{{$AllDream[$i]->dream_user_title}}</h4>
                <p class="text" style="margin-bottom: 10px;">{{$AllDream[$i]->dream_user_discription}}</p>
                <p class="title-comments"><b>Комментарии:</b> {{$AllDream[$i]->dream_user_coment_col}}</p>
                <label for="pseudoBtn{{$i}}" class="tmp-navig-button">Посмотреть или прокоментировать</label>
                <input type="checkbox" id="pseudoBtn{{$i}}" class="coment input">
                <div class="coment" style="overflow-y: scroll;
                max-height: 516px;width: 98%;">
                    @if (Auth::check())
                        <form action="{{route('dreamBooksUserAllComent')}}" method="post" id="formListComent">
                            @csrf
                            <label>
                                <p>Поделитесь своими впечатлениями, эмоциями и размышлениями.</p>
                                <textarea name="descriptionDreamComent" rows="3" cols="10" value="Описание сна" style="width: 100%" ></textarea>
                            </label>
                            <input type="hidden" name="puth" value="1">
                            <input type="hidden" name="userName" value="{{auth()->user()->id}}">
                            <input type="hidden" name="dreamName" value="{{$AllDream[$i]->id_dream_user_table}}">
                            <br>
                            <input type="submit" value="Добавить">
                        </form>                     
                    @else
                        <p>Зарегестрируйтесь и авторизуйтесь, чтобы оставить комментарий.</p> 
                    @endif

                    <h4 style="margin: 0">Коментарии:</h4>
                    <ul class="media-list" style="margin-top: 0;">
                            {{-- комент 1 уровень --}}                    
                        @for ($j = 0; $j < count($dataALLComent); $j++)
                            @if ($AllDream[$i]->id_dream_user_table==$dataALLComent[$j]->comment_id_dream)
                                @if ($dataALLComent[$j]->comment_nesting_level==1)
                                    @php
                                        $UserComent=$dataALLComent[$j]->idcomment_table;
                                    @endphp
                                    <li class="media">
                                        <div class="div1" style="align-items: baseline;">
                                            <img class="img-rounded" src={{asset('../resources/img/user_faise/winkingSmail.svg')}} alt="Улыбающийся смайлик">
                                            <a href="#"><h4 class="author" style="margin-bottom: 5px">{{$dataALLComent[$j]->userCommit->name}}</h4></a> 
                                            <span class="date">{{$dataALLComent[$j]->comment_date}}</span>                                                               
                                        </div>
                                        <p class="media-text">{{$dataALLComent[$j]->comment_discription}}</p>
                                        <div class="footer-comment">
                                            <span class="vote plus" title="Нравится">
                                                <a href="{{route('dreamBooksUserAll')}}?idComent={{$dataALLComent[$j]->idcomment_table}}"  style="font-size: 12px"><i class="fa fa-thumbs-up"></i></a>
                                            </span>
                                            <span class="rating">
                                                {{$dataALLComent[$j]->comment_like}}
                                            </span>
                                            <span class="vote minus" title="Не нравится">
                                                <a href="{{route('dreamBooksUserAll')}}?comentId={{$dataALLComent[$j]->idcomment_table}}"  style="font-size: 12px"><i class="fa fa-thumbs-down"></i></a>
                                            </span>
                                            @if (Auth::check())
                                                <span style="color:black">
                                                    <label for="pseudoBtn{{$j+111111}}" class="tmp-navig-button">Ответить</label>
                                                    <input type="checkbox" id="pseudoBtn{{$j+111111}}" class="coment input">
                                                    <div class="coment">
                                                        <form action="{{route('dreamBooksUserAllComent')}}" method="post" id="formListComent2">
                                                            @csrf
                                                            <label>
                                                                <p>Поделитесь своими впечатлениями, эмоциями и размышлениями.</p>
                                                                <textarea name="descriptionDreamComent" rows="3" cols="10" value="Описание сна" style="width: 100%" ></textarea>
                                                            </label>
                                                            <input type="hidden" name="puth" value="1">
                                                            <input type="hidden" name="userName" value="{{auth()->user()->id}}">
                                                            <input type="hidden" name="dreamName" value="{{$AllDream[$i]->id_dream_user_table}}">
                                                            <input type="hidden" name="commentLevel" value='2'>
                                                            <input type="hidden" name="commentId" value={{$dataALLComent[$j]->idcomment_table}}>
                                                            <br>
                                                            <input type="submit" value="ответить">
                                                        </form>
                                                    </div>
                                                </span>
                                            @endif
                                        </div>
                                    </li>
                                    <!-- Комментарий (уровень 2) -->
                                    <ul class="media-list" style="padding: 0;">                                
                                        @for ($k = count($dataALLComent)-1; $k >= 0; $k--)
                                            @if ($dataALLComent[$k]->comment_nesting_level==2&&$dataALLComent[$k]->comment_id_user_answer==$UserComent)
                                                <li class="media">
                                                    <div class="media2">
                                                        <div class="div1" style="align-items: baseline;">
                                                            <img class="img-rounded" src={{asset('../resources/img/user_faise/thinkingSmail.svg')}} alt="Задумчивыйсмайлик">
                                                                <a href="#"><h4 class="author" style="margin-bottom: 5px">{{$dataALLComent[$k]->userCommit->name}}</h4> </a>
                                                            <span class="date">{{$dataALLComent[$k]->comment_date}}</span>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-text">{{$dataALLComent[$k]->comment_discription}}</p>
                                                            <div class="footer-comment">
                                                                <span class="vote plus" title="Нравится">
                                                                    <a href="{{route('dreamBooksUserAll')}}?idComent={{$dataALLComent[$k]->idcomment_table}}"  style="font-size: 12px"><i class="fa fa-thumbs-up"></i></a>
                                                                </span>
                                                                <span class="rating">
                                                                    {{$dataALLComent[$k]->comment_like}}
                                                                </span>
                                                                <span class="vote minus" title="Не нравится">
                                                                    <a href="{{route('dreamBooksUserAll')}}?comentId={{$dataALLComent[$k]->idcomment_table}}"  style="font-size: 12px"><i class="fa fa-thumbs-down"></i></a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li><br> 
                                            @endif 
                                        @endfor
                                    </ul> 
                                    <br>
                                @endif 
                            @endif
                        @endfor                        
                    </ul>
                </div>
            </div>
        <div>
    @endfor
@endsection
@section('sidbarMainAside')
    <h3 style="margin-left:5px ">Сны пользователя:</h3>

    @forelse ( $tempUser as $key=>$item)
        <form action="{{route('dreamBooksUserAllPublished')}}" method="post">
            @csrf
            <input type="hidden" value={{$key}}  name="nameUser">
            <input type="submit" value="{{$item}}" style="outline: none;
            
            margin: 0 7%;
            text-align: center;
            text-decoration: none;
            background: rgb(254, 198, 6);
            display: block;
            font-size: 16px;
            border: 1px solid;
            border-radius: 3px;
            padding: 3px 7px;">
        </form> 
    @empty
        <p>Нет опубликованых снов.</p>
    @endforelse
@endsection