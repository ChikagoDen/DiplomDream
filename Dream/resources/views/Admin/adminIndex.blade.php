@extends('Admin.adminLayouts')
@section('title', 'moderator')
@section('SourcesNavigation')
<ul class="basic-navigation" style="align-items: flex-start">
    <li><a href="{{ route('dashboard') }}" class="basic-navigation-button">Главная страница</a></li> 
    <li>
        <a href="{{route('infoUserAdmin')}}" class="basic-navigation-button">Страница управления Юзерами</a>
    </li>
    <li><a href="{{ route('infoDreamUser')}}" class="basic-navigation-button">Страница модерирования снов</a></li> 
    <li>
        <a href="{{route('infoCommentUser')}}" class="basic-navigation-button">Страница модерирования коментов</a>
    </li>
    <li>
        <a href="{{route('dreamBooksUser')}}" class="basic-navigation-button">Страница добавления сонника</a>
    </li>
        <li>
        <a href="{{route('infoDreamModeration')}}" class="basic-navigation-button">Редактирование сонников</a>
    </li>
            <li>
        <a href="{{route('indexAdmin')}}" class="basic-navigation-button">Главная админа</a>
    </li>
    
</ul>
@endsection
@section('contentMainArticle')
    <h2 class="h">Привет Админ</h2>
    {{-- @dump($text) --}}
    <form action="{{route('addFile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="word">Загрузить файл</label>
        <input type="file" name="word" id="word" class="@error('word') is-invalid @enderror">
        @error('word')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <input type="submit" value="Добавить">
    </form>  
@endsection
