<a  @if (Auth::check())
        href="{{ route('dashboard') }}"
    @else
        href="{{route('homeUser')}}"
    @endif href="">

    <img src="{{asset('../resources/img/logo.png')}}" alt="Логотип организации Приснилось" class="logotype">
</a>
<h1 class="heading">Мы считаем, что понимание смысла снов и гороскопа помогает лучше понимать себя и других, принимать важные решения и улучшать отношения.</h1>
@if (Auth::check())
    <div style="text-align: center;margin: 0 10px;">
        <p >Рады Вас видеть</p> 
        <p>{{ Auth::user()->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                <p>Выход</p>
            </a>
        </form>
    </div>
@else
    <a href="{{route('login')}}">
        <p class="authorization">войти</p>
    </a>  
@endif
  

