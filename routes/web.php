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

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/ipkps/komponen/{id}', 'IpkpsController@komponen')->name('komponen');
Route::get('/penilaian/komponen/{id}', 'PenilaianController@komponen')->name('komponen');
Route::get('/rekap/komponen/{id}', 'RekapController@komponen')->name('komponen');

Route::resource('/ipkps', 'IpkpsController', ['except' => 'destroy']);
Route::resource('/penilaian', 'PenilaianController', ['except' => 'destroy']);
Route::resource('/rekap', 'RekapController', ['except' => 'destroy']);
