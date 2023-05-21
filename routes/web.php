<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;

Route::resource('users', UserController::class)
    ->only(['index', 'update', 'store', 'destroy', 'create', 'edit'])
    ->middleware(['auth', 'admin']);

Route::resource('members', MembersController::class)
    ->only(['index', 'update', 'store', 'destroy', 'create', 'edit'])
    ->middleware(['auth', 'admin']);
Route::get('members/export', [MembersController::class, 'export'])->name('members.export');

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
    $user = auth()->user();
    return Inertia::render('Dashboard', [
        'user' => [
            'role' => $user->getRoleNames()->first()
        ],
        'registered_users' => User::whereHas('roles', function ($q) {
            $q->where('name', '!=', 'admin');
        })->get(),
        'registered_users_last_week' => User::whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()])
            ->whereHas('roles', function ($q) {
                $q->where('name', '!=', 'admin');
            })
            ->get()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/search', [UserController::class, 'search'])->name('user.search');

});

require __DIR__ . '/auth.php';
