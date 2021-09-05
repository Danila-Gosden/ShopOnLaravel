@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h1>Категории</h1>
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
                    Колличество продуктов
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->alias }}</td>
                    <td>
                        <a href="<?php Route('category', $category->alias);?>">{{ $category->name }}</a>
                    </td>
                    <td>
                        {{ $category->products->count() }}
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href=" {{route('categories.show', $category) }}">Открыть</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('categories.edit', $category) }}">Редактировать</a>
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
           href="  {{ route('categories.create') }}">Добавить категорию</a>
    </div>
@endsection
