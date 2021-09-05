@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h1>Продукты</h1>
        <div class="listProductsContainer">
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Название
                </th>
                <th>
                    Категория
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->code }}</td>
                    <td>
                        <a href="<?php Route('category', [$product->category->alias, $product->id]);?>">{{ $product->name }}
                    </td>
                    <td>
                        <a href="<?php Route('category', $product->category->alias);?>">{{ $product->category->name }}</a>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                <a class="btn btn-success" type="button" href=" {{route('products.show', $product) }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('products.edit', $product) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <a class="btn btn-success" type="button"
           href="  {{ route('products.create') }}">Добавить категорию</a>
    </div>
@endsection
