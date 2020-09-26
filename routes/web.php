<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\RoutesController::class, 'index'])->name('index');

Route::get('post-blog', [\App\Http\Controllers\RoutesController::class, 'postBlog'])->name('post.blog');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
