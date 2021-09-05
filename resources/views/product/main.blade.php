@extends('layouts.main')
@section('title', $product->name)
@section('content')<div class="container">
    <div class="starter-template">
        <h1>{{$product->name}}</h1>
        <h2>{{$product->category->name}}</h2>
        <p>Price: <b>{{$product->price}} ₽</b></p>
        <img src="@if($product->image_path != '/images/none_image.png'){{ Storage::url($product->image_path) }}@else {{$product->image_path}} @endif">
        <p>{{$product->description}}</p>

        <form action="<?=Route('cart-add', [$product->id])?>" method="POST">
            <button type="submit" class="btn btn-success" role="button">Add to Cart</button>
@csrf
        </form>
    </div>
</div>
</body>
</html>
@endsection
