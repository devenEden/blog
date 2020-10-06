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
    return view('index/welcome');
});
Route::get('/about', function () {
    return view('welcome');
});
Route::get('/activity', function () {
    return view('index/welcome');
});
Route::get('/blog', function () {
    return view('index/welcome');
});
Route::get('/authors', function () {
    return view('index/welcome');
});
