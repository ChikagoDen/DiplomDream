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
    <p></p>
</ul>
@endsection
@section('contentMainArticle')
    <h2 class="h">Редактирование сонников</h2>
    @for ($i = 0; $i < count($dreamBooks); $i++)
    <form action="{{route('infoDreamModerationEdit')}}" method="post" id="{{$i}}">
        @csrf
        <fieldset style="border:2px solid #fec606">
            <legend><h3>Книга N {{$i+1}}:{{$dreamBooks[$i]->biblioteca_tabl_name}}</h3></legend>
            <label>
                <p>Измените название: {{$dreamBooks[$i]->biblioteca_tabl_name}}</p>
                <input type="text" name="biblioteca_tabl_name"  value="{{$dreamBooks[$i]->biblioteca_tabl_name}}">
            </label>
            <label> 
                <p>Измените описание сонника для пользователей: {{$dreamBooks[$i]->biblioteca_tabl_discription}}</p>
                <textarea name="biblioteca_tabl_discription"  cols="30" rows="2">{{$dreamBooks[$i]->biblioteca_tabl_discription}}</textarea>
            </label>            
            <label>
                <p>Измените заметку о соннике для себя: {{$dreamBooks[$i]->biblioteca_tabl_comment}}</p>
                <textarea name="biblioteca_tabl_comment"  cols="30" rows="2"> {{$dreamBooks[$i]->biblioteca_tabl_comment}}</textarea>
            </label>
            <label> Измените имя автора:{{$dreamBooks[$i]->biblioteca_tabl_author}}
                <p>Автор: {{$dreamBooks[$i]->biblioteca_tabl_author}}</p>
                <input type="text" name="biblioteca_tabl_author"  value="{{$dreamBooks[$i]->biblioteca_tabl_author}}">
            </label>            
            <br><br>
            <input type="hidden" value="{{$dreamBooks[$i]->id_biblioteca_tabl}}" name="id_biblioteca_tabl">
            <input type="hidden" value="{{$dreamBooks[$i]->biblioteca_tabl_word_col}}" name="biblioteca_tabl_word_col">
            <input type="submit" name="action" value="Редактировать">            
            <input type="submit" name="action" value="Удалить" />
            <input type="submit" name="action" value="Перейти редактировать сслова и значения" />
        </fieldset>
    </form>
    @endfor
@endsection