<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\LogInController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/login', [AuthorizationController::class, 'submit'])->name('login-form');
Route::post('/signin', [LogInController::class, 'submit'])->name('register-form');
