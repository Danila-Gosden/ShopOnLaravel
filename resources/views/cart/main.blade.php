@extends('layouts.main')

@section('title','Cart')

@section('content')
    <h1></h1>
    <p></p>
    <div class="panel">
        @if(session()->has('added'))
            <p class="alert alert-success">{{ session()->get('added') }}</p>
        @endif
        @if(session()->has('removed'))
            <p class="alert alert-warning">{{ session()->get('removed') }}</p>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Product</th>
                <th>Product count</th>
                <th>Product price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="<?=Route('product', [$product->category->alias,$product->id])?>">
                            <img height="56px" src="">
                            {{$product->name}}
                        </a>
                    </td>
                    <td><span class="badge"></span>
                        <div class="btn-group form-inline">
                            {{$product->pivot->count}}
                            <form action="<?=Route('cart-remove',[$product->id])?>" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                            <form action="<?=Route('cart-add', [$product->id])?>" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{$product->getPriceForCount()}}$</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">
                    {{$order->getFullPrice()}}$
                </td>

            </tr>
            </tbody>
        </table>
        <br>
        <div>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success"
                   href="<?=Route('cart-confirm')?>">Оформить заказ</a>
            </div>
        </div>
@endsection
