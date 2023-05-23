<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layouts.app')
@section('SourcesNavigation')
    <x-Index.SourcesNavigation/>
@endsection
@section('title', 'Исследуйте мир снов: обширный каталог сонников на все случаи жизни')
@section('contentMainArticle')
    <h2 class="h">Все сонники, общее число слов - {{ $DreamBooks[0]->biblioteca_tabl_word_col}}</h2>
    {{-- описание сонника --}}
    <p class="text" >    
        Здесь представлены все слова и возможные их толкования, которые могут встретиться в испульзуемых сонниках. ВНИМАНИЕ!!! Возможна долгая загрузка!
    </p>
    {{-- @dump($wordsStock) --}}
    @if (!@empty($wordsStock))
    @foreach ($wordsStock as $key=>$item)
        <h3 class="h3Letter">{{$key}}</h3>
        <div class="descriptionWordContainer">
            @for ($i = 0; $i < count($item); $i++)
                <div class="containerWord">
                    <div  id="{{$item[$i]->idDreamBook}}" >
                        <a onclick="document.getElementById('{{$item[$i]->idDreamBook.'1'}}').style.display=''
                            document.getElementById('{{$item[$i]->idDreamBook}}').style.display='none'">
                            <p class="words">
                                <strong>{{$item[$i]->DreamBookWord}}</strong> 
                                <br>
                                из {{$item[$i]->biblioteca_tabl_name}} 
                            </p>
                        </a>
                    </div>          
                    <div style="display:none ;" id="{{$item[$i]->idDreamBook.'1'}}"  class="discription">
                        <a  onclick="document.getElementById('{{$item[$i]->idDreamBook.'1'}}').style.display='none'
                            document.getElementById('{{$item[$i]->idDreamBook}}').style.display=''" class="containerHide">
                            <p class="words">
                                <strong>{{$item[$i]->DreamBookWord}}</strong> 
                                <br>
                                из {{$item[$i]->biblioteca_tabl_name}} 
                            </p>
                        </a>
                        <p class="text" style="margin-bottom: 10px">{{$item[$i]->DreamBookDescription}} </p>
                        <p style="font-size: 13px">Это снилось {{$item[$i]->LikeCol}} пользователям.</p>
                        {{-- <a href="#"class="words"  style="font-size: 12px">Поделится сном</a> --}}
                    </div>
                </div>
            @endfor
        </div>
    @endforeach
@endif
    {{-- <h3 class="h3Letter">A</h3> --}}
    {{-- <div class="descriptionWordContainer">
        @for ($i = 0; $i < count($getPuttBooks); $i++)
            @foreach ($getPuttBooks[$i]['abc']['words'] as $key=>$value)
                @if ('а'== mb_substr($key, 0, 1))
                <div class="containerWord">
                    <div  id="{{$key}}.{{$getPuttBooks[$i]['title']}}" >
                        <a onclick="document.getElementById('{{$key}}.{{$i}}').style.display=''
                            document.getElementById('{{$key}}.{{$getPuttBooks[$i]['title']}}').style.display='none'"> --}}
                            {{-- <h4 class="words">{{$key}} из {{$getPuttBooks[$i]['title']}}</h4>
                        </a>
                    </div>          
                    <div style="display:none ;" id="{{$key}}.{{$i}}"  class="discription">
                        <a  onclick="document.getElementById('{{$key}}.{{$i}}').style.display='none'
                            document.getElementById('{{$key}}.{{$getPuttBooks[$i]['title']}}').style.display=''" class="containerHide">
                            <h4 class="words">{{$key}} из {{$getPuttBooks[$i]['title']}} </h4>
                        </a>
                        <p class="text">{{$value}} </p>
                        <p style="font-size: 13px">Это снилось 1 пользователям.</p>
                        <a href="#" class="words" style="font-size: 12px">Мне тоже снилось</a>
                        <a href="#"class="words"  style="font-size: 12px">Поделится сном</a>
                    </div> --}}
                {{-- </div> --}}
                {{-- @endif  --}}
            {{-- @endforeach --}}
        {{-- @endfor --}}
    {{-- </div>
        <h3 class="h3Letter">Б</h3>
        <div class="descriptionWordContainer">
            @for ($i = 0; $i < count($getPuttBooks); $i++)
                @foreach ($getPuttBooks[$i]['abc']['words'] as $key=>$value)
                    @if ('б'== mb_substr($key, 0, 1))
                    <div class="containerWord">
                        <div  id="{{$key}}" >
                            <a onclick="document.getElementById('{{$key.'1'}}').style.display=''
                                document.getElementById('{{$key}}').style.display='none'">
                                <h4 class="words">{{$key}}</h4> --}}
                            {{-- </a>
                        </div>          
                        <div style="display:none ;" id="{{$key.'1'}}"  class="discription">
                            <a  onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                                document.getElementById('{{$key}}').style.display=''" class="containerHide">
                                <h4 class="words">{{$key}} </h4>
                            </a>
                            <p class="text">{{$value}} </p>
                        </div>
                    </div>
                    @endif 
                @endforeach
            @endfor
        </div> --}}
        {{-- <h3 class="h3Letter">С</h3>
        <div class="descriptionWordContainer">
            @for ($i = 0; $i < count($getPuttBooks); $i++)
                @foreach ($getPuttBooks[$i]['abc']['words'] as $key=>$value)
                    @if ('с'== mb_substr($key, 0, 1))
                    <div class="containerWord">
                        <div  id="{{$key}}" >
                            <a onclick="document.getElementById('{{$key.'1'}}').style.display=''
                                document.getElementById('{{$key}}').style.display='none'">
                                <h4 class="words">{{$key}}</h4>
                            </a>
                        </div>          
                        <div style="display:none ;" id="{{$key.'1'}}"  class="discription">
                            <a  onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                                document.getElementById('{{$key}}').style.display=''" class="containerHide">
                                <h4 class="words">{{$key}} </h4>
                            </a>
                            <p class="text">{{$value}} </p>
                        </div>
                    </div>
                    @endif 
                @endforeach
            @endfor
        </div>    --}}
@endsection