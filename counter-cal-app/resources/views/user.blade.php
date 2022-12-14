@extends('layouts.app')

@section('style')
    @vite(['resources/css/user.css'])
@endsection


@section('content')

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row ml-5">
                        <div class="col-md-4 gradient-custom text-center text-white"
                             style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="{{ Vite::asset('resources/icons/user.png') }}"
                                 alt="Avatar" class="img-fluid my-5" style="width: 150px;"/>
                            <h4>Шарифуллина Виктория</h4>
                            <button type="button" class="btn btn-light mt-5 lead">Сохранить изменения</button>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-8">
                                <h6>Личные данные</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row">
                                    <div class="col-5 mb-3">
                                        <h6>Имя</h6>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-5 mb-3">
                                        <h6>Фамилия</h6>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="surname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-5 mb-3">
                                        <h6>Возраст</h6>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="age">
                                        </div>
                                    </div>
                                    <div class="col-5 mb-3">
                                        <h6>Рост(см)</h6>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="height">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 mb-3">
                                        <h6>Вес(кг)</h6>
                                        <div class="form-group">
                                            <input type="int" class="form-control" id="weight">
                                        </div>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <h6>Физическая активность</h6>
                                        <div class="form-select-1 form-select-l">
                                            <select name="activity" id="activity">
                                                <option value="min">минимальная/отсутствие тренировок</option>
                                                <option value="light">легкая нагрузка 1-3 раза в неделю</option>
                                                <option value="middle">3-5 тренировок в неделю</option>
                                                <option value="high">высокая(спортсмены)</option>
                                            </select>
                                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <h6>Пол</h6>
                                        <div class="form-radio">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                       id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Мужской</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                       id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Женский</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <h6>Цель</h6>
                                        <div class="form-radio">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                                       id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Похудение</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                                       id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Поддержание
                                                    формы</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                                       id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">Набор массы</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <h6>Почта</h6>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <h6>Пароль</h6>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <h6>Пароль</h6>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password-repeat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
