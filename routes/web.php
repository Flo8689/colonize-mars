<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MineralController;
use App\Http\Controllers\DangerzoneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [DangerzoneController::class, 'list']);
Route::get('/create', [DangerzoneController::class, 'create']);
Route::post('/create', [DangerzoneController::class, 'create']);
Route::get('/mineral', [MineralController::class, 'list']);
Route::get('/mineral/create', [MineralController::class, 'create']);
Route::post('/mineral/create', [MineralController::class, 'create']);
Route::get('/about', [MainController::class, 'show']);

