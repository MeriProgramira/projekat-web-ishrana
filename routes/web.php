<?php

use App\Http\Controllers\Auth\RegistarController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\ReceptController;
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
Route::delete('/delete-post/{post}', [PostController::class, 'destroy'])->name('delete-post');
Route::get('/update-post/{post}', [PostController::class, 'edit'])->name('update-post')->middleware('auth');
Route::put('/update-post/{post}', [PostController::class, 'updatePost'])->name('update-post');

Route::get('/blog', [PostController::class, 'indexBlog'])->name('blog');

//Producers
Route::get('/producers', [ProducerController::class, 'index'])->name('producers');
Route::get('/create-producer', [ProducerController::class, 'create'])->name('create-producer')->middleware('auth');
Route::post('/create-producer', [ProducerController::class, 'store'])->middleware('auth');
Route::delete('/delete-producer/{producer}', [ProducerController::class, 'destroy'])->name('delete-producer');
Route::get('/update-producer/{producer}', [ProducerController::class, 'edit'])->name('update-producer')->middleware('auth');
Route::put('/update-producer/{producer}', [ProducerController::class, 'updateProducer'])->name('update-producer')->middleware('auth');

Route::get('/proizvodjaci', [ProducerController::class, 'indexProducer'])->name('proizvodjaci');

//Recepti
Route::get('/svi-recepti', [ReceptController::class, 'index'])->name('svi-recepti');
Route::get('/create-recept', [ReceptController::class, 'create'])->name('create-recept')->middleware('auth');
Route::post('/create-recept', [ReceptController::class, 'store'])->middleware('auth');
Route::delete('/delete-recept/{recept}', [ReceptController::class, 'destroy'])->name('delete-recept');
Route::get('/update-recept/{recept}', [ReceptController::class, 'edit'])->name('update-recept')->middleware('auth');
Route::put('/update-recept/{recept}', [ReceptController::class, 'updateRecept'])->name('update-recept')->middleware('auth');

Route::get('/recepti', [ReceptController::class, 'indexRecepti'])->name('recepti');
Route::get('/recepti/{recept}', [ReceptController::class, 'show'])->name('recept');


//Route::get('/blog', [PostController::class, 'indexBlog'])->name('blog');

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/trendovi-hrana', function () {
    return view('pages.food_trends');
})->name('trendovi-hrana');

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

Route::get('namirnice', function(){
    return view('namirnice');
    });
