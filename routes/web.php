<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;

Route::resource('users', UserController::class)
    ->only(['index', 'update', 'store', 'destroy', 'create', 'edit'])
    ->middleware(['auth']);

Route::resource('members', MembersController::class)
    ->only(['index', 'update', 'store', 'destroy', 'create', 'edit'])
    ->middleware(['auth']);

/* Route::get('/', function () {
    return Inertia::render('views.welcome', [
        'canLogin' => Route::has('login'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}); */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
