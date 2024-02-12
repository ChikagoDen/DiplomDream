<a  
    @if (Auth::check())
        href="{{ route('dashboard') }}"
    @else
        href="{{ asset('/')}}"
    @endif>

    <img src="{{asset('../resources/img/logo.png')}}" alt="Логотип организации Приснилось" class="logotype">
</a>
<h1 class="heading">Мы считаем, что понимание смысла снов и гороскопа помогает лучше понимать себя и других, принимать важные решения и улучшать отношения.</h1>
@auth
    <div style="text-align: center;margin: 0 10px;">
        <p >Рады Вас видеть</p> 
        <p>{{ Auth::user()->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">
                <p style="background: rgb(255, 234, 122);
                border: 1px solid;
                border-radius: 3px;
                padding: 3px 7px;">Выход</p>
            </a>
        </form>
    </div>
@endauth
@guest
    @if (strcmp('login',Route::currentRouteName())==0||strcmp('register',Route::currentRouteName())==0)
        <a href="{{ asset('/')}}" style="margin-right: 20px;
            background: rgb(255, 234, 122);
            border: 1px solid;
            border-radius: 3px;
            padding: 3px 7px;">Главная</a>
    @else
        <a href="{{route('login')}}">
            <p class="authorization">войти</p>
        </a> 
    @endif
@endguest
  

