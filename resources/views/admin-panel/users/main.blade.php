@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h1>Пользователи</h1>
        <div class="listProductsContainer">
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
                    Email
                </th>
                <th>
                    Номер Телефона
                </th>
                <th>
                    Роль
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                       {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->phone }}
                    </td>
                    <td>
                        {{ $user->user_role }}</a>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                                <a class="btn btn-success" type="button" href=" {{route('users.show', $user) }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('users.edit', $user) }}">Редактировать</a>
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
    </div>
@endsection
