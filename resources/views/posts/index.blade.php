@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}">+ Create New Post</a>
    @foreach ($posts as $post)
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
            <p>{{ Str::limit($post->body, 100) }}</p>
            @foreach($post->comments as $comment)
            <small>-{{ $comment->content }} <br></small>
            @endforeach
        </div>
    @endforeach
@endsection
