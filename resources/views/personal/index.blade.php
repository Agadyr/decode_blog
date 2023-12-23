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
@include('personal.includes.header')
<div class="plr4 df jcsb g3">
    <div class="post-cards">
        <div class="My-blogs df jcsb aic" style="margin: 20px 0">
            <h1 style="padding: 0!important;">Мои блоги</h1>
            <button class="button-primary">Новый блог</button>
        </div>

        <div>
            <img class="post-img pt1" src="{{asset('/images/post1.png')}}">
            <div class="settings df jcsb aic">
                <h2 class="title">Обзор Report Manager от Webix</h2>
                <div class="df jcsb aic g2 more-icon">
                    <img src="{{asset('images/morevertical.svg')}}" style="cursor:pointer;" onclick="ToggleMenu()">
{{--                    <button onclick="ToggleMenu()">click</button>--}}
                    <p>Еще</p>
                    <div class="more-card g3">
                        <button style="color: black;font-weight: 500;">Редактировать</button>
                        <button style="color: red;font-weight: 500;">Удалить</button>
                    </div>
                </div>

            </div>

            <p class="description">Осень 2020 года стала плодотворным временем для специалистов Webix.
                <br> <br> Команда Webix выпустила версию библиотеки пользовательского интерфейса Webix с двумя новыми
                комплексными виджетами. Первый - зто Scheduler, о котором мы подробно говорили ранее. Второй виджет -
                это Gantt chart в JavaScript. Подробную информацию об этом виджете Вы можете найти в статье. </p>
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
                <br> <br> Команда Webix выпустила версию библиотеки пользовательского интерфейса Webix с двумя новыми
                комплексными виджетами. Первый - зто Scheduler, о котором мы подробно говорили ранее. Второй виджет -
                это Gantt chart в JavaScript. Подробную информацию об этом виджете Вы можете найти в статье. </p>
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
    <div class="category-cards" style="text-align: center">
        <img class="ptb2" style="width: 200px;height: 200px" src="{{asset('/images/ava.png')}}">
        <h2>Елнур Сеитжанов</h2>
        <p class="ptb2">В основно пишу про веб разработку React & Redux</p>
        <p>285 постов за все время</p>
        <button class="button-primary mtb2" style="padding: 14px 17px!important;">Редактировать</button>
    </div>
</div>
<script>

    function ToggleMenu(){
        let drop1 = document.querySelector('.more-card')
        if (drop1.style.display === 'none' || drop1.style.display === '') {
            drop1.style.display = 'block';
        } else {
            drop1.style.display = 'none';
        }
    }
</script>
</body>
</html>
