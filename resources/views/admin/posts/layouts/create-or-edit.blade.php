@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="@yield('form-action')" method="POST">
                @yield('form-method')
                @csrf
                <div class="mb-3">
                    <h1>
                        @yield('page-title')
                    </h1>
                </div>
                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title ?? '') }}">
                </div>
                <div class="mb-3">
                    <label for="image">Image Url</label>
                    <input type="text" name="image" id="image" class="form-control" value="{{ old('image', $post->image ?? '') }}">
                </div>
                <div class="mb-3">
                    <label for="content">Post Content:</label>
                    <textarea name="content" id="content" cols="150" rows="5" class="form-control">{{ old('content', $post->content ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $post->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="technologies">Technologies</label>
                    <select name="technologies[]" id="technologies" class="form-control" multiple>
                        @foreach($technologies as $technology)
                            <option value="{{ $technology->id }}"
                                @if(isset($post) && $post->technologies->contains($technology->id)) selected
                                @elseif(is_array(old('technologies')) && in_array($technology->id, old('technologies'))) selected
                                @endif>
                                {{ $technology->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <input type="submit" value="@yield('page-title')" class="btn btn-primary btn-lg">
                <input type="reset" value="Reset fields" class="btn btn-secondary btn-lg">
            </form>
        </div>
    </div>
</div>
@endsection

