

@extends('layouts.app')
    @vite(['resources/css/login.css'])
@section('content')
<div class="main">
    <div class="container">
        <div class="signup-content">

            <div class="signup-form">
                <form method="post" action="/users/authenticate" class="login-form" id="login-form">
                    @csrf
                    <div class="form-row">
                        <h2>Вход</h2>
                        <h2><a class="register"  id="register"  href="/register">Создать аккаунт?</a></h2>
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
                        <label for="email">Почта :</label>
                        <input type="text" name="email" id="email" value="{{old('email')}}"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль :</label>
                        <input type="password" name="password" id="password">
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

