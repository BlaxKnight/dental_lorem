<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
//use App\Models\User;

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

Route::get('/', [App\Http\Controllers\DentalController::class, "index"])->name("index");
Route::get('/index', [App\Http\Controllers\DentalController::class, "index"])->name("index");
Route::get('/login', [App\Http\Controllers\DentalController::class, "articles"])->name("articles");
Route::get('/login', [App\Http\Controllers\DentalController::class, "login"])->name("login");
Route::post('/login', [App\Http\Controllers\DentalController::class, "loginPost"])->name("login.post");
Route::get('/logout', [App\Http\Controllers\DentalController::class, "logout"])->name("logout");
Route::get('/dashboard', [App\Http\Controllers\DentalController::class, "dashboard"])->name("dashboard");
Route::get('/about', [App\Http\Controllers\DentalController::class, "about"])->name("about");