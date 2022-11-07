@extends('layouts.app')

@section('content')

    @vite(['resources/js/app.js'])
<section class="section">
    <div class="container"><!--Основной див,выровненный по центру-->
        <div class="inner"><!--Левый див для основной панели-->
            <div class="header_calories"><!--Див для отдельных полей (ячеек /шапка с данными)-->
                <div class="icon_calculate">
                    <img src="{{ Vite::asset('resources/icons/icon_cals.svg') }}" alt="icons" width="80" height="80" class="opacity-80">
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
                    <img class="btn-add" src="{{ Vite::asset('resources/icons/plus.svg') }}" alt="icons" width="30" height="30">
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
                    <img src="{{ Vite::asset('resources/icons/plus.svg') }}" alt="icons" width="30" height="30">
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
                    <img class="btn-add" src="{{ Vite::asset('resources/icons/plus.svg') }}" alt="icons" width="30" height="30">
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
                                    <img class="check-icon" src="{{ Vite::asset('resources/icons/check.svg') }}" alt="" width="20px" height="20px"></div>

                                <div class="calories-data">
                                    <p>100g</p>
                                    <p>20</p>
                                    <p>30</p>
                                    <p>40</p>
                                </div>
                            </div>
                            <div class="link-min">
                                <div class="header__inner"> <p>Пастила Фруктовая Яблоко (Пастилушка)</p>
                                    <img class="check-icon" src="{{ Vite::asset('resources/icons/check.svg') }}" alt="" width="20px" height="20px"></div>

                                <div class="calories-data">
                                    <p>100g</p>
                                    <p>20</p>
                                    <p>30</p>
                                    <p>40</p>
                                </div>
                            </div>
                            <div class="link-min">
                                <div class="header__inner"> <p>Пастила Фруктовая Яблоко (Пастилушка)</p>
                                    <img class="check-icon" src="{{ Vite::asset('resources/icons/check.svg') }}" alt="" width="20px" height="20px"></div>

                                <div class="calories-data">
                                    <p>100g</p>
                                    <p>20</p>
                                    <p>30</p>
                                    <p>40</p>
                                </div>
                            </div>
                            <div class="link-min">
                                <div class="header__inner"> <p>Пастила Фруктовая Яблоко (Пастилушка)</p>
                                    <img class="check-icon" src="{{ Vite::asset('resources/icons/check.svg') }}" alt="" width="20px" height="20px"></div>

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

@vite(['resources/js/script.js'])
@endsection



