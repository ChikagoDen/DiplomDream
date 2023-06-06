@extends('Admin.adminLayouts')
@section('title', 'moderator')
@section('SourcesNavigation')
<ul class="basic-navigation" style="align-items: flex-start">
    <li><a href="{{ route('dashboard') }}" class="basic-navigation-button">Главная страница</a></li> 
    <li>
        <a href="{{route('infoUserAdmin')}}" class="basic-navigation-button">Страница управления Юзерами</a>
    </li>
    <li><a href="{{route('infoDreamUser')}}" class="basic-navigation-button">Страница модерирования снов</a></li> 
    <li>
        <a href="{{route('infoCommentUser')}}" class="basic-navigation-button">Страница модерирования коментов</a>
    </li>
    <li>
        <a href="{{route('dreamBooksUser')}}" class="basic-navigation-button">Страница добавления сонника</a>
    </li>
</ul>
@endsection
@section('contentMainArticle')
{{-- @dd($dream_user_table) --}}
    <h2 class="h">Модерация снов пользователей</h2>
    @for ($i = 0; $i < count($dream_user_table); $i++)
    <h3>Сон пользователя {{$dream_user_table[$i]->name}}  название сна:{{$dream_user_table[$i]->dream_user_title}}
    количество коментов к нему: {{$dream_user_table[$i]->dream_user_coment_col}}</h3>
    <p>Пользовател зарегистрировался {{$dream_user_table[$i]->created_at}}</p>
    <p>Его провиль:
        @if ($dream_user_table[$i]->status==1)
            заблокирован
        @elseif($dream_user_table[$i]->status==2)
            удален
        @else 
            рабочий
        @endif 
    </p>
    <p>Его роль:
        @if ($dream_user_table[$i]->is_admin>0)
            модератор
        @else 
            пользователь
        @endif 
    </p>
    <form action="{{route('editDreamUser')}}" method="post" id="{{$i}}">
        @csrf
        <fieldset style="border:2px solid #fec606">
            <legend><h3>Сон {{$dream_user_table[$i]->dream_user_title}}</h3></legend>
                <p>Описание слова: {{$dream_user_table[$i]->dream_user_discription}}</p>
                <p>В данный момент сон:
                    @if ($dream_user_table[$i]->dream_user_access==0)
                        не опубликован
                    @elseif($dream_user_table[$i]->dream_user_access==1)
                        опубликован
                    @elseif($dream_user_table[$i]->dream_user_access==2)   
                        заблокирован                 
                    @else   
                        удален 
                    @endif
                </p>
            <br><br>
            <input type="hidden" value="{{$dream_user_table[$i]->id_dream_user_table}}" name="id_dream_user_table">
            <input type="submit" name="action" value="Заблокировать">            
            <input type="submit" name="action" value="Удалить" />
        </fieldset>
    </form>
    @endfor
@endsection