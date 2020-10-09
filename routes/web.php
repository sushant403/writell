<?php

use Illuminate\Support\Facades\Route;

Route::get('/coming-soon', function () {
    return view('soon');
});

Route::get('/leaderboard', function () {
    return redirect('coming-soon');
});

Route::get('/', [\App\Http\Controllers\RoutesController::class, 'index'])->name('index');

Route::get('post-blog', [\App\Http\Controllers\RoutesController::class, 'postBlog'])->name('post.blog');


//Laravel Fortify Auth

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
