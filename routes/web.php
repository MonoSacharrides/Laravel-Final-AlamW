<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DepartmentController;


Route::view('/','home')->name('home');

Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('show');
Route::post('/courses/{course}/feedback', [FeedbackController::class, 'store']);
