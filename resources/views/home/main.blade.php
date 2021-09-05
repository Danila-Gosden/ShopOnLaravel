@extends('layouts.main')
@section('title', 'Home')
@section('content')

    <div class="container">
        <div class="starter-template">
            <h1>Все товары</h1>
            <form method="GET" action="<?=Route('home')?>">
                <div class="filters row">
                    <div class="col-sm-6 col-md-3">
                        <label for="price_from">Цена от <input type="text" name="price_from" id="price_from" size="6"
                                                               value="">
                        </label>
                        <label for="price_to">до <input type="text" name="price_to" id="price_to" size="6" value="">
                        </label>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <label for="hit">
                            <input type="checkbox" name="hit" id="hit"> Хит </label>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <label for="new">
                            <input type="checkbox" name="new" id="new"> Новинка </label>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <label for="recommend">
                            <input type="checkbox" name="recommend" id="recommend"> Рекомендуем </label>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <button type="submit" class="btn btn-primary">Фильтр</button>
                        <a href="<?=Route('home')?>" class="btn btn-warning">Сброс</a>
                    </div>
                </div>
            </form>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="labels">
                            </div>
                            <img src="@if($product->image_path != '/images/none_image.png'){{ Storage::url($product->image_path) }}@else {{$product->image_path}} @endif" alt="{{$product->name}}">
                            <div class="caption">
                                <h3>{{$product->name}}</h3>
                                <p>{{$product->price}} ₽</p>
                                <p>
                                <form action="<?=Route('cart-add', [$product->id])?>" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                    <a href="<?=Route('product', ['product_id' => $product->id, 'category_alias' => $product->category->alias])?>"
                                       class="btn btn-default"
                                       role="button">Подробнее</a>
                                    @csrf
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <nav>
                <ul class="pagination">

                    <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>


                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>


                    <li class="page-item">
                        <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
    </body>
    </html>
@endsection
