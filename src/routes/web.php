<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeightController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register/step1', [UserController::class, '']);
Route::get('/register/step2', [UserController::class, '']);
Route::get('/login', [UserController::class, '']);
Route::get('/logout', [UserController::class, '']);
Route::get('/weight_logs', [WeightController::class, 'index']);
Route::get('/weight_logs/create', [WeightController::class, '']);
Route::get('/weight_logs/search', [WeightController::class, '']);
Route::get('/weight_logs/{:weightLogId}', [WeightController::class, '']);
Route::get('/weight_logs/{:weightLogId}/update', [WeightController::class, '']);
Route::get('/weight_logs/{:weightLogId}/delete', [WeightController::class, '']);
Route::get('/weight_logs/goal_setting', [WeightController::class, '']);