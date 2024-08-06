@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>{{ $post->id }}</h2>
            <h2>{{ $post->title }}</h2>
            <h2>{{ $post->category->name }}</h2>
            <h3>{{ $post->author }}</h3>
            <img src="{{$post->image}}" alt="">
            <h4>{{ $post->date }}</h4>
            <p>
                {{ $post->content }}
            </p>
        </div>
    </div>
</div>
@endsection
