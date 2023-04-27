<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layout')

@section('title', "Мой сон: добавляйте и читайте свои истории")

@section('contentMainArticle')
    <h2 class="h">На этой страничке вы можете посмотреть историю своих снов, а также поделится ими с другими пользователями.</h2>
    <h3 class="h3Letter">Мои сны.</h3>
    @for ($i = 0; $i < count($getPuttBooks3['dreams'] ); $i++)
        @foreach ($getPuttBooks3['dreams'][$i] as $key=>$value)
            <div class="containerWord" style="    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);padding: 1px;">
                <p class="text" style="margin: 5px 0;">
                    <strong>{{$key}}</strong> 
                </p>
                <p class="text"><blockquote style="font-size: 15px" class="text">{{$value}}</blockquote></p> 
            </div>
        @endforeach
    @endfor
    <div>
        <h3 class="h3Letter">Добавить сон.</h3>
        <form action="" method="post">
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