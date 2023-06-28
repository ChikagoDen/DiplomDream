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
    <h2 class="h">Редактирование сонников</h2>
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
    @for ($i = 0; $i < count($listDreamBooks); $i++)
    <form action="{{route('infoDreamModeration')}}" method="post" id="{{$i}}">
        @csrf
        <fieldset style="border:2px solid #fec606">
            <legend><h3>Книга N {{$i+1}}:{{$listDreamBooks[$i]->biblioteca_tabl_name}}</h3></legend>
            <label>
                <p><b>Редактировать название:</b>  {{$listDreamBooks[$i]->biblioteca_tabl_name}}</p>
                <input type="text" name="biblioteca_tabl_name"  value="{{$listDreamBooks[$i]->biblioteca_tabl_name}}">
            </label>
            <label> 
                <p><b>Редактировать описание:</b> {{$listDreamBooks[$i]->biblioteca_tabl_discription}}</p>
                <textarea name="biblioteca_tabl_discription"  cols="135" rows="10">{{$listDreamBooks[$i]->biblioteca_tabl_discription}}</textarea>
            </label>            
            <label>
                <p><b>Редактировать свои заметки:</b>{{$listDreamBooks[$i]->biblioteca_tabl_comment}}</p>
                <textarea name="biblioteca_tabl_comment"  cols="135" rows="2"> {{$listDreamBooks[$i]->biblioteca_tabl_comment}}</textarea>
            </label>
            <label> 
                <p><b>Редактировать автора:</b>{{$listDreamBooks[$i]->biblioteca_tabl_author}}</p>
                <input type="text" name="biblioteca_tabl_author"  value="{{$listDreamBooks[$i]->biblioteca_tabl_author}}">
            </label>            
            <br><br>
            <input type="hidden" value="{{$listDreamBooks[$i]->id_biblioteca_tabl}}" name="id_biblioteca_tabl">
            <input type="hidden" value="{{$listDreamBooks[$i]->biblioteca_tabl_word_col}}" name="biblioteca_tabl_word_col">
            <input type="submit" name="action" value="Редактировать">            
            <input type="submit" name="action" value="Удалить" />
            <input type="submit" name="action" value="Перейти редактировать слова и значения в соннике" />
        </fieldset>
    </form>
    @endfor
@endsection