@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ $post->date }}</td>
                            <td>
                                <a href="{{ route('admin.posts.show', $post)}}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('admin.posts.edit', $post)}}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('admin.posts.destroy', $post)}}" method="POST" class="d-inline-block">
                                    @method('delete')
                                    @csrf

                                    <input type="submit" class="btn btn-warning btn-sm" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
