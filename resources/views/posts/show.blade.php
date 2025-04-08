@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            <p class="card-text">{{ $post->body }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3">Back to Posts</a>
        </div>
    </div>
</div>
@endsection