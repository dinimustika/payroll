<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::resource('/divisions', DivisionController::class);
Route::resource('/employees', EmployeeController::class);
Route::resource('/users', UserController::class);
Route::resource('/payrolls', PayrollController::class);
Route::resource('/attendances', AttendanceController::class);
Route::get('/getDynamicValue', [PayrollController::class, 'getDynamicValue']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/login', [HomeController::class, 'login']);