<ul class="basic-navigation">
    <li><a href="/" class="basic-navigation-button">Главная страница</a></li>
    <li>
        {{-- "/infodream" --}}
        <form action="formdata" method="get" name="form1" id="1">
            <p class="basic-navigation-button">
                <select name="listDreamBook"  form="1" title="listDreamBook">
                    <option>Выберите сонник</option>
                    @for ($i = 0; $i < count($getPuttBooks); $i++)
                        <option value='{{$i}}'>{{$i+1}} {{$getPuttBooks[$i]['title']}}</option>
                    @endfor
                    <option>Слова из всех сонников</option>
                </select>
            <input type="submit" value="Посмотреть">
            </p>
        </form>
        </li>
    <li><a href="#" class="basic-navigation-button">Гороскоп</a></li>
    {{-- <li><a href="#" class="basic-navigation-button">Магазин</a></li> --}}
</ul>