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
    @php
        $temp=-1;
    @endphp
    @for ($i = 0; $i < count($comment_table); $i++)
        @if ($temp!=$comment_table[$i]->userCommit->id)
        <hr>
            @php
                $temp=$comment_table[$i]->userCommit->id;
            @endphp        
            <h3 style="color: blue">Пользователь: {{$comment_table[$i]->userCommit->name}}</h3>
            <p><b>Пользовател зарегистрировался:</b> {{$comment_table[$i]->userCommit->created_at}}</p>
            <p><b>Его профиль:</b>  
                @if ($comment_table[$i]->status==1)
                    заблокирован
                @elseif($comment_table[$i]->status==2)
                    удален
                @else 
                    рабочий
                @endif 
            </p>
            <p><b>Его роль:</b>  
                @if ($comment_table[$i]->userCommit->is_admin>0)
                    модератор
                @else 
                    пользователь
                @endif 
            </p>
        @endif

        <form action="{{route('infoCommentUser')}}" method="post" id="{{$i}}">
            @csrf
            <fieldset style="border:2px solid #fec606">
                <legend><h3>Коментарий</h3></legend>
                    <p><b>Содержание:</b> {{$comment_table[$i]->comment_discription}}</p>
                    <p><b>Количество лайк/дизлайк к нему:</b> {{$comment_table[$i]->comment_like}}</p>
                    <p><b>Дата комента:</b> {{$comment_table[$i]->comment_date}}</p>                               
                    <p><b>В данный момент комент:</b>  
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