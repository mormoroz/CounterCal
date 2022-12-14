<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\User_productController;
use App\Http\Controllers\UserController;
use App\Models\User_product;
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
Route::get('/', [UserController::class, 'home'])->middleware('auth')->name("home");

// Show Products Page
Route::get('/products', [ProductController::class, 'index'])->middleware('auth');

// Show About Page
Route::get('/about', function () {
    return view('about');
});
Route::get('statistic', [ChartController::class, 'index'])->middleware('auth');

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

// Store eaten meals
Route::post('/meal', [User_productController::class, 'store'])->middleware('auth');

// Update eaten meals
Route::put('/meal', [User_productController::class, 'update'])->middleware('auth');

// Delete eaten meals
Route::delete('/meal', [User_productController::class, 'destroy'])->middleware('auth');
