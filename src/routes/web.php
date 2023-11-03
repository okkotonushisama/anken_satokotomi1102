<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\DateController;

Route::get('/login', [LoginController::class, 'showLoginForm']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/', [StampController::class, 'showClockPage']);

Route::get('/attendance', [DateController::class, 'showAttendancePage']);

Auth::routes();