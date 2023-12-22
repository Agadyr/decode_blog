<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="../../css/all.css">
</head>
<body>
    @include('post.includes.header')
    <div class="plr4 df jcsb g3">
        <div class="post-cards">
            <h1>Блоги по программированию</h1>
            <p class="default-title">Популярные и лучшие публикации по программированию для начинающих
                и профессиональных программистов и IT-специалистов.</p>
           <div>
            <img class="post-img pt1" src="{{asset('/images/post1.png')}}">

            <h2 class="title">Обзор Report Manager от Webix</h2>
            <p class="description">Осень 2020 года стала плодотворным временем для специалистов Webix.
                <br> <br> Команда Webix выпустила  версию библиотеки пользовательского интерфейса Webix с двумя новыми комплексными виджетами. Первый - зто Scheduler, о котором мы подробно говорили ранее. Второй виджет - это Gantt chart в JavaScript. Подробную информацию об этом виджете Вы можете найти в статье. </p>
            <div class="about-post df jcsb aic">
                <div class="calendar df jcsb aic g3">
                    <img src="{{asset('/images/calendar.svg')}}">
                    <h3>26.06.20</h3>
                </div>
                <div class="eye df jcsb aic g3">
                    <img src="{{asset('/images/eye.svg')}}">
                    <h3>21</h3>
                </div>
                <div class="comment df jcsb aic g3">
                    <img src="{{asset('/images/comment.svg')}}">
                    <h3>4</h3>
                </div>
                <div class="fill df jcsb aic g3">
                    <img src="{{asset('/images/fill.svg')}}">
                    <h3>Веб разработка</h3>
                </div>
                <div class="usersShow df jcsb aic g3">
                    <img src="{{asset('/images/Vector.svg')}}">
                    <h3>Michael14</h3>
                </div>
            </div>
           </div>
            <div>
                <img class="post-img pt1" src="{{asset('/images/post1.png')}}">

                <h2 class="title">Обзор Report Manager от Webix</h2>
                <p class="description">Осень 2020 года стала плодотворным временем для специалистов Webix.
                    <br> <br> Команда Webix выпустила  версию библиотеки пользовательского интерфейса Webix с двумя новыми комплексными виджетами. Первый - зто Scheduler, о котором мы подробно говорили ранее. Второй виджет - это Gantt chart в JavaScript. Подробную информацию об этом виджете Вы можете найти в статье. </p>
                <div class="about-post df jcsb aic">
                    <div class="calendar df jcsb aic g3">
                        <img src="{{asset('/images/calendar.svg')}}">
                        <h3>26.06.20</h3>
                    </div>
                    <div class="eye df jcsb aic g3">
                        <img src="{{asset('/images/eye.svg')}}">
                        <h3>21</h3>
                    </div>
                    <div class="comment df jcsb aic g3">
                        <img src="{{asset('/images/comment.svg')}}">
                        <h3>4</h3>
                    </div>
                    <div class="fill df jcsb aic g3">
                        <img src="{{asset('/images/fill.svg')}}">
                        <h3>Веб разработка</h3>
                    </div>
                    <div class="usersShow df jcsb aic g3">
                        <img src="{{asset('/images/Vector.svg')}}">
                        <h3>Michael14</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="category-cards">
            <h1>Категории</h1>
            <a class="category-item" href="#">Прогнозы в IT</a>
            <a class="category-item" href="#">Веб-разработка</a>
            <a class="category-item" href="#">Мобильная разработка</a>
            <a class="category-item" href="#">Фриланс</a>
            <a class="category-item" href="#">Алгоритмы</a>
            <a class="category-item" href="#">Тестирование IT систем</a>
            <a class="category-item" href="#">Разработка игр</a>
            <a class="category-item" href="#">Дизайн и юзабилити</a>
            <a class="category-item" href="#">Искуственный интелект</a>
            <a class="category-item pb1" href="#">Машинное обучение</a>
        </div>
    </div>
</body>
</html>