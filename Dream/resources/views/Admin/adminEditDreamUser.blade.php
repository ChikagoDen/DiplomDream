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
    <h2 class="h">Модерация снов пользователей</h2>
    @php
        $tmp=-1
    @endphp
    @for ($i = 0; $i < count($dream_user_table); $i++)
        @if ($tmp!=$dream_user_table[$i]->user->id)
        <hr>
        <h3 style="color: rgb(255, 0, 170)">Профиль пользователя и его сны</h3>
        <p ><b>Пользователь:</b>{{$dream_user_table[$i]->user->name}}</p>
        <p><b>Пользовател зарегистрировался:</b> {{$dream_user_table[$i]->user->created_at}}</p>
        <p><b>Стату  пользователя:</b>
            @if ($dream_user_table[$i]->status==1)
                заблокирован
            @elseif($dream_user_table[$i]->status==2)
                удален
            @else 
                рабочий
            @endif 
        </p>
        <p><b>Роль пользователя:</b>
            @if ($dream_user_table[$i]->is_admin>0)
                модератор
            @else 
                пользователь
            @endif 
        </p> 
        @endif
        @php
            $tmp=$dream_user_table[$i]->user->id
        @endphp
        <form action="{{route('editDreamUser')}}" method="post" id="{{$i}}">
            @csrf
            <fieldset style="border:2px solid #fec606">
                <legend><h3>Сон {{$dream_user_table[$i]->dream_user_title}}</h3></legend>
                    <p><b>Описание сна:</b>  {{$dream_user_table[$i]->dream_user_discription}}</p> 
                    <p><b>Количество коментов к нему:</b>{{$dream_user_table[$i]->dream_user_coment_col}}</p>
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
                <input type="submit" name="action" value="Разблокировать" />
            </fieldset>
        </form>
    @endfor
@endsection