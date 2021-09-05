@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h1>Заказы</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Телефон
                </th>
                <th>
                    Когда отправлен
                </th>
                <th>
                    Сумма
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id}}</td>
                    <td>{{ $order->customer_name }}, {{$order->user_id}}</td>
                    <td>{{ $order->customer_phone }}</td>
                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                    <td>{{ $order->getFullPrice() }} $</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button"
                               href="{{ route('admin-panel.order.show', $order) }}" >Открыть</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
