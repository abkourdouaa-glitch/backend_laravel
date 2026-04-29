<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenevoleController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ActualiteController;

use App\Http\Controllers\AuthController;



Route::get('/actualites', [ActualiteController::class, 'index']);
Route::get('/actualites/{id}', [ActualiteController::class, 'show']);

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::post('/actualites', [ActualiteController::class, 'store']);
    Route::post('/actualites/{id}', [ActualiteController::class, 'update']);
    Route::put('/actualites/{id}', [ActualiteController::class, 'update']);
    Route::delete('/actualites/{id}', [ActualiteController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/inscription-benevole', [BenevoleController::class, 'store']);
Route::post('/inscription-association', [AssociationController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
