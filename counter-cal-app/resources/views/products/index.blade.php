@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="container">
            <form class="d-flex" action="/products">
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
            <div class="row my-5" name="products_index">
                @unless(count($products) == 0)

                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6 p-3">
                            <div class="card rounded-3 p-1">
                                <div class="card-body">
                                    <div class="product_title">
                                        <p class="h2">{{$product->product_name}}</p>
                                        <p class="h5 text-muted">{{$product->manufacturer}}</p>
                                    </div>
                                    <div class="border rounded-1 bg p-1 mt-4 bg-cc-lighter">
                                        <div class="row">
                                            <p class="h4"><strong>Каллории:</strong><span class="h4 m-2"><strong>{{$product->calorie}}</strong></span></p>
                                            <p class="h6">Белки:<span class="h6 m-2">{{$product->protein}}</span></p>
                                            <p class="h6">Жиры:<span class="h6 m-2">{{$product->fat}}</span></p>
                                            <p class="h6">Углеводы:<span class="h6 m-2">{{$product->carbohydrates}}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No products found</p>
                @endunless

                </div>
            </div>
        </div>

    </div>

@endsection
