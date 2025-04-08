@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Create a New Post</h2>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter the post title" required>
                </div>
                <div class="form-group mb-3">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="5" placeholder="Write the content here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-success w-100">Save Post</button>
            </form>
        </div>
    </div>
</div>
@endsection