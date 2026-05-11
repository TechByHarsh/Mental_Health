<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// ── Public pages ──────────────────────────────────
Route::get('/',        fn() => view('welcome'))->name('home');
Route::get('/about',   fn() => view('about'))->name('about');
Route::get('/services',fn() => view('services'))->name('services');
Route::get('/contact', fn() => view('contact'))->name('contact');

// Contact form submission
Route::post('/contact', function (Request $request) {
    $request->validate([
        'first_name' => 'required|string|max:80',
        'email'      => 'required|email',
        'message'    => 'required|string|min:10',
    ]);
    // TODO: send email / save to DB
    return back()->with('success', 'Thank you! We\'ll get back to you within 24 hours.');
})->name('contact.send');

// ── Authentication ────────────────────────────────
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ── Dashboard ─────────────────────────────────────
Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

// ── Programs ──────────────────────────────────────
Route::get('/programs/{slug}', function (string $slug) {
    return view('programs.show', compact('slug'));
})->name('programs.show');

// ── Assessment ────────────────────────────────────
Route::get('/assessment/phq9',    [AssessmentController::class, 'show']);
Route::post('/assessment/phq9/submit', [AssessmentController::class, 'submit']);
Route::get('/assessment/history', [AssessmentController::class, 'history']);
Route::get('/assessment/gad7', [AssessmentController::class, 'showGAD7']);
Route::post('/assessment/gad7/submit', [AssessmentController::class, 'submitGAD7']);
Route::get('/assessment/stress' ,[AssessmentController::class,'showStress']);
Route::post('/assessment/stress/submit',[AssessmentController::class, 'submitStress']);
Route::get('/assessment/sleep',[AssessmentController::class,'showSleep']);
Route::post('assessment/sleep/submit',[AssessmentController::class,"submitsleep"]);
Route::get('/assessment/socialanxiety',[AssessmentController::class,'showSocialAnxiety']);
Route::post('assessment/socialanxiety/submit',[AssessmentController::class,"submitSocialAnxiety"]);
Route::get('/assessment/burnout',[AssessmentController::class,'showBurnOut']);
Route::post('assessment/burnout/submit',[AssessmentController::class,"submitBurnOut"]);
Route::get('/assessment/panic',[AssessmentController::class,'showPanicDisorder']);
Route::post('assessment/panic/submit',[AssessmentController::class,"submitPanicDisorder"]);


// ── Upcoming Assessments (Calibrating Algorithms) ─────────────────




Route::get('/assessment/emotional', function() {
    return view('assessment.coming_soon', [
        'testName' => 'Emotional Wellness Test',
        'testIcon' => 'emotional',
        'testDesc' => 'Check your overall emotional resilience, self-awareness, and emotional balance.'
    ]);
});

Route::get('/assessment/selfesteem', function() {
    return view('assessment.coming_soon', [
        'testName' => 'Self-Esteem Test',
        'testIcon' => 'selfesteem',
        'testDesc' => 'Explore your self-image, self-worth, and level of confidence in your personal abilities.'
    ]);
});

Route::get('/assessment/relationship', function() {
    return view('assessment.coming_soon', [
        'testName' => 'Relationship Health Test',
        'testIcon' => 'relationship',
        'testDesc' => 'Evaluate communication patterns, trust, boundaries, and overall connection with your partner.'
    ]);
});


