@extends('admin.posts.layouts.create-or-edit')

@section('page-title')
Create new post
@endsection

@section('form-action')
{{route('admin.posts.store')}}
@endsection

@section('form-method')
@method('POST')
@endsection
