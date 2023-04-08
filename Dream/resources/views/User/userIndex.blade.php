{{-- {{var_dump($user)}} --}}
<h1>YTLLOKFB GK</h1> 
The current UNIX timestamp is {{ time() }}

<h3>Здорово {{$name}}


@foreach ($getPuttBooks as $user)
@if ($loop->first)
This is the first iteration.
@endif

@if ($loop->last)
This is the last iteration.
@endif
    <p>This is user {{ $user['title'] }}</p>
@endforeach