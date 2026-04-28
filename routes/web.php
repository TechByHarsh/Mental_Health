<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;


Route::get("/assessment/phq9",[AssessmentController::class, 'show']);
Route::post("/assessment/phq9/submit",[AssessmentController::class , 'submit']);



