@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Edit <strong>{{ $category->name }}</strong></h1>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection