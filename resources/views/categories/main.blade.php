@extends('layouts.main')
@section('title', 'Categories')
@section('content')

<div class="container">
    <div class="starter-template">
        @foreach($categories as $category)
        <div class="panel">
            <a href="<?=Route('category', $category->alias)?>">
                <img src="{{ Storage::url($category->image_path) }}">
                <h2>{{$category->name}}</h2>
            </a>
            <p>
                {{$category->description}}
            </p>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
@endsection
