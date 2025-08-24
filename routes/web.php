<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Show form to create post — must come BEFORE /posts/{post}
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Store new post
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Show all posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Show single post
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Store comment
Route::post('/posts/{post}/comments', [PostController::class, 'storeComment'])->name('posts.comments.store');

