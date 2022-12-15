@extends('layouts.app')

@section('style')
    @vite(['resources/css/user.css'])
@endsection


@section('content')
    <form method="post" action="/user">
        @csrf
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row ml-5">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                 style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="{{ Vite::asset('resources/icons/user.png') }}"
                                     alt="Avatar" class="img-fluid my-5" style="width: 150px;"/>
                                <h4>{{ $data->last_name }} {{ $data->first_name }}</h4>
                                <button type="submit" class="btn btn-light mt-5 lead">
                                    Сохранить изменения
                                </button>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-8">
                                    <h6>Личные данные</h6>
                                    <hr class="mt-0 mb-4">
                                    @if(session(('success')))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-5 mb-3">
                                            <h6>Имя</h6>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="first_name"
                                                       id="first_name"
                                                       value="{{ $data->first_name }}">
                                            </div>
                                        </div>
                                        <div class="col-5 mb-3">
                                            <h6>Фамилия</h6>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="last_name" id="last_name"
                                                       value="{{ $data->last_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-5 mb-3">
                                            <h6>Возраст</h6>
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="age" id="age"
                                                       value="{{ $data->age }}">
                                            </div>
                                        </div>
                                        <div class="col-5 mb-3">
                                            <h6>Рост(см)</h6>
                                            <div class="form-group">
                                                <input type="number" step="1" class="form-control" name="height"
                                                       id="height"
                                                       value="{{ $data->height }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5 mb-3">
                                            <h6>Вес(кг)</h6>
                                            <div class="form-group">
                                                <input type="number" step="0.01" class="form-control" name="weight"
                                                       id="weight"
                                                       value="{{ $user_weight->weight }}">
                                            </div>
                                        </div>
                                        <div class="col-4 mb-3">
                                            <h6>Физическая активность</h6>
                                            <div class="form-select-1 form-select-l">
                                                <select name="activityForm" id="selectForm">
                                                    <option value="min" {{ ( $data->activity == 'min') ? 'selected' : '' }}>
                                                        минимальная/отсутствие тренировок
                                                    </option>
                                                    <option value="light" {{ ( $data->activity == 'light') ? 'selected' : '' }}>
                                                        легкая нагрузка 1-3 раза в неделю
                                                    </option>
                                                    <option value="middle" {{ ( $data->activity == 'middle') ? 'selected' : '' }}>
                                                        3-5 тренировок в неделю
                                                    </option>
                                                    <option value="high" {{ ( $data->activity == 'high') ? 'selected' : '' }}>
                                                        высокая(спортсмены)
                                                    </option>
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
                                                    <input class="form-check-input" @checked($data->gender == "0")
                                                    type="radio" name="inlineRadioOptions"
                                                           id="inlineRadio1" value="0">
                                                    <label class="form-check-label" for="inlineRadio1">Мужской</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input"
                                                           @checked($data->gender == "1") type="radio"
                                                           name="inlineRadioOptions"
                                                           id="inlineRadio2" value="1">
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
                                                    <input class="form-check-input" @checked($data->mission == "0")
                                                    type="radio" name="inlineRadioOptions1"
                                                           id="inlineRadio1" value="0">
                                                    <label class="form-check-label" for="inlineRadio1">Похудение</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input"
                                                           @checked($data->mission == "1") type="radio"
                                                           name="inlineRadioOptions1"
                                                           id="inlineRadio2" value="1">
                                                    <label class="form-check-label" for="inlineRadio2">Поддержание
                                                        формы</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input"
                                                           @checked($data->mission == "2") type="radio"
                                                           name="inlineRadioOptions1"
                                                           id="inlineRadio3" value="2">
                                                    <label class="form-check-label" for="inlineRadio3">Набор
                                                        массы</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <h6>Почта</h6>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                       value="{{ $data->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <h6>Пароль</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password"
                                                       id="password" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <h6>Повторите пароль</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password-repeat"
                                                       id="password-repeat">
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
    </form>

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
