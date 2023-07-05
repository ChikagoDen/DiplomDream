@extends('Admin.adminLayouts')
@section('title', 'moderator')
@section('SourcesNavigation')
<ul class="basic-navigation" style="align-items: flex-start">
    <li style="margin: 5px;">
        <a href="{{ route('dashboard') }}" class="basic-navigation-button">Главная страница</a>
    </li> 
    <li style="margin: 5px;">
        <a href="{{route('infoUserAdmin')}}" class="basic-navigation-button">Управление пользователями</a>
    </li>
    <li style="margin: 5px;">
        <a href="{{ route('infoDreamUser')}}" class="basic-navigation-button">Модерация снов пользователей</a>
    </li> 
    <li style="margin: 5px;">
        <a href="{{route('infoCommentUser')}}" class="basic-navigation-button">Модерация коментов пользователей</a>
    </li>
    <li style="margin: 5px;">
        <a href="{{route('addDreamBook')}}" class="basic-navigation-button">Добавить сонник</a>
    </li>
    <li style="margin: 5px;">
        <a href="{{route('infoDreamModeration')}}" class="basic-navigation-button">Редактирование сонников</a>
    </li>
    <li style="margin: 5px;">
        <a href={{route('indexAdmin')}} class="basic-navigation-button" style="color:red">Администрирование</a>
    </li>
</ul>
@endsection
@section('contentMainArticle')
    <h2 class="h">Редактор слов и их значений</h2>
    <h3>{{$biblioteca_tabl_name}} содержит слов: {{$biblioteca_tabl_word_col}}</h3> 
    @if ($errors->any())
        <div class="alert alert-danger">
            <h3>Внимание ошибки!!!</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif   
    @for ($i = 0; $i < count($dreamBookWords); $i++)
    <form action="{{route('editWordDreamBook')}}" method="post" id="{{$i}}">
        @csrf
        <fieldset style="border:2px solid #fec606">
            <legend><h3>Слово N {{$i+1}}:{{$dreamBookWords[$i]->DreamBookWord}}</h3></legend>
            <label>
                <p><b>Отредактируйте слово:</b> {{$dreamBookWords[$i]->DreamBookWord}}</p>
                <input type="text" name="DreamBookWord"  value="{{$dreamBookWords[$i]->DreamBookWord}}">
            </label>
            <label> 
                <p><b>Отредактируйте описание слова:</b>{{$dreamBookWords[$i]->DreamBookDescription}}</p>
                <textarea name="DreamBookDescription"   cols="135" rows="8">{{$dreamBookWords[$i]->DreamBookDescription}}</textarea>
            </label>            
            <br><br>
            <input type="hidden" value="{{$biblioteca_tabl_name}}" name="biblioteca_tabl_name">
            <input type="hidden" value="{{$biblioteca_tabl_word_col}}" name="biblioteca_tabl_word_col">            
            <input type="hidden" value="{{$dreamBookWords[$i]->idDream}}" name="idDream">
            <input type="hidden" value="{{$dreamBookWords[$i]->idDreamBook}}" name="idDreamBook">
            <input type="submit" name="action" value="Редактировать">            
            <input type="submit" name="action" value="Удалить" />
        </fieldset>
    </form>
    @endfor
@endsection