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

Route::get('/home', function () {
    return View::make('user/index');
});
Route::get('/schedule', function () {
    return View::make('user/schedule');
});
Route::get('/aboutus', function () {
    return View::make('user/aboutus');
});
Route::get('/contact', function () {
    return View::make('user/contact');
});
Route::get('/login', function () {
    return View::make('admin/login');
});
