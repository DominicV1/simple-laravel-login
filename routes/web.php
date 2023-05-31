<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('home');

//  Login Routes
Route::get('/login', 'App\Http\Controllers\UserController@render')->name('login');
Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login');

//  Register Routes
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/register', 'App\Http\Controllers\UserController@register')->name('register');
