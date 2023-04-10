{{-- {{var_dump($user)}} --}}
<h1>YTLLOKFB GK</h1> 
The current UNIX timestamp is {{ time() }}

<h3>Здорово {{$name}}


@foreach ($getPuttBooks as $user)
@if ($loop->first)
Это первый{{ $user['id'] }}
@endif

@if ($loop->last)
Это последний.{{ $user['id'] }}
@endif
    <p>This is user {{ $user['title'] }}</p><br>
@endforeach