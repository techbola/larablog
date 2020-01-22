@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Trashed Blog</h1>
                </div>
                @foreach($trashedBlogs as $blog)
                    <h2 class="post_title font-weight-bold">
                        {{ $blog->title }}
                    </h2>
                    <p>{{ $blog->body }}</p>

                    <form class="float-left" action="{{ route('blog.restore', $blog->id) }}" method="get">
                        @csrf
                        <button class="btn btn-success btn-sm" type="submit">Restore</button>
                    </form>

                    <form class="float-left ml-2" action="{{ route('blog.permanent-delete', $blog->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm" type="submit">Permanent Delete</button>
                    </form>
                    <div class="clearfix"></div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection