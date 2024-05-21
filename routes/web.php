<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users',[UserController::class, 'store'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');

Route::get('/boards', [BoardController::class, 'index']);

Route::get('/boards/create', [BoardController::class, 'create']);

Route::post('/boards', [BoardController::class, 'store']);

Route::get('/boards/{id}/edit', [BoardController::class, 'edit']);

Route::put('/boards/{id}', [BoardController::class, 'update']);

Route::delete('/boards/{id}', [BoardController::class, 'destroy']);
