<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\DocController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sign-in', [AuthController::class, 'create']);
Route::post('/auth-sign-in', [AuthController::class, 'login'])->middleware('guest');

Route::get('/docs', [DocController::class, 'index']);

Route::get('http://127.0.0.1:8000/api/raja-club/rIl5fXm7LWGQGClH9ukVaG5kqbkdmeHQlzapti1p/player/1', [ClubController::class, 'player']);
