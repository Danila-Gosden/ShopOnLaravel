@extends('layouts.main')

@section('title','Confirm Order')

@section('content')
    <h1>Подтвердите Заказ</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p><b>Сумма Заказа: {{$order->getFullPrice()}}$</b></p>
            <form action="{{ route('cart-finish') }}" method="POST">
                <div>
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Ваше Имя</label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Ваш номер</label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <br>
                    @csrf
                    <input type="submit" class="btn btn-success" value="Отправить">
                </div>
            </form>
        </div>
    </div>
@endsection
