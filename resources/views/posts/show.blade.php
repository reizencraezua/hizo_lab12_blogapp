@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            <p class="card-text">{{ $post->body }}</p>

            <div class="mt-4 d-flex justify-content-end">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning ms-3">Edit Post</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ms-3">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection