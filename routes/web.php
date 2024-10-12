<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DepartmentController;


Route::view('/','home')->name('home');

Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('show.feedback');
Route::post('/courses/{course}/feedback', [FeedbackController::class, 'store']);

Route::get('/courses/{course}/feedback', [FeedbackController::class, 'index'])->name('course.feedback');
Route::post('/courses/{course}/feedback', [FeedbackController::class, 'store']);
Route::get('/feedback/{id}/edit', [FeedbackController::class, 'edit'])->name('feedback.edit');
Route::put('/feedback/{id}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

Route::get('/courses/{course}/feedback/back', [FeedbackController::class, 'back'])->name('feedback.back');
