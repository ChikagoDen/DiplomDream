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
    <h2 class="h">Управление пользователями</h2>
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
    @for ($i = 0; $i < count($user); $i++)
    <form action="{{route('editUserAdmin')}}" method="post" id="{{$i}}">
        @csrf
        <fieldset style="border:2px solid #fec606">
            @continue(Auth::user()->is_admin == 1 && $user[$i]->is_admin == 2)
            @if ( Auth::user()->is_admin == 2)
                <legend><h3>Это же админ, {{$user[$i]->name}}, добро пожаловать!!!</h3></legend> 
            @else
                <legend><h3>Пользователь: {{$user[$i]->name}}</h3></legend>                
            @endif
            <p><b>Дата создания профиля:</b> {{$user[$i]->created_at}}</p>
            <label>
                <p><b>Редактировать имя:</b>  {{$user[$i]->name}}</p>
                <input type="text" name="name"  value="{{$user[$i]->name}}">
            </label>
            <label> 
                <p><b>Редактировать почту:</b>   {{$user[$i]->email}}</p>
                <input type="email" name="email" value="{{$user[$i]->email}}">
            </label>
            @if ( Auth::user()->is_admin == 2)
                <label>
                        <p><b>Редактировать роль пользователя</b> (0-обычный, 1-модератор)<b>:</b> {{$user[$i]->is_admin}}</p>
                    <input type="number" name="is_admin"  value="{{$user[$i]->is_admin}}">
                </label>
                <label>
                    <p><b>Редактировать статус пользователя</b> (0-обычный, 1-заблокирован, 2-удален)<b>:</b>  {{$user[$i]->status}}</p>
                    <input type="number" name="status"  value="{{$user[$i]->status}}">
                </label>   
             @else
                <label>
                    <p><b>Редактировать статус пользователя</b> (0-обычный, 1-заблокирован, 2-удален)<b>:</b>  {{$user[$i]->status}}</p>
                    <input type="number" name="status"  value="{{$user[$i]->status}}">
                </label>              
                <input type="hidden" name="is_admin"  value="{{$user[$i]->is_admin}}">
            @endif
            <br><br>
            <input type="hidden" value="{{$user[$i]->id}}" name="id">
            <input type="submit" name="action" value="Редактировать">            
            <input type="submit" name="action" value="Удалить" />
        </fieldset>
    </form>
    @endfor
@endsection