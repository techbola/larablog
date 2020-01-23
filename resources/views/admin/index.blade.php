@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Admin Dashboard</h1>
                </div>
            </div>
            <div class="col-md-12">
                <a class="btn btn-success btn-margin-right" href="{{ route('categories.create') }}">Create Category</a>
                <a class="btn btn-primary btn-margin-right" href="{{ route('blog.create') }}">Create Blog</a>
                <a class="btn btn-danger btn-margin-right" href="{{ route('blog.trash') }}">Trashed Blog</a>
            </div>
        </div>
    </div>
@endsection