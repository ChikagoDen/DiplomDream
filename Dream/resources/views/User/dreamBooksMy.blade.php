<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layouts.app')

@section('title', "Мой сон: добавляйте и читайте свои истории")

@section('contentMainArticle')
    <h2 class="h">На этой страничке вы можете посмотреть историю своих снов, а также поделится ими с другими пользователями.</h2>
    <h3 class="h3Letter">Мои сны.</h3>
    @for ($i = 0; $i < count($getPuttBooks3['dreams'] ); $i++)
        @foreach ($getPuttBooks3['dreams'][$i] as $key=>$value)
            <div class="containerWord" style="    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);padding: 1px;">
                <p class="text" style="margin: 5px 0;">
                    10/12/2014&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>{{$key}}</strong> 
                </p>
                <p class="text"><blockquote style="font-size: 15px" class="text">{{$value}}</blockquote></p>
                <p style="text-align: end">
                    <a href="#" class="basic-navigation-button" style="    background: #fec606;
                    border: 1px solid;
                    border-radius: 3px;
                    font-size: 16px;
                    outline: none;
                    padding: 3px 7px;
                    text-align: center;
                    margin-right: 10px;
                    text-decoration: none;">Опубликовать</a> 
                </p>
            </div>
        @endforeach
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