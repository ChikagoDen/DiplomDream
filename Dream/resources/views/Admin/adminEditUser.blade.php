@extends('Admin.adminLayouts')
@section('title', 'moderator')
@section('SourcesNavigation')
<ul class="basic-navigation" style="align-items: flex-start">
    <li><a href="{{ route('dashboard') }}" class="basic-navigation-button">Главная страница</a></li> 
    <li>
        <a href="{{route('editUserAdmin')}}" class="basic-navigation-button">Страница управления Юзерами</a>
    </li>
    <li><a href="{{ route('infoDreamUser')}}" class="basic-navigation-button">Страница модерирования снов</a></li> 
    <li>
        <a href="{{route('infoCommentUser')}}" class="basic-navigation-button">Страница модерирования коментов</a>
    </li>
    <li>
        <a href="{{route('dreamBooksUser')}}" class="basic-navigation-button">Страница добавления сонника</a>
    </li>
</ul>
@endsection
@section('contentMainArticle')
{{-- @dd($user) --}}
    <h2 class="h">Редактирование информации пользователей</h2>
    @for ($i = 0; $i < count($user); $i++)
    <h3>Пользователь{{$user[$i]->name}} роль:
    @if ($user[$i]->is_admin==1)
        модератор
    @else
        пользователь
    @endif
    статус:
    @if ($user[$i]->status==1)
        заблокирован  
    @elseif($user[$i]->status==2)
        удален
    @else 
         рабочий   
    @endif
    </h3>
    <p>Дата создания профиля: {{$user[$i]->created_at}}</p>
    <form action="{{route('editUserAdmin')}}" method="post" id="{{$i}}">
        @csrf
        <fieldset style="border:2px solid #fec606">
            @if ( Auth::user()->is_admin == 2 &&  Auth::id()==$user[$i]->id)
                <legend><h3>Это же админ {{$user[$i]->name}}, добро пожаловать!!!</h3></legend> 
            @else
                <legend><h3>Пользователь{{$user[$i]->name}}</h3></legend>                
            @endif
            <label>
                <p>Измените имя: {{$user[$i]->name}}</p>
                <input type="text" name="name"  value="{{$user[$i]->name}}">
            </label>
            <label> 
                <p>Измените почту: {{$user[$i]->email}}</p>
                <input type="email" name="email" value="{{$user[$i]->email}}">
            </label>
            @if ( Auth::user()->is_admin == 2 &&  Auth::id()!=$user[$i]->id)
                <label>
                    <p>Измените роль пользователя 0-обычный, 1-модератор: {{$user[$i]->is_admin}}</p>
                <input type="number" name="is_admin"  value="{{$user[$i]->is_admin}}">
            </label>
            <label>
                <p>Измените статус пользователя 0-обычный, 1-заблокирован, 2-удален: {{$user[$i]->status}}</p>
                <input type="number" name="status"  value="{{$user[$i]->status}}">
            </label>              
            @else
                <input type="hidden" name="is_admin"  value="{{$user[$i]->is_admin}}">
                <input type="hidden" name="status"  value="{{$user[$i]->status}}">
            @endif
            <br><br>
            
            <input type="hidden" value="{{$user[$i]->id}}" name="id">
            <input type="submit" name="action" value="Редактировать">            
            <input type="submit" name="action" value="Удалить" />
        </fieldset>
    </form>
    @endfor
  
@endsection