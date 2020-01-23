@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Categories</h1>
                    <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm">Create Category</a>
                </div>
            </div>
            <div class="col-md-12">
                @foreach($categories as $category)
                    <h2 class="post_title">
                        <a class="text-decoration-none" href="{{ route('categories.show', $category->id) }}">
                            {{ $category->name }}
                        </a>
                    </h2>
                @endforeach
            </div>
        </div>
    </div>
@endsection