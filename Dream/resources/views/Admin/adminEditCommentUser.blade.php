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
{{-- @dd($comment_table) --}}
    <h2 class="h">Модерация коментов пользователей</h2>
    @for ($i = 0; $i < count($comment_table); $i++)
    <h3>Комент  пользователя {{$comment_table[$i]->name}} 
    количестволайк/дизлайк к нему: {{$comment_table[$i]->comment_like}}
    дата комента:  {{$comment_table[$i]->comment_date}}</h3>
    <p>Пользовател зарегистрировался {{$comment_table[$i]->created_at}}</p>
    <p>Его провиль:
        @if ($comment_table[$i]->status==1)
            заблокирован
        @elseif($comment_table[$i]->status==2)
            удален
        @else 
            рабочий
        @endif 
    </p>
    <p>Его роль:
        @if ($comment_table[$i]->is_admin>0)
            модератор
        @else 
            пользователь
        @endif 
    </p>
    <form action="{{route('editDreamUser')}}" method="post" id="{{$i}}">
        @csrf
        <fieldset style="border:2px solid #fec606">
            <legend><h3>Комент {{$comment_table[$i]->name}}</h3></legend>
                <p>Комент: {{$comment_table[$i]->comment_discription}}</p>
                <p>В данный момент комент:
                    @if ($comment_table[$i]->comment_status==0)
                        опубликован
                    @else   
                        заблокирован 
                    @endif
                </p>
            <br><br>
            <input type="hidden" value="{{$comment_table[$i]->idcomment_table}}" name="idcomment_table">
            <input type="submit" name="action" value="Заблокировать">            
            <input type="submit" name="action" value="Разблокировать" />
        </fieldset>
    </form>
    @endfor
@endsection