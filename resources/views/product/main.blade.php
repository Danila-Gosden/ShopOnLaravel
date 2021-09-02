@extends('layouts.main')
@section('title', $product->name)
@section('content')<div class="container">
    <div class="starter-template">
        <h1>{{$product->name}}</h1>
        <h2>{{$product->category->name}}</h2>
        <p>Price: <b>{{$product->price}} ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>{{$product->description}}</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Add to Cart</button>

            <input type="hidden" name="_token" value="KDFMehm50qu13T2NgtPJLgwqX53AtlrRn2QtxzVV">        </form>
    </div>
</div>
</body>
</html>
@endsection
