<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use App\Http\Controllers\Auth\LoginRegisterController;
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
Route::get('/articles', [App\Http\Controllers\DentalController::class, "articles"])->name("articles");
Route::controller(LoginRegisterController::class)->group(function() {
  //Route::get('/register', 'register')->name('register');
  Route::post('/store', 'store')->name('store');
  Route::get('/login', 'login')->name('login');
  Route::post('/authenticate', 'authenticate')->name('authenticate');
  Route::get('/dashboard', 'dashboard')->name('dashboard');
  Route::post('/logout', 'logout')->name('logout');
});
Route::get('/about', [App\Http\Controllers\DentalController::class, "about"])->name("about");
