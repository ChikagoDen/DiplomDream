<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layouts.app')
@section('SourcesNavigation')
    <x-Index.SourcesNavigation/>
@endsection
@section('title', 'Исследуйте мир снов: обширный каталог сонников на все случаи жизни')
@section('contentMainArticle')
    <h2 class="h">Здесь представлены все сонники, общее число слов - {{$sumWordCol}}</h2>
    {{-- описание сонника --}}
    <p class="text" >    
        Здесь представлены все слова и возможные их толкования, которые могут встретиться в испульзуемых сонниках. ВНИМАНИЕ!!! Возможна долгая загрузка!
    </p>
    @if (!@empty($wordsStock))
        @foreach ($wordsStock as $key=>$item)
            <h3 class="h3Letter">{{$key}}</h3>
            <div class="descriptionWordContainer">
                @for ($i = 0; $i < count($item); $i++)
                    <div class="containerWord">
                        <div  id="{{$item[$i]->idDreamBook}}" >
                            <a onclick="document.getElementById('{{$item[$i]->idDreamBook.'111111'}}').style.display=''
                                document.getElementById('{{$item[$i]->idDreamBook}}').style.display='none'">
                                <p class="words">
                                    <strong>{{$item[$i]->DreamBookWord}}</strong> 
                                    <br>
                                    из {{$item[$i]->DreambookBiblioteca_tabl->biblioteca_tabl_name}} 
                                </p>
                            </a>
                        </div>          
                        <div style="display:none ;" id="{{$item[$i]->idDreamBook.'111111'}}"  class="discription">
                            <a  onclick="document.getElementById('{{$item[$i]->idDreamBook.'111111'}}').style.display='none'
                                document.getElementById('{{$item[$i]->idDreamBook}}').style.display=''" class="containerHide">
                                <p class="words">
                                    <strong>{{$item[$i]->DreamBookWord}}</strong> 
                                    <br>
                                    из {{$item[$i]->DreambookBiblioteca_tabl->biblioteca_tabl_name}} 
                                </p>
                            </a>
                            <p class="text" style="margin-bottom: 10px">{{$item[$i]->DreamBookDescription}} </p>
                            <p style="font-size: 13px">Это снилось {{$item[$i]->LikeCol}} пользователям.</p>
                        </div>
                    </div>
                @endfor
            </div>
        @endforeach
    @else
        <p class="text">Информация не загружена.</p>
    @endif
@endsection