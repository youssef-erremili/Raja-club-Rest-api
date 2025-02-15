<?php

use App\Http\Controllers\ApiKeyController;
use App\Http\Controllers\ClubController;
use App\Http\Middleware\ValidateApiKey;
use Illuminate\Support\Facades\Route;


// Route::get('/generate-api-key', [ApiKeyController::class, 'GenerateApiKey']);

Route::middleware(ValidateApiKey::class)->prefix('/raja-club/{apikey}')->group(function () {
    Route::get('/club-information', [ClubController::class, 'index']);
    Route::get('/players', [ClubController::class, 'players']);
    Route::get('/player/{id}', [ClubController::class, 'player']);
    Route::get('/championships', [ClubController::class, 'championships']);
    Route::get('/championship/{id}', [ClubController::class, 'championship']);
});
