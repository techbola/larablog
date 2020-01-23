@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>{{ $category->name }}</h1>
                </div>
            </div>
            <div class="col-md-12">
                @foreach($category->blogs as $blog)
                    <h2 class="post_title">
                        <a class="text-decoration-none" href="{{ route('blog.show', $blog->id) }}">
                            {{ $blog->title }}
                        </a>
                    </h2>
                    <p>{{ $blog->body }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection