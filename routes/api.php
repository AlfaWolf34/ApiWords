<?php

use App\Http\Controllers\PlayController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
    Route::apiResource('themes', \App\Http\Controllers\ThemeController::class);
    Route::apiResource('words', \App\Http\Controllers\WordController::class);
    Route::apiResource('play', \App\Http\Controllers\PlayController::class);
    Route::apiResource('definitions', \App\Http\Controllers\DefinitionController::class);
    Route::get('/quiz', [PlayController::class, 'getQuiz']);
    Route::get('/play/quiz', [PlayController::class, 'getQuiz']);


    
    

});