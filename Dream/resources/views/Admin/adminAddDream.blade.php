@extends('Admin.adminLayouts')
@section('title', 'moderator')
@section('SourcesNavigation')
<ul class="basic-navigation" style="align-items: flex-start">
    <li><a href="{{ route('dashboard') }}" class="basic-navigation-button">Главная страница</a></li> 
    <li>
        <a href="{{route('dreamBooksUser')}}" class="basic-navigation-button">Страница управления Юзерами</a>
    </li>
    <li><a href="{{ asset('/')}}" class="basic-navigation-button">Страница модерирования снов</a></li> 
    <li>
        <a href="{{route('dreamBooksUser')}}" class="basic-navigation-button">Страница модерирования коментов</a>
    </li>
    <li>
        <a href="{{route('dreamBooksUser')}}" class="basic-navigation-button">Страница добавления сонника</a>
    </li>
    <li>
        <a href="{{route('indexAdmin')}}" class="basic-navigation-button">Главная админа</a>
    </li>
    
</ul>
@endsection
@section('contentMainArticle')
    <h2 class="h">Проверка</h2>
    {{-- @php
        $i=0;
    @endphp --}}
    {{-- @foreach ( $lines as $key=>$item)
        <h5>{{$key.')'.$item}}</h5>
    @endforeach --}}
{{-- @dd($filename); --}}
    <form action="{{route('addBD')}}" method="post">
        @csrf
            <label for="discriptionDreamBook">Описание, информация о соннике для посетителей</label>
            <input type="text" name="discriptionDreamBook">
            <br>
            <label for="discriptionDreamBookMy">Пометки о соннике для себя</label>
            <input type="text" name="discriptionDreamBookMy">
            <br>
            <label for="author">Автор сонника</label>
            <input type="text" name="author">
            <br>            
            <input type="text" name="filePatch" value="{{$filename}}">
        <br>
        <input type="submit" value="Загрузить в базу данных">
    </form> 

@endsection