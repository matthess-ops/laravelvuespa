<?php

use App\Http\Controllers\API\FileController;
use Illuminate\Support\Facades\Route;



Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');
