@extends('layouts.app')

@section('style')
    @vite(['resources/css/welcome.css'])
@endsection


@section('slider')
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                    aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ Vite::asset('resources/icons/healthy_food.jpg') }}"
                     alt="Первый слайд">

                <div class="container">
                    <div class="carousel-caption text-start" id="start">
                        <h1>Счетчик калорий CounterCal</h1>
                        <p class="fs-5 lead">Трекер диеты и потери веса</p>
                        <p class="fs-5 lead"><a class="btn btn-lg btn-primary" href="/login">Начать</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ Vite::asset('resources/icons/women.jpeg') }}"
                     alt="Второй слайд">

                <div class="container">
                    <div class="carousel-caption" id="middle">
                        <h1>CounterCal - твой помощник на пути к здоровому образу жизни</h1>
                        <p class="fs-5 lead">Интуитивно понятный дизайн и система, которая учтет ваш образ жизни и
                            цель.</p>
                        <p class="fs-5 lead"><a class="btn btn-lg btn-primary" href="/login">Начать</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ Vite::asset('resources/icons/salat.jpg') }}"
                     alt="Третий слайд">
                <div class="container">
                    <div class="carousel-caption" id="end">
                        <h1>С нами у вас всё получится</h1>
                        <p class="fs-5 lead">Мы поможем вам начать здоровый образ жизни. Присоединяйтесь!</p>
                        <p class="fs-5 lead"><a class="btn btn-lg btn-primary" href="/login">Начать</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection

@section('content')
    <div class="container marketing">
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">CounterCal это лучшее приложение для контроля за питанием
                    и похудением.</h2>
                <p class="fs-5 lead">Наш Счетчик Калорий является незаменимым приложением, чтобы просто найти
                    информацию о питательной ценности пищевых продуктов, которые Вы едите, а так же легко отслеживать
                    ваш вес.<br></p>
                <p class="fs-5 lead">Ведите учет калорий в любое время и в любом месте. Принимайте решения, которые
                    пойдут на
                    пользу вашему организму, благодаря большой базе продуктов нашего сайта и придерживайтесь выбранного
                    курса при помощи нашей программы.</p>
                <p class="fs-5 lead">CounterCal станет для вас идеальным помощником на пути к желаемому весу.</p>
            </div>
            <div class="col-md-5">
                <p class="text-right"><img class="grey" width="400" height="400"
                                           src="{{ Vite::asset('resources/icons/img1.png') }}"></p>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Счетчик Калорий легок в использовании.</h2>
                <p class="fs-5 lead">А также обладает многими инструментами, чтобы помочь вам добиться успеха:<br></p>
                <ul class="fs-5 lead">
                    <li>Трекер питания и пищевой дневник для всех приемов пищи</li>
                    <li>Счетчик калорий</li>
                    <li>Трекер макронутриентов (белков, жиров и углеводов)</li>
                    <li>Отчетность и цели</li>
                    <li>Слежение за динамикой изменения веса на наглядном графике</li>

                </ul>
            </div>
            <div class="col-md-5 order-md-1">
                <p class="text-left"><img class="grey" width="400" height="400"
                                          src="{{ Vite::asset('resources/icons/img.png') }}"></p>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">С нами у вас всё получится</h2>
                <p class="fs-5 lead">   Отметим важность здорового образа жизни абсолютно для каждого
                    человека, а одним из инструментов, который сможет вам помочь сделать первые шаги на пути к
                    реализации своих целей, будет приложение CounterCal</p>
            </div>
            <div class="col-md-5">
                <p class="text-right"><img class="grey" width="400" height="400"
                                           src="{{ Vite::asset('resources/icons/img_1.png') }}"></p>
            </div>
        </div>

    </div>
@endsection


@section('link')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    {{--</body>--}}
    {{--</html>--}}

@endsection
