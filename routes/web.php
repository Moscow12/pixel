<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/reg', [RegisterUserController::class], 'create');
Route::post('/register', [RegisterUserController::class], 'store');

Route::get('/login', [SessionController::class], 'create');
Route::post('/login', [SessionController::class], 'store');
Route::delete('/logout', [SessionController::class], 'destroy');