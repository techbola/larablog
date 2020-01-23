@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>{{ $blog->title }}</h1>
                    <div class="float-left">
                        <a class="btn btn-primary btn-sm" href="{{ route('blog.edit', $blog->id) }}">
                            EDIT
                        </a>
                    </div>
                    <form class="float-left ml-2" action="{{ route('blog.delete', $blog->id) }}" method="post">
                        @csrf
                        {{  method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm" type="submit">DELETE</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <h6 class="float-left">Categories</h6>
                    @foreach($blog->categories as $blog_category)
                        <h5 class="float-left ml-2">
                            <span class="badge badge-secondary">
                                <a class="text-decoration-none text-white" href="{{ route('categories.show', $blog_category->slug) }}">
                                    {{ $blog_category->name }}
                                </a>
                            </span>
                        </h5>
                    @endforeach
                <div class="clearfix"></div>
                <hr>
                {{ $blog->body }}
            </div>
        </div>
    </div>
@endsection