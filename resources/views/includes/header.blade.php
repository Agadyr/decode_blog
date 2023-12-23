<div class="bg">
    <div class="header plr4 df jcsb aic pt1">
        <h1>Decode Blog</h1>
        <div class="search-header">
            <input type="text" value="Поиск по Блогам">
            <button class="button-primary jcsb aic"> <img src="../../images/search.svg" > Найти</button>
        </div>
        <div class="reg-log aic">
            @auth()
                <img style="width: 50px;height: 50px" src="{{asset('/images/ava.png')}}">
            @endauth

            @guest()
                <a class="button-primary-a" href="{{route('register')}}">Регистрация</a>
                <a class="button-primary-a " href="{{route('login')}}">Вход</a>
            @endguest
        </div>
    </div>
</div>
