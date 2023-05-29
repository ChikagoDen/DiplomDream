<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layouts.app')

@section('title', "Мой сон: добавляйте и читайте свои истории")

@section('contentMainArticle')
    <h2 class="h">На этой страничке вы можете посмотреть историю своих снов, а также поделится ими с другими пользователями.</h2>
    <h3 class="h3Letter">Мои сны.</h3>
    @dump($dataDremMy)
    @for ($i = 0; $i < count($dataDremMy); $i++)
        <div class="containerWord" style="    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);padding: 1px;">
            <p class="text" style="margin: 5px 0;">
                Название: <strong>{{$dataDremMy[$i]->dream_user_title}}</strong>
                {{-- class="date" --}}
                <span  style="color: #777;font-size: 14px; margin-left: 5px;">{{$dataDremMy[$i]->dream_user_date}}</span>
                
            </p>
            <p class="text"><blockquote style="font-size: 15px" class="text">{{$dataDremMy[$i]->dream_user_discription}}</blockquote></p>
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
                    @else  
                        Нарушает правила публикации.
                    @endif 
                </span>
            </p>
        </div>
    @endfor
    <div>
        <h3 class="h3Letter">Добавить сон.</h3>
        <form action="" method="post">
            @csrf
            <fieldset style="border:2px solid #fec606">
                <legend>Добавить сон в свой список.</legend>
                <label> Придумайте название сна:
                    <br>
                    <input type="text" name="title" value="Сон">
                </label>
                <br>
                <label>
                    Здесь вы можете описать свой сон и поделиться своими впечатлениями, эмоциями и размышлениями, которые он вызвал у вас:
                    <br>
                    <textarea name="descriptionDream" rows="10" cols="30" value="Описание сна" style="width: 100%">
                    </textarea>
                </label>
                <br><br>
                <input type="submit" value="Добавить">
            </fieldset>
        </form>
    </div>
@endsection