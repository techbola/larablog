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
                {{ $blog->body }}
            </div>
        </div>
    </div>
@endsection