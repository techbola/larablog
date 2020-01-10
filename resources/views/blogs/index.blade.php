@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($blogs as $blog)
                    <h2>{{ $blog->title }}</h2>
                    <p>{{ $blog->body }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection