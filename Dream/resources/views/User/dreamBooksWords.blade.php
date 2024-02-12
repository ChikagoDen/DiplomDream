<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layouts.app')
@section('SourcesNavigation')
    <x-Index.BasicNavigation :getDate="$listDreamBooks"/>
    <x-Index.SourcesNavigation/>
@endsection
@section('title', "Толкование снов по ключевым словам: Интерпретация значений сновидений")


@section('contentMainArticle')
    <h2 class="h">Здесь вы найдете интерпретацию значений снов по выбранному ключевому слову. </h2>
    <p>Вы ищите:  <strong>{{$_GET['searchWord']}}</strong>
        <a  href="{{route('dreamBooksUser')}}" class="words" style="font-size: 12px; margin-left: 65%;">Поделится сном</a>
    </p>
    @for ($i = 0; $i < count($wordAll); $i++)
        @foreach ($listDreamBooks as $item)
            @if ($wordAll[$i]->idDream==$item->id_biblioteca_tabl)
                <div class="containerWord" style="    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);padding: 1px;">
                    <p class="text" style="margin: 5px 0;">
                        <em>{{$item->biblioteca_tabl_name}}</em> 
                    </p>
                    <p class="text">
                        <b>{{$wordAll[$i]->DreamBookWord}}</b>
                        <br>
                        <blockquote style="font-size: 15px" class="text">{{$wordAll[$i]->DreamBookDescription}}</blockquote>
                    </p> 
                </div>
            @endif
        @endforeach
    @endfor
    
@endsection

