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

    <h2 class="h">Загрузка новвых сонников</h2>
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
    @if (empty($filename))
        <form action="{{route('addFile')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="file">Добавить сонник</label>
            <br>
            <input type="file" name="fileForm" id="file" class="@error('file') is-invalid @enderror">
            <br><br>
            <input type="submit" value="Добавить">
        </form>
    @endif
    @if (!empty($filename) )           
        <form action="{{route('addBD')}}" method="post" name="addInfo">
            @csrf
                <label for="discriptionDreamBook">Описание, информация о соннике для посетителей</label>
                <br>
                <textarea name="discriptionDreamBook" cols="135" rows="10" value="{{ old('discriptionDreamBook') }}"></textarea>
                <br>
                <label for="discriptionDreamBookMy">Пометки о соннике для себя</label>
                <br>
                <textarea name="discriptionDreamBookMy" cols="135" rows="4" value="{{ old('discriptionDreamBookMy') }}"></textarea>
                <br>
                <label for="biblioteca_tabl_author">Автор сонника</label>
                <br>
                <input type="text" name="biblioteca_tabl_author" value="{{ old('biblioteca_tabl_author') }}">
                <br>            
                <input type="hidden" name="filePatch" value="{{$filename}}">
            <br>
            <input type="submit" value="Загрузить в базу данных">
        </form> 
    @endif 
@endsection