@extends('layouts.app')

@section('content')

<x-flash-message />
<div class="row ">
    <div class="col-sm-12 col-md-12 col-xl-7 mb-3">
        <div class="card rounded-4 p-3">
            <div class="card-body">

                <div class="mb-3">
                    <div class="row mb-2">
                        <div class="col-auto pr-0">
                        <h3 class="h3">Завтрак</h3>
                        </div>
                    </div>
                    @unless($totals[0]['count'] == 0)
                        <div class="accordion" id="breakfastItems">
                            <div class="accordion-item">

                                <h4 class="accordion-header" id="headingBreakfast">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBreakfast" aria-expanded="false" aria-controls="collapseBreakfast">
                                        <strong>Всего: {{$totals[0]['count']}}</strong>
                                    </button>
                                </h4>
                                <div id="collapseBreakfast" class="accordion-collapse collapse" aria-labelledby="headingBreakfast" data-bs-parent="#accordiBreakfastxample">
                                    <div class="accordion-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Название</th>
                                                    <th scope="col">Количество,г</th>
                                                    <th scope="col">Белки</th>
                                                    <th scope="col">Жиры</th>
                                                    <th scope="col">Углеводы</th>
                                                    <th scope="col">Калорийность</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $product)
                                                    @if($product['meal_time'] == 0)
                                                        <tr>
                                                            <td>
                                                                <div class="mb-3">
                                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-productID="{{$product['user_product_id']}}" data-bs-mass_factor="{{$product['mass']}}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <th scope="row">
                                                                {{$product['product_name']}}
                                                                <small class="text-muted">
                                                                    {{$product['manufacturer']}}
                                                                </small>
                                                            </th>
                                                            <td>{{$product['mass']}}</td>
                                                            <td>{{$product['proteins']}}</td>
                                                            <td>{{$product['fats']}}</td>
                                                            <td>{{$product['carbohydrates']}}</td>
                                                            <td>{{$product['calories']}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <td></td>
                                                    <td></td>
                                                    <th scope="row">Всего:</th>
                                                    <td>{{$totals[0]['proteins']}}</td>
                                                    <td>{{$totals[0]['fats']}}</td>
                                                    <td>{{$totals[0]['carbohydrates']}}</td>
                                                    <td>{{$totals[0]['calories']}}</td>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <p>Сегодня вы ничего не ели на завтрак</p>
                    @endunless
                </div>

                <div class="mb-3">
                    <div class="row mb-2">
                        <div class="col-auto pr-0">
                            <h3 class="h3">Обед</h3>
                        </div>
                    </div>
                    @unless($totals[1]['count'] == 0)
                        <div class="accordion" id="LunchItems">
                            <div class="accordion-item">

                                <h4 class="accordion-header" id="headingLunch">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLunch" aria-expanded="false" aria-controls="collapseLunch">
                                        <strong>Всего: {{$totals[1]['count']}}</strong>
                                    </button>
                                </h4>
                                <div id="collapseLunch" class="accordion-collapse collapse" aria-labelledby="headingLunch" data-bs-parent="#accordiLunchxample">
                                    <div class="accordion-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Название</th>
                                                    <th scope="col">Количество,г</th>
                                                    <th scope="col">Белки</th>
                                                    <th scope="col">Жиры</th>
                                                    <th scope="col">Углеводы</th>
                                                    <th scope="col">Калорийность</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $product)
                                                    @if($product['meal_time'] == 1)
                                                        <tr>
                                                            <td>
                                                                <div class="mb-3">
                                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-productID="{{$product['user_product_id']}}" data-bs-mass_factor="{{$product['mass']}}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <th scope="row">
                                                                {{$product['product_name']}}
                                                                <small class="text-muted">
                                                                    {{$product['manufacturer']}}
                                                                </small>
                                                            </th>
                                                            <td>{{$product['mass']}}</td>
                                                            <td>{{$product['proteins']}}</td>
                                                            <td>{{$product['fats']}}</td>
                                                            <td>{{$product['carbohydrates']}}</td>
                                                            <td>{{$product['calories']}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <td></td>
                                                <td></td>
                                                <th scope="row">Всего:</th>
                                                <td>{{$totals[1]['proteins']}}</td>
                                                <td>{{$totals[1]['fats']}}</td>
                                                <td>{{$totals[1]['carbohydrates']}}</td>
                                                <td>{{$totals[1]['calories']}}</td>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <p>Сегодня вы ничего не ели на обед</p>
                    @endunless
                </div>

                <div class="mb-3">
                    <div class="row mb-2">
                        <div class="col-auto pr-0">
                            <h3 class="h3">Ужин</h3>
                        </div>
                    </div>
                    @unless($totals[2]['count'] == 0)
                        <div class="accordion" id="DinnerItems">
                            <div class="accordion-item">

                                <h4 class="accordion-header" id="headingDinner">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDinner" aria-expanded="false" aria-controls="collapseDinner">
                                        <strong>Всего: {{$totals[2]['count']}}</strong>
                                    </button>
                                </h4>
                                <div id="collapseDinner" class="accordion-collapse collapse" aria-labelledby="headingDinner" data-bs-parent="#accordiDinnerxample">
                                    <div class="accordion-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Название</th>
                                                    <th scope="col">Количество,г</th>
                                                    <th scope="col">Белки</th>
                                                    <th scope="col">Жиры</th>
                                                    <th scope="col">Углеводы</th>
                                                    <th scope="col">Калорийность</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $product)
                                                    @if($product['meal_time'] == 2)
                                                        <tr>
                                                            <td>
                                                                <div class="mb-3">
                                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-productID="{{$product['user_product_id']}}" data-bs-mass_factor="{{$product['mass']}}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <th scope="row">
                                                                {{$product['product_name']}}
                                                                <small class="text-muted">
                                                                    {{$product['manufacturer']}}
                                                                </small>
                                                            </th>
                                                            <td>{{$product['mass']}}</td>
                                                            <td>{{$product['proteins']}}</td>
                                                            <td>{{$product['fats']}}</td>
                                                            <td>{{$product['carbohydrates']}}</td>
                                                            <td>{{$product['calories']}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <td></td>
                                                <td></td>
                                                <th scope="row">Всего:</th>
                                                <td>{{$totals[2]['proteins']}}</td>
                                                <td>{{$totals[2]['fats']}}</td>
                                                <td>{{$totals[2]['carbohydrates']}}</td>
                                                <td>{{$totals[2]['calories']}}</td>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <p>Сегодня вы ничего не ели на ужин</p>
                    @endunless
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-xl-5 mb-3">
        <div class="row-cols-1 pb-2">
            <div class="d-flex justify-content-center">
                <div id="progress-circle" value="{{$progress}}"></div>
            </div>
        </div>
        <div class="row-cols-1">
            <div class="d-flex  justify-content-center">
                <h4>Набрано калорий <small class="text-muted">из {{$caloriesSuggested}}</small></h4>

            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Изменить</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/meal" method="post" >
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="product_id" name="product_id">
                    <div class="mb-3">
                        <label for="mass_factor" class="col-form-label">Количество, г:</label>
                        <input type="text" class="form-control" id="mass_factor" name="mass_factor">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </div>
                </form>
                <form action="/meal" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="product_id" name="product_id">
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection



