

@extends('layouts.app')
    @vite(['resources/css/login.css'])
@section('content')
<div class="main">
    <div class="container">
        <div class="signup-content">

            <div class="signup-form">
                <form method="POST" class="login-form" id="login-form">

                    <div class="form-row">
                        <h2 >Вход</h2>
                        <h2 > <a class="register"  id="register"  href="signin">Создать аккаунт?</a> </h2>
                    </div>

                    <div class="form-group">
                        <label for="email-login">Почта :</label>
                        <input type="email" name="email-login" id="email-login" />
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

        </div>
    </div>

</div>



@endsection
