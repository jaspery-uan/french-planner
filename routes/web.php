<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegister'] {
    return view('show.register');
});

Route::post('/login', [AuthController::class, 'showLogin'] {
    return view('show.login');
});

Route::post('/register', [AuthController::class, 'showRegister'] {
    return view('register');
});

Route::get('/login', [AuthController::class, 'showLogin'] {
    return view('login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teacher', function () {
    return view('teacherlayout');
});

Route::get('/student', function () {
    return view('studentlayout');
});

