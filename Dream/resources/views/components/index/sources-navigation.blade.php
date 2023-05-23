<hr>
<h2 class="h2-navigation">Для поиска толкования воспользуйтесь поиском или алфавитным указателем.</h2>
<section class="sources-navigation">
    <form action="{{route('infoDreamBooksWord')}}" method="get" name="form-navigation"  id="formSearchWord">
        <input type="search"  placeholder="Ключевое слово из сна" form="formSearchWord" name="searchWord">
        <input type="submit" value="Искать">
    </form> 
    <ul class="letters-navigation">
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=а" class="button">А</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=б" class="button">Б</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=в" class="button">В</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=г" class="button">Г</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=д" class="button">Д</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=е" class="button">Е</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=ж" class="button">Ж</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=з" class="button">З</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=и" class="button">И</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=й" class="button">Й</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=к" class="button">К</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=л" class="button">Л</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=м" class="button">М</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=н" class="button">Н</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=о" class="button">О</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=п" class="button">П</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=р" class="button">Р</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=с" class="button">С</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=т" class="button">Т</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=у" class="button">У</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=ф" class="button">Ф</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=х" class="button">Х</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=ц" class="button">Ц</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=ч" class="button">Ч</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=ш" class="button">Ш</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=щ" class="button">Щ</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=э" class="button">Э</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=ю" class="button">Ю</a></li>
        <li><a href="{{route('infoDreamBooksWord')}}?searchWord=я" class="button">Я</a></li>
        <li><a href="{{route('infoDreamBooksAll')}}" value=-1 class="button">Все слова</a></li>
    </ul>                
</section>