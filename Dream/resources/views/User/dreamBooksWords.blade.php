<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layout')

@section('title', "Толкование снов по ключевым словам: Интерпретация значений сновидений")

@section('contentMainArticle')
    <h2 class="h">Здесь вы найдете интерпретацию значений снов по выбранному ключевому слову. </h2>
    {{-- описание сонника --}}
    <h3 class="h3Letter">Слово:  <strong>{{$temp=array_key_first($getPuttBooks[0]['abc']['words'])}}</strong></h3>
    @for ($i = 0; $i < count($getPuttBooks); $i++)
        @foreach ($getPuttBooks[$i]['abc']['words'] as $key=>$value)
            @if (!strcasecmp($temp,$key))
            <div class="containerWord" style="    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);padding: 1px;">
                <p class="text" style="margin: 5px 0;">
                    <em>{{$getPuttBooks[$i]['title']}}</em> </p>
                <p class="text"><blockquote style="font-size: 15px" class="text">{{$value}}</blockquote></p> 
            </div>
            @endif 
        @endforeach
    @endfor
    <div class="containerWord">
        <p style="font-size: 13px">Это снилось 1 пользователям.</p>
        <a href="#" class="words" style="font-size: 12px">Мне тоже снилось</a>
        <a href="#"class="words"  style="font-size: 12px">Поделится сном</a>
    </div>
@endsection