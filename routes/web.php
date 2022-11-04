<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SDController;
use App\Http\Controllers\YayasanController;
use App\Http\Controllers\MuamalahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sd', [SDController::class, 'index']);
Route::get('/yy', [YayasanController::class, 'index']);
Route::get('/mm', [MuamalahController::class, 'index']);
