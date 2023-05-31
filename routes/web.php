<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
// Route::get('/login', function () {
//     return View::make('admin/login');
// });
Route::get('/dashboard', function(){
    return View::make('admin/dashboard');
});
Route::get('/pasien', function(){
    return View::make('admin/pasien');
});
Route::get('/pasien/form-pasien', function(){
    return View::make('admin/form-pasien');
});
Route::get('/obat', function(){
    return View::make('admin/obat');
});
Route::get('/obat/form-obat', function(){
    return View::make('admin/form-obat');
});
Route::get('/alat-medis', function(){
    return View::make('admin/alat-medis');
});
Route::get('/alat-medis/form-alat-medis', function(){
    return View::make('admin/form-alat-medis');
});
Route::get('/rekam-medis', function(){
    return View::make('admin/rekam-medis');
});
Route::get('/rekam-medis/form-rekam-medis', function(){
    return View::make('admin/form-rekam-medis');
});
Route::get('/pemasukan', function(){
    return View::make('admin/pemasukan');
});
Route::get('/pemasukan/form-pemasukan', function(){
    return View::make('admin/form-pemasukan');
});
Route::get('/pengeluaran', function(){
    return View::make('admin/pengeluaran');
});
Route::get('/pengeluaran/form-pengeluaran', function(){
    return View::make('admin/form-pengeluaran');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);