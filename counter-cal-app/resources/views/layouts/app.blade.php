<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <title>My counter</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner main__menu">
            <div class="header__logo">My calories</div>
            <nav>
                <a  class="nav__link " href="#">Products</a>
                <a  class="nav__link" href="../static">Static</a>
                <a  class="nav__link" href="../login">LogIn/Sign</a>
            </nav>
        </div>
    </div>
</header>
@yield('content')
</body>
</html>
