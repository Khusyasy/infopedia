<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserNewsController;

Route::get('/', [UserNewsController::class, 'index'])->name('home');

Route::get('/bookmarks', function () {
    // You can replace this with the actual controller method or view for the bookmarks page
    return Inertia::render('Bookmarks');
})->middleware(['auth'])->name('bookmarks');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified', IsAdmin::class])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'verified', IsAdmin::class])->group(function () {
    Route::resource('news', NewsController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/{slug}', [UserNewsController::class, 'show'])->name('unews');
Route::post('/{slug}/bookmark', [UserNewsController::class, 'show'])->name('unews.bookmark');
