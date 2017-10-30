<?php

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
    // return redirect('www.google.com');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//paparkan borang daftar
Route::get('daftar/tambah', 'PageController@create')->name('tambahAhli');

//Untuk papar semua maklumat ahli
Route::get('daftar/papar', 'PageController@index')->name('daftarAhli');


//Untuk mewujudkan data ke database
Route::post('daftar/wujud', 'PageController@store')->name('wujudAhli');
