<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
<link rel="stylesheet" href="{{ asset('css/dreamBooksMyAll.css')}}">
@extends('layouts.app')

@section('title', "Окунитесь в мир снов: общайтесь и делись впечатлениями")

@section('contentMainArticle')
    <h2 class="h">На этой страничке вы можете посмотреть сны других пользователей и оставить свои комментарии под их постами.</h2>
    @for ($i = 0; $i < count($AllDream); $i++)
        @php
            $tempUser[]=$AllDream[$i]->name;
        @endphp
        <div>
            <p>Сон пользователя: <strong>{{$AllDream[$i]->name}}</strong> <span class="date">{{$AllDream[$i]->dream_user_date}}</span></p>
            <div class="container-My-Dream">
                <h4 style="text-align: center; margin-bottom: 5px;">{{$AllDream[$i]->dream_user_title}}</h4>
                <p class="text" style="margin-bottom: 10px;">{{$AllDream[$i]->dream_user_discription}}</p>
                <p class="title-comments"><b>Комментарии:</b> {{$AllDream[$i]->dream_user_coment_col}}</p>
                <label for="pseudoBtn{{$i}}" class="tmp-navig-button">Посмотреть или прокоментировать</label>
                <input type="checkbox" id="pseudoBtn{{$i}}" class="coment input">
                <div class="coment">
                    @if (Auth::check())
                        <form action="{{route('dreamBooksUserAllComent')}}" method="post" id="formListComent">
                            @csrf
                            <label>
                                <p>Поделитесь своими впечатлениями, эмоциями и размышлениями.</p>
                                <textarea name="descriptionDreamComent" rows="3" cols="10" value="Описание сна" style="width: 100%" ></textarea>
                            </label>
                            <input type="text" name="userName" value="{{auth()->user()->id}}" hidden>
                            <input type="text" name="dreamName" value="{{$AllDream[$i]->id_dream_user_table}}" hidden>
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
                            @if ($AllDream[$i]->id_dream_user_table==$dataALLComent[$j]->Nsna)
                                @if ($dataALLComent[$j]->levelComent==1)
                                    @php
                                        $UserComent=$dataALLComent[$j]->Ncoment;
                                    @endphp
                                    <li class="media">
                                        <div class="div1" style="align-items: baseline;">
                                            <img class="img-rounded" src={{asset('../resources/img/user_faise/winkingSmail.svg')}} alt="Улыбающийся смайлик">
                                            <a href="#"><h4 class="author" style="margin-bottom: 5px">{{$dataALLComent[$j]->name}}</h4></a> 
                                            <span class="date">{{$dataALLComent[$j]->dataComenta}}</span>                                                               
                                        </div>
                                        <p class="media-text">{{$dataALLComent[$j]->textComent}}</p>
                                        <div class="footer-comment">
                                            <span class="vote plus" title="Нравится">
                                                <a href="{{route('dreamBooksUserAll')}}?idComent={{$dataALLComent[$j]->Ncoment}}"  style="font-size: 12px"><i class="fa fa-thumbs-up"></i></a>
                                            </span>
                                            <span class="rating">
                                                {{$dataALLComent[$j]->comment_like}}
                                            </span>
                                            <span class="vote minus" title="Не нравится">
                                                <a href="{{route('dreamBooksUserAll')}}?comentId={{$dataALLComent[$j]->Ncoment}}"  style="font-size: 12px"><i class="fa fa-thumbs-down"></i></a>
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
                                                            <input type="text" name="userName" value="{{auth()->user()->id}}" hidden>
                                                            <input type="text" name="dreamName" value="{{$AllDream[$i]->id_dream_user_table}}" hidden>
                                                            <input type="text" name="commentLevel" value='2' hidden>
                                                            <input type="text" name="commentId" value={{$dataALLComent[$j]->Ncoment}} hidden>
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
                                            @if ($dataALLComent[$k]->levelComent==2&&$dataALLComent[$k]->NKomuOtvet==$UserComent)
                                                <li class="media">
                                                    <div class="media2">
                                                        <div class="div1" style="align-items: baseline;">
                                                            <img class="img-rounded" src={{asset('../resources/img/user_faise/thinkingSmail.svg')}} alt="Задумчивыйсмайлик">
                                                                <a href="#"><h4 class="author" style="margin-bottom: 5px">{{$dataALLComent[$k]->name}}</h4> </a>
                                                            <span class="date">{{$dataALLComent[$k]->dataComenta}}</span>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-text">{{$dataALLComent[$k]->textComent}}</p>
                                                            <div class="footer-comment">
                                                                <span class="vote plus" title="Нравится">
                                                                    <a href="{{route('dreamBooksUserAll')}}?idComent={{$dataALLComent[$k]->Ncoment}}"  style="font-size: 12px"><i class="fa fa-thumbs-up"></i></a>
                                                                </span>
                                                                <span class="rating">
                                                                    {{$dataALLComent[$k]->comment_like}}
                                                                </span>
                                                                <span class="vote minus" title="Не нравится">
                                                                    <a href="{{route('dreamBooksUserAll')}}?comentId={{$dataALLComent[$k]->Ncoment}}"  style="font-size: 12px"><i class="fa fa-thumbs-down"></i></a>
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
    <h3>Посмотреть сны пользователя:</h3>
    @php
        $Users=array_unique($tempUser);
    @endphp
    @for ($i = 0; $i < count( $Users); $i++)
        <a href="#"> {{$Users[$i]}}</a>
        <br>
    @endfor
@endsection