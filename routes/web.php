<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;	

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/students', [StudentController::class, 'index']);



