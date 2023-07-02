<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layouts.app')

@section('title', "Мой сон: добавляйте и читайте свои истории")

@section('contentMainArticle')
    <h2 class="h">На этой страничке вы можете посмотреть историю своих снов, а также поделится ими с другими пользователями.</h2>
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
    @if (Auth::check())
            <h3 class="h3Letter">Мои сны.</h3>
        @for ($i = 0; $i < count($dataDremMy); $i++)
            @if ($dataDremMy[$i]->dream_user_access!=3)
                <div class="containerWord" style="    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);padding: 1px;">
                    <p class="text" style="margin: 5px 0;">
                        Название: <strong>{{$dataDremMy[$i]->dream_user_title}}</strong>
                        {{-- class="date" --}}
                        <span  style="color: #777;font-size: 14px; margin-left: 5px;">{{$dataDremMy[$i]->dream_user_date}}</span>
                        
                    </p>
                    <p class="text" style="word-wrap: break-word;">{{$dataDremMy[$i]->dream_user_discription}}</p>
                    <p style="display: flex; justify-content: space-evenly;">
                        <span >Коментариев:{{$dataDremMy[$i]->dream_user_coment_col}}</span> 
                        <span >
                            Статус: 
                            @if ($dataDremMy[$i]->dream_user_access==1)
                                Видят все
                                <a href="{{route('dreamBooksUser')}}?statusShow={{$dataDremMy[$i]->id_dream_user_table}}" class="basic-navigation-button" style="    background: #fec606;
                                    border: 1px solid;
                                    border-radius: 3px;
                                    font-size: 16px;
                                    outline: none;
                                    padding: 3px 7px;
                                    text-align: center;
                                    margin-right: 10px;
                                    text-decoration: none;">Снять с публикации
                                </a> 
                                <a href="{{route('dreamBooksUser')}}?statusDelete={{$dataDremMy[$i]->id_dream_user_table}}" class="basic-navigation-button" style="    background: #fec606;
                                    border: 1px solid;
                                    border-radius: 3px;
                                    font-size: 16px;
                                    outline: none;
                                    padding: 3px 7px;
                                    text-align: center;
                                    margin-right: 10px;
                                    text-decoration: none;">Удалить</a>
                            @elseif($dataDremMy[$i]->dream_user_access==0)
                                Видите только вы
                                <a href="{{route('dreamBooksUser')}}?statusClose={{$dataDremMy[$i]->id_dream_user_table}}" class="basic-navigation-button" style="    background: #fec606;
                                    border: 1px solid;
                                    border-radius: 3px;
                                    font-size: 16px;
                                    outline: none;
                                    padding: 3px 7px;
                                    text-align: center;
                                    margin-right: 10px;
                                    text-decoration: none;">Опубликовать</a>
                                <a href="{{route('dreamBooksUser')}}?statusDelete={{$dataDremMy[$i]->id_dream_user_table}}" class="basic-navigation-button" style="    background: #fec606;
                                    border: 1px solid;
                                    border-radius: 3px;
                                    font-size: 16px;
                                    outline: none;
                                    padding: 3px 7px;
                                    text-align: center;
                                    margin-right: 10px;
                                    text-decoration: none;">Удалить</a>
                            @else  
                                Нарушает правила публикации.Видите только вы.
                                <a href="{{route('dreamBooksUser')}}?statusDelete={{$dataDremMy[$i]->id_dream_user_table}}" class="basic-navigation-button" style="    background: #fec606;
                                    border: 1px solid;
                                    border-radius: 3px;
                                    font-size: 16px;
                                    outline: none;
                                    padding: 3px 7px;
                                    text-align: center;
                                    margin-right: 10px;
                                    text-decoration: none;">Удалить</a>                              
                            @endif 
                        </span>
                    </p>
                </div>
            @endif        
        @endfor   
    @else
        <p>Чтобы делится снами и оставлять комментарии нужно зарегестрироваться и войти.</p>
        <div style="    display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: center;">
                   <a href="{{route('login')}}" style="outline: none;
                        text-align: center;
                        text-decoration: none;
                        background: rgb(254, 198, 6);
                        display: block;
                        font-size: 16px;
                        border: 1px solid;
                        border-radius: 3px;
                        padding: 3px 7px;
                        width: min-content;
                        margin: 0 15px;">
            {{-- class="basic-navigation-button" --}}
            Войти
        </a> 
        <a style="outline: none;
            text-align: center;
            text-decoration: none;
            background: rgb(254, 198, 6);
            display: block;
            font-size: 16px;
            border: 1px solid;
            border-radius: 3px;
            padding: 3px 7px;
            width: min-content;
            margin: 0 15px;" href="{{ route('register') }}" >
                Зарегестрироваться
            </a> 
        </div>

    @endif
@endsection
@if (Auth::check())
    @section('sidbarMainAside')
        <div>
            <h3> Редактировать данные.</h3>
            <form action="{{route('dreamBooksUserUpdateName')}}" method="post">
                @csrf
                <fieldset style="border:2px solid #fec606">
                    <legend>Изменить свои данные.</legend>
                    <label> Впишите новое имя:
                        <br>
                        <input type="text" name="newName"  placeholder="впишите новое имя">
                    </label>
                    <br><br>
                    <input type="submit" value="Добавить">
                </fieldset>
            </form>
        </div>
        <div>
            <h3 class="h3Letter">Добавить сон.</h3>
            <form action="{{route('dreamBooksUserAddDream')}}" method="post">
                @csrf
                <fieldset style="border:2px solid #fec606">
                    <legend>Добавить сон в свой список.</legend>
                    <label> Придумайте название сна:
                        <br>
                        <input type="text" name="titleDream"  placeholder="Название сна" defaultValue="Мой сон">
                    </label>
                    <br>
                    <label>
                        Здесь вы можете описать свой сон и поделиться своими впечатлениями, эмоциями и размышлениями, которые он вызвал у вас:
                        <br>
                        <textarea name="descriptionDream" rows="10" cols="30" value="Описание сна" style="width: 100%" >
                        </textarea>
                    </label>
                    <br><br>
                    <input type="submit" value="Добавить">
                </fieldset>
            </form>
        </div>
    @endsection  
@endif
