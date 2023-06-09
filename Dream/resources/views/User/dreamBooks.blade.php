<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layouts.app')

@section('title', 'Исследуйте мир снов: обширный каталог сонников на все случаи жизни')
@section('SourcesNavigation')
    <x-Index.SourcesNavigation/>
@endsection
@section('contentMainArticle')
    <h2 class="h">{{ $DreamBooks[0]->biblioteca_tabl_name}} содержит слов - {{ $DreamBooks[0]->biblioteca_tabl_word_col}}. </h2>
    {{-- описание сонника --}}
    <p class="text" >    
        {{ $DreamBooks[0]->biblioteca_tabl_discription}}
    </p>
    @if (!@empty($wordsStock))
        @foreach ($wordsStock as $key=>$item)
            <h3 class="h3Letter">{{$key}}</h3>
            <div class="descriptionWordContainer">
                @for ($i = 0; $i < count($item); $i++)
                    <div class="containerWord">
                        <div  id="{{$item[$i]->idDreamBook}}" >
                            <a onclick="document.getElementById('{{$item[$i]->idDreamBook.'1'}}').style.display=''
                                document.getElementById('{{$item[$i]->idDreamBook}}').style.display='none'">
                                <h4 class="words">{{$item[$i]->DreamBookWord}}</h4>
                            </a>
                        </div>          
                        <div style="display:none ;" id="{{$item[$i]->idDreamBook.'1'}}"  class="discription">
                            <a  onclick="document.getElementById('{{$item[$i]->idDreamBook.'1'}}').style.display='none'
                                document.getElementById('{{$item[$i]->idDreamBook}}').style.display=''" class="containerHide">
                                <h4 class="words">{{$item[$i]->DreamBookWord}} </h4>
                            </a>
                            <p class="text">{{$item[$i]->DreamBookDescription}} </p>
                            <p style="font-size: 13px">Это снилось {{$item[$i]->LikeCol}} пользователям.</p>
                            <a href="{{route('infoDreamBook')}}?book={{$book}}&words={{$item[$i]->idDreamBook}}" class="words" style="font-size: 12px" >Мне тоже снилось</a>
                            @if (Auth::check())
                                <a href="{{route('dreamBooksUser')}}" class="words"  style="font-size: 12px">Поделится сном</a>
                            @else
                                <a href="{{route('login')}}" class="words"  style="font-size: 12px">Поделится сном</a>
                            @endif
                        </div>
                    </div>
                @endfor
            </div>
        @endforeach
    @endif
@endsection
