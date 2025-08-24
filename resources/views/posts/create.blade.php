@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title') }}" required><br><br>

        <label>Body:</label><br>
        <textarea name="body" rows="5" cols="50" required>{{ old('body') }}</textarea><br><br>

        <button type="submit">Create Post</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">← Back to Posts</a>
@endsection
