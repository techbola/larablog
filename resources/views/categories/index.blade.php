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
                        {{ $category->name }}
                    </h2>
                    <div class="float-left">
                        <a class="btn btn-primary btn-sm" href="{{ route('categories.edit', $category->id) }}">
                            EDIT
                        </a>
                    </div>
                    <div class="float-left ml-2">
                        <form class="ml-2" action="{{ route('categories.destroy', $category->id) }}" method="post">
                            @csrf
                            {{  method_field('DELETE') }}
                            <button class="btn btn-danger btn-sm" type="submit">DELETE</button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection