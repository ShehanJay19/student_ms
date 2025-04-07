<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;	
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TeacherController;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/students', [StudentController::class, 'index']);

Route::get('/teachers', [TeacherController::class, 'index']);



