<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testeController;
use App\Http\Controllers\userController;
use App\Http\Middleware\VerifyInputs;
use App\Http\Middleware\VerifyPassword;
use App\Http\Middleware\VerifyRemember;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [userController::class, 'index'])->middleware([VerifyRemember::class]);;
Route::post('/', [userController::class, 'login'])->middleware([VerifyInputs::class, VerifyPassword::class]);
Route::get('/cadastrar', [userController::class, 'create']);
Route::get('/teste', [testeController::class, 'teste']);
Route::get('/teste/coockie', [testeController::class, 'coockie']);
Route::get('/teste/destroy-cookie', [testeController::class, 'destroyCookie']);
Route::post('/cadastrar', [userController::class, 'store']);

Route::get('/dashboard', [dashboardController::class, 'index']);

