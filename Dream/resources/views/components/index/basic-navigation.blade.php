<ul class="basic-navigation" style="align-items: flex-start">
    <li><a href="{{ asset('/')}}" class="basic-navigation-button">Главная страница</a></li> 
    @if (Auth::check())
        <li>
            <a href="{{route('dreamBooksUser')}}" class="basic-navigation-button">Моя страница снов</a>
        </li>
    @endif
    <li>
        <form action="{{route('infoDreamBook')}}" method="get" id="formListDreamBook">
            {{-- @csrf --}}
            <div class="basic-navigation-button">
                <select name="book"  form="formListDreamBook" title="listDreamBook">
                    @for ($i = 0; $i < count($getDateList); $i++)
                    
                        <option value={{$i}}>{{$i+1}}. {{$getDateList[$i]->biblioteca_tabl_name}}.</option>
                    @endfor
                    <option value=1000000>{{count($getDateList)+1}}. Все сонники.</option>
                    <option value=-1>{{count($getDateList)+2}}. Сны других пользователей.</option>
                </select>
                <input type="submit" value="Посмотреть">
            </div>
        </form>
    </li>
    {{-- <li><a href="#" class="basic-navigation-button">Гороскоп</a></li> --}}
    {{-- <li><a href="#" class="basic-navigation-button">Магазин</a></li> --}}
</ul>