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
    return view('home');
});

Route::get('/home', function () {  // /home untuk dipakai di browser
    return view('home'); // home adalah nama filenya
});

Route::get('/template', function () { 
    return view('template'); 
});

Route::get('/datamahasiswa', 'App\Http\Controllers\MahasiswaController@readData');

Route::get('/tambahdata', 'App\Http\Controllers\MahasiswaController@input');
Route::post('/kotak_surat/store', 'App\Http\Controllers\MahasiswaController@store');

Route::get('/kotak_surat/edit/{id}', 'App\Http\Controllers\MahasiswaController@edit');
Route::post('/kotak_surat/update', 'App\Http\Controllers\MahasiswaController@update');

Route::get('/kotak_surat/hapus/{id}', 'App\Http\Controllers\MahasiswaController@hapus');