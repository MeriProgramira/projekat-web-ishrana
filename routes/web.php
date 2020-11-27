<?php

use App\Http\Controllers\Auth\RegistarController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//logout
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


//Register
Route::get('/register', [RegistarController::class, 'index'])->name('register');
Route::post('/register', [RegistarController::class, 'store']);

Route::get('/', function () {
    return view('pages.index');
})->name('home');
