<?php

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
    return view('partials.home');
});

Route::get('/destinations', function () {
    return view('partials.destinations');
});

Route::get('/detail', function () {
    return view('partials.detail');
});

Route::get('/login', function () {
    return view('partials.login');
});

Route::get('/signup', function () {
    return view('partials.signup');
});
