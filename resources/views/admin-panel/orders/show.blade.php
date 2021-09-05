@extends('layouts.app')

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ №{{ $order->id }}</h1>
                    <p>Заказчик: <b>{{ $order->customer_name }}, {{$order->user_id}}</b></p>
                    <p>Номер телефона: <b>{{ $order->customer_phone }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Стоимость</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($order->products as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('product', [$product->category->alias, $product->id]) }}">
                                        <img height="56px"
                                             src="">
                                        {{$product->name}}
                                    </a>
                                </td>
                                <td><span class="badge"> {{ $product->pivot->count }}</span></td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->getPriceForCount()}}$</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>{{ $order->getFullPrice() }}$</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
