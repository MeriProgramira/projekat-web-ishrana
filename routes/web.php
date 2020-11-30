<?php

use App\Http\Controllers\Auth\RegistarController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


//Register
Route::get('/register', [RegistarController::class, 'index'])->name('register');
Route::post('/register', [RegistarController::class, 'store']);

//Post
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/create-post', [PostController::class, 'create'])->name('create-post');
Route::post('/create-post', [PostController::class, 'store']);

Route::get('/blog', [PostController::class, 'indexBlog'])->name('blog');

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/drinks', function () {
    return view('pages.drinks');
})->name('drinks');


Route::get('/vegetable', function () {
    return view('pages.vegetable');
})->name('vegetable');

Route::get('/fruits', function () {
    return view('pages.fruits');
})->name('fruits');

Route::get('/vitamins', function () {
    return view('pages.vitamins');
})->name('vitamins');

Route::get('humus', function () {
    return view('pages.humus');
})->name('humus');

Route::get('persun', function () {
    return view('pages.persun');
})->name('persun');

Route::get('grasak', function () {
    return view('pages.grasak');
})->name('grasak');

Route::get('salata', function () {
    return view('pages.salata');
})->name('salata');

Route::get('tikva', function () {
    return view('pages.tikva');
})->name('tikva');

Route::get('brokula', function () {
    return view('pages.brokula');
})->name('brokula');

Route::get('obrok', function () {
    return view('pages.obrok');
})->name('obrok');

Route::get('sladoled', function () {
    return view('pages.sladoled');
})->name('sladoled');

Route::get('zeleno', function () {
    return view('pages.zeleno');
})->name('zeleno');

Route::get('omiljeni',function(){
    return view('omiljeni_recepti.omiljeni');
})->name('omiljeni');