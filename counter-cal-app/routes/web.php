<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// Show Home Page
Route::get('/', function () {
    return view('home');
})->middleware('auth')->name("home");

// Show Products Page
Route::get('/products', [ProductController::class, 'index'])->middleware('auth');

// Show About Page
Route::get('/about', function () {
    return view('about');
});

Route::get('/user', [UserController::class, 'manage']) -> name('user');


// Show Welcome Page
Route::get('/welcome', function () {
    return view('welcome');
})->name("welcome");

// Show RegisterForm
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
