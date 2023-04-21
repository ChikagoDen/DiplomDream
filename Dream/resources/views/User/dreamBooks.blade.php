<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layout')

@section('title', 'Исследуйте мир снов: обширный каталог сонников на все случаи жизни')

@section('contentMainArticle')
    <h2 class="h">{{$getPuttBooks[0]['title']}} содержит слов - {{count($getPuttBooks[0]['abc']['words'])}}. </h2>
    {{-- описание сонника --}}
    <p class="text" >    
        {{$getPuttBooks[0]['discription']}}
    </p>

    <h3 style="border-top: 1px solid;">A</h3>
    <div style="display: flex;    flex-wrap: wrap; ">
        @foreach ($getPuttBooks[0]['abc']['words'] as $key=>$value)
            @if ('а'== mb_substr($key, 0, 1))
            <div class="containerWord" style="width: 33%">
                <div  id="{{$key}}" >
                    <a style="cursor:hand;cursor:pointer;" onclick="document.getElementById('{{$key.'1'}}').style.display=''
                        document.getElementById('{{$key}}').style.display='none'">
                        <h4 class="words">{{$key}}</h4>
                    </a>
                </div>          
                <div style="display:none ;" id="{{$key.'1'}}"  class="discription">
                    <a style="cursor:hand;cursor:pointer;" onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                        document.getElementById('{{$key}}').style.display=''" class="qwer">
                        <h4 class="words">{{$key}} </h4>
                    </a>
                    <p class="text">{{$value}} </p>
                </div>
            </div>
            @endif 
        @endforeach
    </div>
        <h3 style="border-top: 1px solid;">Б</h3>
        <div style="display: flex;    flex-wrap: wrap; ">
        @foreach ($getPuttBooks[0]['abc']['words'] as $key=>$value)
            @if ('б'== mb_substr($key, 0, 1))
            <div class="containerWord" style="width: 33%">
                <div  id="{{$key}}" >
                    <a style="cursor:hand;cursor:pointer;" onclick="document.getElementById('{{$key.'1'}}').style.display=''
                        document.getElementById('{{$key}}').style.display='none'">
                        <h4 class="words">{{$key}}</h4>
                    </a>
                </div>          
                <div style="display:none ;" id="{{$key.'1'}}"  class="discription">
                    <a style="cursor:hand;cursor:pointer;" onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                        document.getElementById('{{$key}}').style.display=''" class="qwer">
                        <h4 class="words">{{$key}} </h4>
                    </a>
                    <p class="text">{{$value}} </p>
                </div>
            </div>
            @endif  
        @endforeach
    </div>
        <h3 style="border-top: 1px solid;">В</h3>
    <div style="display: flex;    flex-wrap: wrap; ">
        @foreach ($getPuttBooks[0]['abc']['words'] as $key=>$value)
            @if ('в'== mb_substr($key, 0, 1))
            <div class="containerWord" style="width: 33%">
                <div  id="{{$key}}" >
                    <a style="cursor:hand;cursor:pointer;" onclick="document.getElementById('{{$key.'1'}}').style.display=''
                        document.getElementById('{{$key}}').style.display='none'">
                        <h4 class="words">{{$key}}</h4>
                    </a>
                </div>          
                <div style="display:none ;" id="{{$key.'1'}}"  class="discription">
                    <a style="cursor:hand;cursor:pointer;" onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                        document.getElementById('{{$key}}').style.display=''" class="qwer">
                        <h4 class="words">{{$key}} </h4>
                    </a>
                    <p class="text">{{$value}} </p>
                </div>
            </div>
            @endif 
        @endforeach
    </div>
@endsection
