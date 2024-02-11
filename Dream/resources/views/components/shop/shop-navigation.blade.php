<div>
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
        @if (Auth::check()&&Auth::user()->is_admin>=1)
            <li><a href={{route('indexAdmin')}} class="basic-navigation-button" style="color:red">Администрирование</a></li>
        @endif
        <li><a href={{route('shop')}} class="basic-navigation-button">Товары для сна</a></li>
    </ul>
</div>