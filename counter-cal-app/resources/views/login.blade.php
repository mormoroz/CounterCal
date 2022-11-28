<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <!-- Font Icon -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @vite(['resources/css/style.css'])

    <!-- Main css -->
</head>
<body>

<div class="main">
    <div class="container">
        <div class="signup-content">
            <div  class="image-position" style="background-image:url({{ Vite::asset('resources/icons/images_for_sign_2.jpeg')}})">
            </div>
            <div class="signup-form">
                <form method="post" action="{{ route('login-form') }}" class="login-form" id="login-form">
                    @csrf
                    <div class="form-row">
                        <h2>Авторизация</h2>
                        <h2 > <a class="register"  id="register"  href="#">Создать аккаунт?</a> </h2>
                    </div>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="email-login">Почта :</label>
                        <input type="text" name="email-login" id="email-login" />
                    </div>
                    <div class="form-group">
                        <label for="password-login">Пароль :</label>
                        <input type="password" name="password-login" id="password-login">
                    </div>

                    <div class="form-submit">
                        <input type="submit" value="Войти" class="submit-login" name="submit-login" id="submit-login" />
                    </div>
                </form>
            </div>
            <div class="signup-form">
                <form method="post" action="{{ route('register-form') }}" class="register-form" id="register-form">
                    @csrf
                    <div class="form-row">
                        <h2>Регистрация</h2>
                        <h2 > <a class="login"  id="login"  href="#">Уже есть аккаунт?</a> </h2>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Имя :</label>
                            <input type="text" name="name" id="name"/>
                        </div>
                        <div class="form-group">
                            <label for="father_name">Фамилия :</label>
                            <input type="text" name="father_name" id="father_name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age">Возраст :</label>
                        <input type="number" name="age" id="age">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="height">Рост(см) :</label>
                            <input type="number" name="height" id="height"/>
                        </div>
                        <div class="form-group">
                            <label for="weight">Вес(кг) :</label>
                            <input type="number" name="weight" id="weight"/>
                        </div>
                    </div>
                    <div class="form-radio">
                        <label for="gender" class="radio-label">Пол :</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="male" checked>
                            <label for="male">Мужской</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="female">
                            <label for="female">Женский</label>
                            <span class="check"></span>
                        </div>
                    </div>
                    <div class="form-radio">
                        <label for="goal" class="radio-label">Цель:</label>
                        <div class="form-radio-item">
                            <input type="radio" name="goal" id="loss" checked>
                            <label for="loss">Похудение</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="goal" id="normal">
                            <label for="normal">Поддержание формы</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="goal" id="gain">
                            <label for="gain">Набор массы</label>
                            <span class="check"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="physical-activity">Физическая активность :</label>
                        <div class="form-select">
                            <select name="physical-activity" id="physical-activity">
                                <option value="min">минимальная/отсутствие тренировок</option>
                                <option value="light">легкая нагрузка 1-3 раза в неделю</option>
                                <option value="middle">3-5 тренировок в неделю</option>
                                <option value="high">высокая(спортсмены)</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email-sign">Почта :</label>
                        <input type="text" name="email-sign" id="email-sign" />
                    </div>
                    <div class="form-group">
                        <label for="password-sign">Пароль :</label>
                        <input type="password" name="password-sign" id="password-sign">
                    </div>
                    <div class="form-group">
                        <label for="password-repeat">Пароль :</label>
                        <input type="password" name="password-repeat" id="password-repeat">
                    </div>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-submit">
                        <input type="submit" value="Сбросить все" class="submit-sign" name="reset" id="reset" />
                        <input type="submit" value="Зарегистрироваться" class="submit-sign" name="submit-sign" id="submit-sign" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


@vite(['resources/jquery/jquery.min.js'])
@vite(['resources/js/main.js'])
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body><!-- These templates were made by Colorlib (https://colorlib.com) -->
</html>
