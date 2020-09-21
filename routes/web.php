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

Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('galeri', function () {
    return view('galeri');
});

Route::get('artikel', function () {
    return view('artikel');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('artikel-detail', function () {
    return view('artikel-detail');
});


// jurusan
Route::get('/jurusan', 'JurusanController@index');
Route::get('/jurusan/create', 'JurusanController@create'); 
Route::get('/jurusan/{jurusan}', 'JurusanController@show'); 
Route::post('/jurusan', 'JurusanController@store'); 
Route::post('/jurusan/create', 'JurusanController@store');
Route::post('/jurusan/{jurusan}', 'JurusanController@delete');
Route::delete('/jurusan/{jurusan}', 'JurusanController@destroy');
Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit');
Route::patch('/jurusan/{jurusan}', 'JurusanController@update'); 