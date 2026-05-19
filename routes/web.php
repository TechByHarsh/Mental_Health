<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;


Route::middleware('guest','nocache')->group(function () 
{
    Route::get('/',        fn() => view('welcome'))->name('home');
    Route::get('/about',   fn() => view('about'))->name('about');
    Route::get('/services',fn() => view('services'))->name('services');
    Route::get('/contact', fn() => view('contact'))->name('contact');


    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');






});






















// ── Public pages ──────────────────────────────────


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

Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::middleware('auth','nocache')->group(function ()
{
     Route::get('/assessment/phq9',    [AssessmentController::class, 'show']);
    Route::get('/assessment/gad7', [AssessmentController::class, 'showGAD7']);
    Route::get('/assessment/stress' ,[AssessmentController::class,'showStress']);
    Route::get('/assessment/sleep',[AssessmentController::class,'showSleep']);
    Route::get('/assessment/socialanxiety',[AssessmentController::class,'showSocialAnxiety']);
    Route::get('/assessment/burnout',[AssessmentController::class,'showBurnOut']);
    Route::get('/assessment/panic',[AssessmentController::class,'showPanicDisorder']);
    Route::get("/assessment/emotional",[AssessmentController::class,"showEmotionalWellness"]);
    Route::get("/assessment/selfesteem",[AssessmentController::class,"showSelfEsteem"]);
    Route::get("/assessment/relationship",[AssessmentController::class,"showRealtionshipHealth"]);


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');








});
   



// ── Assessment ────────────────────────────────────


Route::post('/assessment/phq9/submit', [AssessmentController::class, 'submit']);
Route::get('/assessment/history', [AssessmentController::class, 'history']);


Route::post('/assessment/gad7/submit', [AssessmentController::class, 'submitGAD7']);

Route::post('/assessment/stress/submit',[AssessmentController::class, 'submitStress']);

Route::post('assessment/sleep/submit',[AssessmentController::class,"submitsleep"]);

Route::post('assessment/socialanxiety/submit',[AssessmentController::class,"submitSocialAnxiety"]);

Route::post('assessment/burnout/submit',[AssessmentController::class,"submitBurnOut"]);

Route::post('assessment/panic/submit',[AssessmentController::class,"submitPanicDisorder"]);

Route::post('assessment/emotionalwellness/submit',[AssessmentController::class,"submitEmotionalWellness"]);

Route::post("assessment/selfesteem/submit",[AssessmentController::class,"submitSelfEsteem"]);

Route::post("assessment/relationship/submit",[AssessmentController::class,"submitRealtionshipHealth"]);



Route::post('/contact-submit', [ContactController::class, 'submit'])
    ->middleware('auth')
    ->name('contact.submit');





