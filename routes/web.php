<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SDController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sd', [SDController::class, 'index']);
