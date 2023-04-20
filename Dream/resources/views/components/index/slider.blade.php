@props(['h'])

{{$h}}
<div class="slideshow-container">
    @for ($i = 0; $i < count($getPuttBooks); $i++)
        <div class="mySlides fade">
            <div class="numbertext">{{$i+1}} / {{count($getPuttBooks)}}</div>
            <div  class="nested-container">
                    <h3><a href="#" class="basic-navigation-button" title="Перейти в сонник">{{$getPuttBooks[$i]['title']}}</a></h3>
                    <p class="text">
                        {{$getPuttBooks[$i]['discription']}}
                    </p>
            </div>
        </div>
    @endfor
    <a class="prev" onclick="plusSlides(-1)"><p>назад  &#10094;</p></a>
    <a class="next" onclick="plusSlides(1)"><p>&#10095;  следующий</p></a>
</div>
<br>
<div style="text-align:center">
    @for ($i = 0; $i < count($getPuttBooks); $i++)
        <span class="dot" onclick="currentSlide($i+1)"></span>
    @endfor
</div>
<script src="{{ asset('../resources/js/carusel.js') }}" async></script> 