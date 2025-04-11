<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;	
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/students', [StudentController::class, 'index']);

Route::get('/teachers', [TeacherController::class, 'index']);

Route::get('/courses', [CourseController::class, 'index']);

Route::get('/students/{id}', [StudentController::class, 'show']);

