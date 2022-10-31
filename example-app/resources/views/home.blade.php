<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <title>My counter</title>
</head>
<body>
<header class="header menu">
    <div class="container">
        <div class="header__inner main__menu">
            <div class="header__logo">My calories</div>
            <nav>
                <a  class="nav__link " href="#">Products</a>
                <a  class="nav__link" href="#">Static</a>
                <a  class="nav__link" href="login">LogIn/Sign</a>
            </nav>
        </div>
    </div>
</header>

<section class="section">
    <div class="container"><!--Основной див,выровненный по центру-->
        <div class="inner"><!--Левый див для основной панели-->
            <div class="header_calories"><!--Див для отдельных полей (ячеек /шапка с данными)-->
                <div class="icon_calculate">
                    <img src="icons/icon_cals.svg" alt="icons" width="80" height="80">
                </div>
                <div class="two_layers">
                    <div class="header__inner">
                        <p>Carbs</p>
                        <p>Fats</p>
                        <p>Protein</p>
                        <p>Calories</p>
                    </div>
                    <div class="header__data header__inner">
                        <p>120</p>
                        <p>40</p>
                        <p>89</p>
                        <p>1389</p>
                    </div>
                </div>
            </div>

            <div class="main_titles">
                <div class="mealtime">
                    <p>Breakfast</p>
                </div>
                <div class="header__inner sum_cals_mealtime">
                    <p>20</p>
                    <p>50</p>
                    <p>30</p>
                    <p>360</p>
                </div>
            </div>

            <div class="header_calories add_new_item"><!--Див для отдельных полей (ячеек /шапка с данными)-->
                <div class="icon_calculate">
                    <img class="btn-add" src="icons/plus.svg" alt="icons" width="30" height="30">
                </div>
                <div class="add__item"><p>Add Item</p></div>
            </div>

            <div class="main_titles">
                <div class="mealtime">
                    <p>Lunch</p>
                </div>
                <div class="header__inner sum_cals_mealtime">
                    <p>20</p>
                    <p>50</p>
                    <p>30</p>
                    <p>360</p>
                </div>
            </div><!--main_titles-->


            <div class="header_calories add_new_item"><!--Див для отдельных полей (ячеек /шапка с данными)-->
                <div class="icon_calculate">
                    <img src="icons/plus.svg" alt="icons" width="30" height="30">
                </div>
                <div class="add__item"><p>Add Item</p></div>
            </div>

            <div class="main_titles">
                <div class="mealtime">
                    <p>Dinner</p>
                </div>
                <div class="header__inner sum_cals_mealtime">
                    <p>20</p>
                    <p>50</p>
                    <p>30</p>
                    <p>360</p>
                </div>
            </div>

            <div class="header_calories add_new_item"><!--Див для отдельных полей (ячеек /шапка с данными)-->
                <div class="icon_calculate">
                    <img class="btn-add" src="icons/plus.svg" alt="icons" width="30" height="30">
                </div>
                <div class="add__item">
                    <p>Add Item</p>
                </div>


                <!---->
                <div class="min-menu">
                    <div class="wrapper-bar">
                        <form>
                            <label>
                                <input type="text" placeholder="Search food">
                            </label>
                            <button  class="submit-bar" type="submit">Search</button>
                        </form>
                        <div class="links-min">
                            <div class="link-min">
                                <div class="header__inner"><p>Капучино Гранде без Сахара (Starbucks)</p>
                                    <img class="check-icon" src="icons/check.svg" alt="" width="20px" height="20px"></div>

                                <div class="calories-data">
                                    <p>100g</p>
                                    <p>20</p>
                                    <p>30</p>
                                    <p>40</p>
                                </div>
                            </div>
                            <div class="link-min">
                                <div class="header__inner"> <p>Пастила Фруктовая Яблоко (Пастилушка)</p>
                                    <img class="check-icon" src="icons/check.svg" alt="" width="20px" height="20px"></div>

                                <div class="calories-data">
                                    <p>100g</p>
                                    <p>20</p>
                                    <p>30</p>
                                    <p>40</p>
                                </div>
                            </div>
                            <div class="link-min">
                                <div class="header__inner"> <p>Пастила Фруктовая Яблоко (Пастилушка)</p>
                                    <img class="check-icon" src="icons/check.svg" alt="" width="20px" height="20px"></div>

                                <div class="calories-data">
                                    <p>100g</p>
                                    <p>20</p>
                                    <p>30</p>
                                    <p>40</p>
                                </div>
                            </div>
                            <div class="link-min">
                                <div class="header__inner"> <p>Пастила Фруктовая Яблоко (Пастилушка)</p>
                                    <img class="check-icon" src="icons/check.svg" alt="" width="20px" height="20px"></div>

                                <div class="calories-data">
                                    <p>100g</p>
                                    <p>20</p>
                                    <p>30</p>
                                    <p>40</p>
                                </div>
                            </div>

                        </div>
                        <div class="btn">
                            <button class="btn-add-menu">Add</button>
                        </div>


                    </div><!--wrapper-bar-->

                </div><!--min-menu-->

                <!---->
            </div><!--class="header_calories add_new_item"-->

        </div> <!--header__inner-->
    </div><!--container-->
</section>

<script src="../../resources/js/script.js"></script>
</body>
</html>



