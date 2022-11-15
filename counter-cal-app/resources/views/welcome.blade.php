<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @vite(['resources/css/welcome.css'])
    <title>Welcome</title>
</head>
<body>
<div class="container slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ Vite::asset('resources/icons/strawberry.jpg') }}" alt="Первый слайд">
                <div class="carousel-caption">
                    <h1>Счетчик калорий от CounterCal</h1>
                    <p class="lead">Трекер диеты и потери веса</p>
                    <p><a class="btn btn-lg btn-light" href="#">Начать</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ Vite::asset('resources/icons/strawberry.jpg') }}" alt="Второй слайд">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p class="lead">Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Начать</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ Vite::asset('resources/icons/strawberry.jpg') }}" alt="Третий слайд">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p class="lead">Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Начать</a></p>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container marketing">
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">CounterCal это лучшее приложение для контроля за питанием и похудением.</h2>
            <p class="fs-5 lead">Наш Счетчик Калорий является неотъемлемым приложением, чтобы просто найти информацию о питательной ценности пищевых продуктов, которые Вы едите, а так же легко отслеживать ваш вес.<br></p>
            <p class="lead">Ведите учет калорий в любое время и в любом месте. Принимайте решения, которые пойдут на пользу вашему организму, благодаря большой базе продуктов нашего сайта и придерживайтесь выбранного курса при помощи нашей программы.</p>
            <p class="lead">CounterCal станет для вас идеальным помощником на пути к желаемому весу.</p>
        </div>
        <div class="col-md-5">
            <p class="text-right"><img class="grey" width="500" height="500" src="{{ Vite::asset('resources/icons/grey.png') }}"></p>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Счетчик Калорий легок в использовании.</h2>
            <p class="lead">А также обладает многими инструментами, чтобы помочь вам добиться успеха:<br></p>
            <ul class="lead">
                <li>Трекер питания и пищевой дневник для всех приемов пищи</li>
                <li>Счетчик калорий</li>
                <li>Трекер макронутриентов (белков, жиров и углеводов)</li>
                <li>Отчетность и цели</li>
                <li>Слежение за динамикой изменения веса на наглядном графике</li>

            </ul>
        </div>
        <div class="col-md-5 order-md-1">
            <p class="text-left"><img class="grey" width="500" height="500" src="{{ Vite::asset('resources/icons/grey.png') }}"></p>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">И, наконец, этот.<span class="text-muted">Мат.</span></h2>
            <p class="lead">И да, это последний блок репрезентативного контента-заполнителя. Опять же, на самом деле не предназначен для чтения, просто здесь, чтобы дать вам лучшее представление о том, как это будет выглядеть с некоторым реальным содержанием. Ваш контент.</p>
        </div>
        <div class="col-md-5">
            <p class="text-right"><img class="grey" width="500" height="500" src="{{ Vite::asset('resources/icons/grey.png') }}"></p>
        </div>
    </div>

</div>

<div class="container pt-5">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2022 CounterCal, ООО</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="30" height="30" src="{{ Vite::asset('resources/icons/twitter.png') }}"></a></li>
            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="30" height="30" src="{{ Vite::asset('resources/icons/instagram.png') }}"></a></li>
            <li class="ms-3 p-2"><a class="text-muted" href="#"><img width="30" height="30" src="{{ Vite::asset('resources/icons/facebook.png') }}"></a></li>
        </ul>
    </footer>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
