<link rel="stylesheet" href="{{ asset('css/dreamBooks.css')}}">
@extends('layout')

@section('title', 'Исследуйте мир снов: обширный каталог сонников на все случаи жизни')

@section('contentMainArticle')
    <h2 class="h">Все сонники. </h2>
    {{-- описание сонника --}}
    <p class="text" >    
        Здесь представлены все слова и возможные их толкования, которые могут встретиться в испульзуемых сонниках.
    </p>
    <h3 class="h3Letter">A</h3>
    <div class="descriptionWordContainer">
        @for ($i = 0; $i < count($getPuttBooks); $i++)
            @foreach ($getPuttBooks[$i]['abc']['words'] as $key=>$value)
                @if ('а'== mb_substr($key, 0, 1))
                <div class="containerWord">
                    <div  id="{{$key}}" >
                        <a onclick="document.getElementById('{{$key.'1'}}').style.display=''
                            document.getElementById('{{$key}}').style.display='none'">
                            <h4 class="words">{{$key}}</h4>
                        </a>
                    </div>          
                    <div style="display:none ;" id="{{$key.'1'}}"  class="discription">
                        <a  onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                            document.getElementById('{{$key}}').style.display=''" class="containerHide">
                            <h4 class="words">{{$key}} </h4>
                        </a>
                        <p class="text">{{$value}} </p>
                    </div>
                </div>
                @endif 
            @endforeach
        @endfor
    </div>
        <h3 class="h3Letter">Б</h3>
        <div class="descriptionWordContainer">
            @for ($i = 0; $i < count($getPuttBooks); $i++)
                @foreach ($getPuttBooks[$i]['abc']['words'] as $key=>$value)
                    @if ('б'== mb_substr($key, 0, 1))
                    <div class="containerWord">
                        <div  id="{{$key}}" >
                            <a onclick="document.getElementById('{{$key.'1'}}').style.display=''
                                document.getElementById('{{$key}}').style.display='none'">
                                <h4 class="words">{{$key}}</h4>
                            </a>
                        </div>          
                        <div style="display:none ;" id="{{$key.'1'}}"  class="discription">
                            <a  onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                                document.getElementById('{{$key}}').style.display=''" class="containerHide">
                                <h4 class="words">{{$key}} </h4>
                            </a>
                            <p class="text">{{$value}} </p>
                        </div>
                    </div>
                    @endif 
                @endforeach
            @endfor
        </div>
        <h3 class="h3Letter">С</h3>
        <div class="descriptionWordContainer">
            @for ($i = 0; $i < count($getPuttBooks); $i++)
                @foreach ($getPuttBooks[$i]['abc']['words'] as $key=>$value)
                    @if ('с'== mb_substr($key, 0, 1))
                    <div class="containerWord">
                        <div  id="{{$key}}" >
                            <a onclick="document.getElementById('{{$key.'1'}}').style.display=''
                                document.getElementById('{{$key}}').style.display='none'">
                                <h4 class="words">{{$key}}</h4>
                            </a>
                        </div>          
                        <div style="display:none ;" id="{{$key.'1'}}"  class="discription">
                            <a  onclick="document.getElementById('{{$key.'1'}}').style.display='none'
                                document.getElementById('{{$key}}').style.display=''" class="containerHide">
                                <h4 class="words">{{$key}} </h4>
                            </a>
                            <p class="text">{{$value}} </p>
                        </div>
                    </div>
                    @endif 
                @endforeach
            @endfor
        </div>   
@endsection