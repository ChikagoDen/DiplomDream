{{-- {{var_dump($user)}} --}}
<h1>YTLLOKFB GK</h1> 
The current UNIX timestamp is {{ time() }}

<h3>Здорово {{$name}}


@foreach ($getPuttBooks as $user)
    <p>This is user {{ $user['title'] }}</p>
@endforeach