<?php

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::resource('/divisions', DivisionController::class);