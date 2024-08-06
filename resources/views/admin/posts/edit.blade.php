@extends('admin.posts.layouts.create-or-edit')

@section('page-title')
Editing{{$post->title}}
@endsection

@section('form-action')
{{route('admin.posts.update', $post)}}
@endsection

@section('form-method')
@method('PUT')
@endsection
