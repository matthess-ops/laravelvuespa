<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\FileController;


use Illuminate\Support\Facades\Route;

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::group(['prefix' => 'books', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [BookController::class, 'index']);
    Route::post('add', [BookController::class, 'add']);
    Route::get('edit/{id}', [BookController::class, 'edit']);
    Route::post('update/{id}', [BookController::class, 'update']);
    Route::delete('delete/{id}', [BookController::class, 'delete']);
});

// Route::group(['prefix' => 'locations', 'middleware' => 'auth:sanctum'], function () {
//     Route::get('/', [LocationController::class, 'index']);

// });

Route::get('/locations', [LocationController::class, 'index'])->middleware('auth:sanctum');

Route::post('/fileupload', [FileController::class, 'upload']);



