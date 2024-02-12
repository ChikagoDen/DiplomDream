@extends('layouts.app')
@section('SourcesNavigation')
    <x-Index.BasicNavigation :getDate="$listDreamBooks"/>
    <x-Index.SourcesNavigation/>
@endsection
@section('title', 'ПРИСНИЛОСЬ - сайт предоставляет толкование снов по различным сонникам и описание знаков зодиака.')
@section('contentMainArticle')
    <h2 class="h">"ПРИСНИЛОСЬ" - сайт, где вы можете узнать значение своих снов и получить гороскоп по дате рождения.</h2>
    <p class="text">    
        Добро пожаловать на наш сайт! Здесь вы найдете подробные объяснения значений ваших снов и гороскоп на
        основе даты рождения. Наша база данных содержит тысячи наиболее распространенных символов и предметов,
        которые могут встречаться в ваших снах. Просто введите ключевые слова или описание сна, и наш алгоритм предоставит вам
        подробное объяснение, что это может значить. Наши данные основаны на работе таких популярных сонников, как Миллера,
        Фрейда, Цветкова, Густава Хиндмана Миллера и других. Кроме того, мы предлагаем гороскоп на основе даты рождения для
        всех знаков зодиака, который поможет вам получить дополнительные предсказания и советы на каждый день.
        Наш сайт также содержит различные статьи и советы по толкованию снов и гороскопа, чтобы помочь вам лучше понимать их
        значение и влияние на вашу жизнь. С помощью нашего сайта вы сможете получить новые идеи, озарения и увидеть свою жизнь
        по-новому.
    </p>
    <x-Index.Slider :getDate="$listDreamBooks">
        <x-slot name="h">
            <h2 class="h">Используемые сонники</h2>
        </x-slot>                    
    </x-Index.Slider>
@endsection
@section('sidbarMainAside')
    <h3>Гороскоп</h3>
    <x-Index.Horoscope/>
@endsection