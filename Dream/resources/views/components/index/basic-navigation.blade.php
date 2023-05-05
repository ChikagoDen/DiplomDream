<ul class="basic-navigation">
    <li><a href="{{route('homeUser')}}" class="basic-navigation-button">Главная страница</a></li>
    <li>
        {{-- "/infodream" --}}
        <form action="formdata" method="get" name="form1" id="1">
            @csrf
            <p class="basic-navigation-button">
                <select name="listDreamBook"  form="1" title="listDreamBook">
                    <option>Выберите сонник</option>
                        @for ($i = 0; $i < count($getDateList); $i++)
                            <option value='{{$i}}'>{{$i+1}} {{$getDateList[$i]->biblioteca_tabl_name}}</option>
                        @endfor
                    <option>Слова из всех сонников</option>
                    <option>Поделится сном</option>
                </select>
            <input type="submit" value="Посмотреть">
            </p>
        </form>
    </li>
    {{-- <li><a href="#" class="basic-navigation-button">Гороскоп</a></li> --}}
    {{-- <li><a href="#" class="basic-navigation-button">Магазин</a></li> --}}
</ul>