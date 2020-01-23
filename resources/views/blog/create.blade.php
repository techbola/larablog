@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Create a new blog</h1>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('blog.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" placeholder="Blog title" class="form-control">
                    </div>
                    <div class="form-group form-check form-check-inline">

{{--                        <select multiple name="category_id[]" id="category" class="form-control">--}}
{{--                            @foreach($categories as $category)--}}
{{--                                <option value="">{{ $category->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}

                        @foreach($categories as $category)
                            <div class="ml-2">
                                <input type="checkbox" name="category_id[]" value="{{ $category->id }}" class="form-check-input">
                                <label for="form-check-label">{{ $category->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection