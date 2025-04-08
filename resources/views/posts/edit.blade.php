@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Post</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="4" required>{{ $post->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Post</button>
            </form>
        </div>
    </div>
</div>
@endsection