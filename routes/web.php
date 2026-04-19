<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Guest routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login',    [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login',   [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register',[AuthController::class, 'register']);
});

/*
|--------------------------------------------------------------------------
| Authenticated routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/assessment',          [AssessmentController::class, 'index'])->name('assessment.index');
    Route::post('/assessment',         [AssessmentController::class, 'store'])->name('assessment.store');
    Route::get('/assessment/history',  [AssessmentController::class, 'history'])->name('assessment.history');
    Route::get('/assessment/{id}/result', [AssessmentController::class, 'result'])->name('assessment.result');
});
