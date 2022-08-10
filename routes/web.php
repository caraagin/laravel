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
    return view('welcome');
});

Route::get('/lk-poin', function () {
    return view('/superadmin/lk-poin');
});

Route::get('/lk-adminlist', function () {
    return view('/superadmin/lk-adminlist');
});

Route::get('/lk-superadmin', function () {
    return view('/superadmin/lk-superadmin');
});

Route::get('/lk-tambahadmin', function () {
    return view('/superadmin/lk-tambahadmin');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
