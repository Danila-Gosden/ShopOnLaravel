@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>Редактировать Продук <b>{{ $product->name }}</b></h1>
        @else
            <h1>Добавить Продукт</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                @isset($product)
                    <div class="input-group row">
                        <label class="col-sm-2 col-form-label">Код: {{$product->code}} </label>
                    </div>
                    <br>@endisset
                @isset($product)<br>
                <div class="input-group row">
                    <label class="col-sm-2 col-form-label">ID: {{$product->id}} </label>
                </div>@endisset
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($product){{ $product->name }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Цена $: </label>
                    <div class="col-sm-6">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="price" id="price"
                               value="@isset($product){{ $product->price }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        <select class="form-control" name="category_id" id="name"
                                value="@isset($product){{ $product->category->name }}@endisset">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @isset($product) @if($product->category->name == $category->name) selected @endif @endisset>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="description" id="description" cols="72"
                                  rows="7">@isset($product){{ $product->description }}@endisset</textarea>
                    </div>
                </div>
                <br>
                <img
                    src="@isset($product) @if($product->image_path != '/images/none_image.png'){{ Storage::url($product->image_path) }}@else {{$product->image_path}} @endif @endisset"
                    alt="">
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
