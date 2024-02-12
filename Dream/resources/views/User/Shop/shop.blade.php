@extends('layouts.app')
@section('title', 'ПРИСНИЛОСЬ - сайт предоставляет толкование снов по различным сонникам и описание знаков зодиака.')
@section('SourcesNavigation')
    <x-Shop.ShopNavigation/>
@endsection
@section('contentMainArticle')
    <h2 class="h">"ПРИСНИЛОСЬ" - ваш оазис гармонии и магии снов!</h2>
    <p class="text">    
        Наши идеальные товары для сна помогут вам не только отдохнуть, 
        но и погрузиться в мир вдохновения, оберегов и сновидческих приключений. Добро пожаловать в уют и волшебство!
    </p>
    <div>
        
    </div>
    <div class="slideshow-container">
        @for ($i = 0; $i < count($listDreamBooks); $i++)
            <div class="mySlides fade">
                <div  class="nested-container"> 
                    <p class="numbertext">{{$i+1}} / {{count($listDreamBooks)}}</p>
                    <div style="display: flex;
                            flex-wrap: wrap;
                            align-content: center;
                            justify-content: center;
                            align-items: center;"> 
                        <h3><a href="{{ asset('/infodream?book='.$listDreamBooks[$i]->id_biblioteca_tabl)}}" class="basic-navigation-button" title="Перейти в сонник" style="width: auto;    margin: 0 15px;">{{$listDreamBooks[$i]->biblioteca_tabl_name}}</a></h3>
                    </div>  
                    <p class="text">
                        {{$listDreamBooks[$i]->biblioteca_tabl_discription}}
                    </p>
                </div>
            </div>
        @endfor
    </div>
    <br>

@endsection
@section('sidbarMainAside')
    <h3>Гороскоп</h3>
    <x-Index.Horoscope/>
@endsection