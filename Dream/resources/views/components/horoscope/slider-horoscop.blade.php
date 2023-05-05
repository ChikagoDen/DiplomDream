{{$h}}
<div class="slideshow-container">
    @for ($i = 0; $i < count($getPuttBooks); $i++)
        <div class="mySlides fade">
            
            <div  class="nested-container"> 
                 <p class="numbertext">{{$i+1}} / {{count($getPuttBooks)}}</p>
                <div style="display: flex;
                    flex-wrap: wrap;
                    align-content: center;
                    justify-content: center;
                    align-items: center;"> 
                    <a  onclick="plusSlides(-1)"><p>назад  &#10094;</p></a>
                    <h3 style=" margin:0 15px">Гороскоп - {{$getPuttBooks[$i]['title']}}</h3>
                    <a  onclick="plusSlides(1)"><p>&#10095;  следующий</p></a>   
                </div>  
     
                    
                    <p class="text">
                        {{$getPuttBooks[$i]['discription']}}
                    </p>
            </div>
        </div>
    @endfor
</div>
<br>
<div style="text-align:center">
    @for ($i = 0; $i < count($getPuttBooks); $i++)
        <span class="dot" onclick="currentSlide($i+1)"></span>
    @endfor
</div>
<script src="{{ asset('../resources/js/carusel.js') }}" async></script>