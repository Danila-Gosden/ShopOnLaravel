@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h1>Редактировать Пользователя <b>{{ $user->name }}</b></h1>

        <form method="POST" enctype="multipart/form-data"
              action="{{ route('users.update', $user) }}"

        >
            <div>
                @method('PUT')

                @csrf

                <br>
                <div class="input-group row">
                    <label class="col-sm-2 col-form-label">ID: {{$user->id}} </label>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Имя: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" id="name"
                               value="{{ $user->name }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="user_role" class="col-sm-2 col-form-label">Роль: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select class="form-control" name="user_role" id="user_role">
                            @foreach($roles as $role)
                                <option value="{{$role}}"
                                        @if($role == $user->user_role) selected @endif>
                                    {{$role}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="email" id="email"
                               value="{{ $user->email }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="phone" id="phone"
                               value="{{ $user->phone }}">
                    </div>
                </div>
                <br>

                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
