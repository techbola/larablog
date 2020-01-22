@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Edit <strong>{{ $blog->title }}</strong></h1>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('blog.update', $blog->id) }}" method="post">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{ $blog->title }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" class="form-control">{{ $blog->body }}</textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection