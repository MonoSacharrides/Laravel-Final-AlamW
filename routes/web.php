<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;

Route::get('/', [CourseController::class, 'index']);
Route::get('/courses/{course}', [CourseController::class, 'show']);
Route::post('/courses/{course}/feedback', [FeedbackController::class, 'store']);
