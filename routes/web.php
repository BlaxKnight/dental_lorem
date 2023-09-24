<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

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

Route::get('/', [App\Http\Controllers\DentalController::class, "index"]);
Route::get('/index', [App\Http\Controllers\DentalController::class, "index"]);
Route::get('/login', [App\Http\Controllers\DentalController::class, "articles"]);
Route::get('/login', [App\Http\Controllers\DentalController::class, "login"]);
Route::get('/dashboard', [App\Http\Controllers\DentalController::class, "dashboard"]);
Route::get('/about', [App\Http\Controllers\DentalController::class, "about"]);