<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenevoleController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ActualiteController;

use App\Http\Controllers\AuthController;




Route::post('/login', [AuthController::class, 'login']);
//  Sanctum
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/actualites', function() {
        return "Actualité enregistrée !";
    });
});








Route::get('/actualites', [ActualiteController::class, 'index']);
Route::post('/actualites', [ActualiteController::class, 'store']);
Route::get('/actualites/{id}', [ActualiteController::class, 'show']);
Route::post('/actualites/{id}', [ActualiteController::class, 'update']);
Route::put('/actualites/{id}', [ActualiteController::class, 'update']);

Route::delete('/actualites/{id}', [ActualiteController::class, 'destroy']);


Route::post('/inscription-benevole', [BenevoleController::class, 'store']);
Route::post('/inscription-association', [AssociationController::class, 'store']);
