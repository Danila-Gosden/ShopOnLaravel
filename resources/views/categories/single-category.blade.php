@extends('layouts.main')
@section('title', $category->name)
@section('content')
    <div class="container">
        <div class="starter-template">
            <h1>
                {{$category->name}}({{$category->products->count()}})
            </h1>
            <p>
                {{$category->description}}
            </p>
            <div class="row">
                @foreach($category->products as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="labels">
                        </div>
                        <img src="@if($product->image_path != '/images/none_image.png'){{ Storage::url($product->image_path) }}@else {{$product->image_path}} @endif" alt="{{$product->name}}">
                        <div class="caption">
                            <h3>{{$product->name}}</h3>
                            <p>{{$product->price}} ₽</p>
                            <p>
                            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                                <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                                <a href="<?=Route('product', ['product_id' => $product->id, 'category_alias' => $product->category->alias])?>"
                                   class="btn btn-default"
                                   role="button">More about</a>
                                <input type="hidden" name="_token" value="KDFMehm50qu13T2NgtPJLgwqX53AtlrRn2QtxzVV">            </form>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>

@endsection
