<ul class="basic-navigation">
    <li><a href="{{route('homeUser')}}" class="basic-navigation-button">Главная страница</a></li>
    <li>
        <form action="{{route('infoDreamBook')}}" method="get" id="formListDreamBook">
            {{-- @csrf --}}
            <div class="basic-navigation-button">
                <select name="book"  form="formListDreamBook" title="listDreamBook">
                    @for ($i = 0; $i < count($getDateList); $i++)
                        <option value='{{$i}}'>{{$i+1}}. {{$getDateList[$i]->biblioteca_tabl_name}}</option>
                    @endfor
                    <option >Слова из всех сонников</option>
                    <option>Поделится сном</option>
                </select>
                <input type="submit" value="Посмотреть">
            </div>
        </form>
    </li>
    {{-- <li><a href="#" class="basic-navigation-button">Гороскоп</a></li> --}}
    {{-- <li><a href="#" class="basic-navigation-button">Магазин</a></li> --}}
</ul>