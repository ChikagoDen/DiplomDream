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
</ul>
@endsection
@section('contentMainArticle')
    <h2 class="h">Редактор слов и его значений</h2>
    @for ($i = 0; $i < count($dreamBooks); $i++)
    <h3>{{$biblioteca_tabl_name}} -слов:{{$biblioteca_tabl_word_col}}</h3>
    <form action="{{route('infoDreamModerationText')}}" method="post" id="{{$i}}">
        @csrf
        <fieldset style="border:2px solid #fec606">
            <legend><h3>Слово N {{$i+1}}:{{$dreamBooks[$i]->DreamBookWord}}</h3></legend>
            <label>
                <p>Измените слово: {{$dreamBooks[$i]->DreamBookWord}}</p>
                <input type="text" name="DreamBookWord"  value="{{$dreamBooks[$i]->DreamBookWord}}">
            </label>
            <label> 
                <p>Измените описание слова: {{$dreamBooks[$i]->DreamBookDescription}}</p>
                <textarea name="DreamBookDescription"  cols="30" rows="2">{{$dreamBooks[$i]->DreamBookDescription}}</textarea>
            </label>            
            <br><br>

            <input type="hidden" value="{{$biblioteca_tabl_name}}" name="biblioteca_tabl_name">
            <input type="hidden" value="{{$biblioteca_tabl_word_col}}" name="biblioteca_tabl_word_col">            
            <input type="hidden" value="{{$dreamBooks[$i]->idDream}}" name="idDream">
            <input type="hidden" value="{{$dreamBooks[$i]->idDreamBook}}" name="idDreamBook">
            <input type="submit" name="action" value="Редактировать">            
            <input type="submit" name="action" value="Удалить" />
        </fieldset>
    </form>
    @endfor
@endsection