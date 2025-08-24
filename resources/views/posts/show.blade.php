@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <hr>

    <h3>Comments ({{ $post->comments->count() }})</h3>
    @foreach ($post->comments as $comment)
        <div style="margin-bottom: 10px;">
            <p>{{ $comment->content }}</p>
            <small>Posted on {{ $comment->created_at->format('M d, Y H:i') }}</small>
        </div>
    @endforeach

    <hr>

    <h3>Add a Comment</h3>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('posts.comments.store', $post) }}">
        @csrf
        <textarea name="content" rows="4" cols="50" required></textarea><br>
        @error('content')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <button type="submit">Submit Comment</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">← Back to Posts</a>
@endsection
