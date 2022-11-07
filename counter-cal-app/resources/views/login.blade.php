<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
{{--    @vite(['resources/css/app.css'])--}}
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>

        .container-1{

            position: fixed;
            top: 60px;
            left: 0;
            width: 100%;

            height: 100%;
            background-color: #181717;
            font-family: 'Inder', sans-serif;
        }
        .row{
            display: block;
            margin-left: 600px;
            height: 100%;
        }
        .tab a:hover,.tab a:focus{
            outline: none;
            text-decoration: none;
        }
        .tab{
            background: #200122;
            background: -webkit-linear-gradient(to bottom, #F80059, #200122);
            background: linear-gradient(to bottom, #F80059, #200122);
            padding: 40px 50px;
            position: relative;
        }
        .tab:before{
            content: "";
            width: 100%;
            height: 100%;
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            background: linear-gradient(#222222,#181717);
            opacity: 0.85;
        }
        .tab .nav-tabs{
            border-bottom: none;
            padding: 0 20px;
            position: relative;
        }
        .tab .nav-tabs li{ margin: 0 30px 0 0; }
        .tab .nav-tabs li a{
            font-size: 22px;
            color: #828282;

            text-transform: uppercase;
            background: transparent;
            padding: 0;
            margin-right: 0;
            border: none;
            border-bottom: 2px solid transparent;
            opacity: 0.5;
            position: relative;
            transition: all 0.5s ease 0s;
        }
        .tab .nav-tabs li a:hover{ background: transparent; }
        .tab .nav-tabs li.active a,
        .tab .nav-tabs li.active a:focus,
        .tab .nav-tabs li.active a:hover{
            border: none;
            background: transparent;
            opacity: 1;
            border-bottom: 2px solid #F80059;
            color: #828282;
        }
        .tab .tab-content{
            padding: 20px 0 0 0;
            margin-top: 40px;
            background: transparent;
            z-index: 1;
            position: relative;
        }
        .form-bg{ background: #ddd; }
        .form-horizontal .form-group{
            margin: 0 0 15px 0;
            position: relative;
        }
        .form-horizontal .form-control{
            height: 40px;
            background: rgba(255,255,255,0.2);
            border: none;

            box-shadow: none;
            padding: 0 20px;
            font-size: 14px;
            font-weight: bold;
            color: #828282;
            transition: all 0.3s ease 0s;
        }
        .form-horizontal .form-control:focus{
            box-shadow: none;
            outline: 0 none;
        }
        .form-horizontal .form-group label{
            padding: 0 20px;
            color: #828282;
            text-transform: capitalize;
            margin-bottom: 10px;
        }
        .form-horizontal .main-checkbox{
            width: 20px;
            height: 20px;
            background: #F80059;
            float: left;
            margin: 5px 0 0 20px;
            border: 1px solid #F80059;
            position: relative;
        }
        .form-horizontal .main-checkbox label{
            width: 20px;
            height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
        }
        .form-horizontal .main-checkbox label:after{
            content: "";
            width: 10px;
            height: 5px;
            position: absolute;
            top: 5px;
            left: 4px;
            border: 3px solid #828282;
            border-top: none;
            border-right: none;
            background: transparent;
            opacity: 0;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        .form-horizontal .main-checkbox input[type=checkbox]{ visibility: hidden; }
        .form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{ opacity: 1; }
        .form-horizontal .text{
            float: left;
            font-size: 22px;
            font-weight: bold;
            color: #828282;
            margin-left: 7px;
            line-height: 20px;
            padding-top: 5px;
            text-transform: capitalize;
        }
        .form-horizontal .btn{
            width: 100%;
            background:#F80059;
            padding: 10px 20px;
            border: none;
            font-size: 22px;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            margin: 20px 0 30px 0;
        }
        .form-horizontal .btn:focus{
            background:#F80059;
            color: #fff;
            outline: none;
            box-shadow: none;
        }
        .form-horizontal .forgot-pass{
            border-top: 1px solid #615f6c;
            margin: 0;
            text-align: center;
        }
        .form-horizontal .forgot-pass .btn{
            width: auto;
            background: transparent;
            margin: 30px 0 0 0;
            color: #615f6c;
            text-transform: capitalize;
            transition: all 0.3s ease 0s;
        }
        .form-horizontal .forgot-pass .btn:hover{ color: #F80059; }
        @media only screen and (max-width: 479px){
            .tab{ padding: 40px 20px; }
        }
    </style>

    <title>LogIn/SignIn</title>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__inner main__menu">
            <div class="header__logo">My calories</div>
            <nav>
                <a  class="nav__link " href="#">Products</a>
                <a  class="nav__link" href="#">Static</a>
                <a  class="nav__link" href="#">LogIn/Sign</a>
            </nav>
        </div>
    </div>
</header>



<div class="container-1">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">

            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">sign in</a>
                    </li>
                    <li role="presentation">
                        <a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">sign up</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="exampleInputEmail1">username</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <div class="main-checkbox">
                                    <input value="None" id="checkbox1" name="check" type="checkbox">
                                    <label for="checkbox1"></label>
                                </div>
                                <span class="text">Keep me Signed in</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Sign in</button>
                            </div>
                            <div class="form-group forgot-pass">
                                <button type="submit" class="btn btn-default">forgot password</button>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- /.col-md-offset-3 col-md-6 -->
    </div><!-- /.row -->
</div><!-- /.container -->

<script src="../css/style.css"></script>
</body>
</html>
