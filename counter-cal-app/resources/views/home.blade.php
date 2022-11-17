@extends('layouts.app')

@section('content')


<div class="row ">
    <div class="col-sm-12 col-md-12 col-xl-7 mb-3">
        <div class="card rounded-4 p-3">
            <div class="card-body">

                <div class="mb-3">
                    <div class="row mb-2">
                        <div class="col-auto pr-0">
                            <button type="button" class="btn btn-primary btn-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="col-auto pl-0">
                            <h3 class="h3">Завтрак</h3>
                        </div>
                    </div>
                    {{-- If products in database--}}
                    <div class="accordion" id="breakfastItems">
                        <div class="accordion-item">

                            <h4 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <strong>2 записи</strong>
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Название</th>
                                                <th scope="col">Белки</th>
                                                <th scope="col">Жиры</th>
                                                <th scope="col">Углеводы</th>
                                                <th scope="col">Калорийность</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{-- foreach product in db --}}

                                            <tr>
                                                <th scope="row">
                                                    Молоко
                                                    <small class="text-muted">
                                                        Производитель
                                                    </small>
                                                </th>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>

                                            {{-- end foreach --}}
                                            </tbody>
                                            <tfoot>
                                                <th scope="row">Всего:</th>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--endif--}}
                </div>

                <div class="mb-3">
                    <div class="row mb-2">
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary btn-circle btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="col-auto">
                            <h3 class>Обед</h3>
                        </div>
                    </div>
                    {{-- If products in database--}}
                    <div class="accordion" id="lunchItems">
                        <div class="accordion-item">

                            <h4 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>2 записи</strong>
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Название</th>
                                                <th scope="col">Белки</th>
                                                <th scope="col">Жиры</th>
                                                <th scope="col">Углеводы</th>
                                                <th scope="col">Калорийность</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{-- foreach product in db --}}

                                            <tr>
                                                <th scope="row">
                                                    Молоко
                                                    <small class="text-muted">
                                                        Производитель
                                                    </small>
                                                </th>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>

                                            {{-- end foreach --}}
                                            </tbody>
                                            <tfoot>
                                            <th scope="row">Всего:</th>
                                            <td>12</td>
                                            <td>12</td>
                                            <td>12</td>
                                            <td>12</td>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--endif--}}
                </div>

                <div class="mb-3">
                    <div class="row mb-2">
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary btn-circle btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="col-auto">
                            <h3 class>Ужин</h3>
                        </div>
                    </div>
                    {{-- If products in database--}}
                    <div class="accordion" id="dinnerItems">
                        <div class="accordion-item">

                            <h4 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <strong>2 записи</strong>
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Название</th>
                                                <th scope="col">Белки</th>
                                                <th scope="col">Жиры</th>
                                                <th scope="col">Углеводы</th>
                                                <th scope="col">Калорийность</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{-- foreach product in db --}}

                                            <tr>
                                                <th scope="row">
                                                    Молоко
                                                    <small class="text-muted">
                                                        Производитель
                                                    </small>
                                                </th>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>

                                            {{-- end foreach --}}
                                            </tbody>
                                                <tfoot>
                                                <th scope="row">Всего:</th>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--endif--}}
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-xl-5 mb-3">
        <div class="row-cols-1 pb-2">
            <div class="d-flex justify-content-center">
                <div id="progress-circle" value="23"></div>
            </div>
        </div>
        <div class="row-cols-1">
            <div class="d-flex  justify-content-center">
                <h4>Набрано калорий <small class="text-muted">из 1200</small></h4>

            </div>
        </div>

    </div>
</div>





@endsection



