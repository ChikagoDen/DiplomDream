<ul class="basic-navigation" style="align-items: flex-start">
    <li>
        <a  @if (Auth::check())
                href="{{ route('dashboard') }}"
            @else
                href="{{ asset('/')}}"
            @endif class="basic-navigation-button"> Главная страница</a>
    </li> 
    @if (Auth::check())
        <li>
            <a href="{{route('dreamBooksUser')}}" class="basic-navigation-button">Моя страница снов</a>
        </li>
    @endif
    <li>
        <form action="{{route('infoDreamBook')}}" method="get" id="formListDreamBook">
            <div class="basic-navigation-button">
                <select name="book"  form="formListDreamBook" title="listDreamBook">
                    @for ($i = 0; $i < count($getDateList); $i++)
                        <option value={{$getDateList[$i]->id_biblioteca_tabl}}>{{$i+1}}. {{$getDateList[$i]->biblioteca_tabl_name}}.</option>
                    @endfor
                    <option value=1000000>{{count($getDateList)+1}}. Все сонники.</option>
                    <option value=-1>{{count($getDateList)+2}}. Сны других пользователей.</option>
                </select>
                <input type="submit" value="Посмотреть">
            </div>
        </form>
    </li>
    @if (Auth::check()&&Auth::user()->is_admin>=1)
        <li><a href={{route('indexAdmin')}} class="basic-navigation-button" style="color:red">Администрирование</a></li>
    @endif
    {{-- <li><a href="#" class="basic-navigation-button">Гороскоп</a></li> --}}
    {{-- <li><a href="#" class="basic-navigation-button">Магазин</a></li> --}}
</ul>