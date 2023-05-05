<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layout')

@section('title', 'Исследуйте мир снов: обширный каталог сонников на все случаи жизни')

@section('contentMainArticle')
    <h2 class="h">{{$getPuttBooks[0]['title']}} содержит слов - {{count($getPuttBooks[0]['abc']['words'])}}. </h2>
    {{-- описание сонника --}}
    <p class="text" >    
        {{$getPuttBooks[0]['discription']}}
    </p>

    <h3 class="h3Letter">A</h3>
    <div class="descriptionWordContainer">
        @foreach ($bookData as $key=>$value)
            {{-- @dd($value); --}}
            @if ('а'== mb_substr($value->DreamBookWord, 0, 1))
            <div class="containerWord">
                <div  id="{{$value->idDreamBook}}" >
                    <a onclick="document.getElementById('{{$value->idDreamBook.'1'}}').style.display=''
                        document.getElementById('{{$value->idDreamBook}}').style.display='none'">
                        <h4 class="words">{{$value->DreamBookWord}}</h4>
                    </a>
                </div>          
                <div style="display:none ;" id="{{$value->idDreamBook.'1'}}"  class="discription">
                    <a  onclick="document.getElementById('{{$value->idDreamBook.'1'}}').style.display='none'
                        document.getElementById('{{$value->idDreamBook}}').style.display=''" class="containerHide">
                        <h4 class="words">{{$value->DreamBookWord}} </h4>
                    </a>
                    <p class="text">{{$value->DreamBookDescription}} </p>
                    <p style="font-size: 13px">Это снилось 1 пользователям.</p>
                    <a href="#" class="words" style="font-size: 12px">Мне тоже снилось</a>
                    <a href="#"class="words"  style="font-size: 12px">Поделится сном</a>
                </div>
            </div>
            @endif 
        @endforeach
    {{-- </div>
        <h3 class="h3Letter">Б</h3>
        <div class="descriptionWordContainer">
        @foreach ($getPuttBooks[0]['abc']['words'] as $key=>$value)
            @if ('б'== mb_substr($key, 0, 1))
            <div class="containerWord">
                <div  id="{{$key}}" >
                    <a  onclick="document.getElementById('{{$key.'1'}}').style.display=''
                        document.getElementById('{{$key}}').style.display='none'">
                        <h4 class="words">{{$key}}</h4>
                    </a>
                </div>          
                <div style="display:none ;"  id="{{$key.'1'}}"  class="discription">
                    <a  onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                        document.getElementById('{{$key}}').style.display=''" class="containerHide">
                        <h4 class="words">{{$key}} </h4>
                    </a>
                    <p class="text">{{$value}} </p>
                </div>
            </div>
            @endif  
        @endforeach
    </div>
        <h3 class="h3Letter">В</h3>
    <div class="descriptionWordContainer"> --}}
        @foreach ($getPuttBooks[0]['abc']['words'] as $key=>$value)
            @if ('в'== mb_substr($key, 0, 1))
            <div class="containerWord">
                <div  id="{{$key}}" >
                    <a onclick="document.getElementById('{{$key.'1'}}').style.display=''
                        document.getElementById('{{$key}}').style.display='none'">
                        <h4 class="words">{{$key}}</h4>
                    </a>
                </div>          
                <div style="display:none ;"  id="{{$key.'1'}}"  class="discription">
                    <a  onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                        document.getElementById('{{$key}}').style.display=''" class="containerHide">
                        <h4 class="words">{{$key}} </h4>
                    </a>
                    <p class="text">{{$value}} </p>
                </div>
            </div>
            @endif 
        @endforeach
    </div>
@endsection
