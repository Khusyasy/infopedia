<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\BookmarkController;
use App\Http\Controllers\Api\CommentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register'])->name('api.register');
Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::delete('/logout', [AuthController::class, 'destroy'])->name('api.logout')
    ->middleware('auth:sanctum');

Route::get('/news', [NewsController::class, 'index'])->name('api.news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('api.news.show');

Route::get('/search', [SearchController::class, 'index'])->name('api.search');

Route::get('/bookmark', [BookmarkController::class, 'index'])->name('api.bookmark.show')
    ->middleware('auth:sanctum');
Route::post('/news/{slug}/bookmark', [BookmarkController::class, 'store'])->name('api.bookmark')
    ->middleware('auth:sanctum');
Route::delete('/news/{slug}/bookmark', [BookmarkController::class, 'destroy'])->name('api.bookmark.destroy')
    ->middleware('auth:sanctum');

Route::post('/comments', [CommentController::class, 'store'])->name('api.comments.store')
    ->middleware('auth:sanctum');
