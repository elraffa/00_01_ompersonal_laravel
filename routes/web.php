<?php

use App\Models\User;
use App\Models\Message;
use Inertia\Inertia;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ExamController;



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
    $message = Message::find(1); // Replace '1' with the appropriate message ID
    return view('welcome', ['message' => $message]);

});

Route::get('/dashboard', function () {
    $user = auth()->user();
    $exams = App\Models\Exam::all(); // Add this line

    return Inertia::render('Dashboard', [
        'user' => [
            'role' => $user->getRoleNames()->first()
        ],
        'exams' => $exams, // Add this line
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

    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/create', [MessageController::class, 'create']);
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
    Route::put('/messages/{id}', [MessageController::class, 'update'])->name('messages.update');


    // Add routes for update() and delete() if needed
    Route::get('/create_exam', [ExamController::class, 'createExam']);
    Route::get('/exam/{id}', [ExamController::class, 'showExam']);

});

/** ORIGINAL WEBSITE ROUTES */

Route::get('/original', function () {
    return file_get_contents(__DIR__ . '/../resources/pages/index.htm');
});

Route::get('/omkids', function () {
    return file_get_contents(__DIR__ . '/../resources/pages/omkids/index.htm');
});


require __DIR__ . '/auth.php';
