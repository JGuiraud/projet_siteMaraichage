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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

// Vegetables:
Route::get('/legumes', 'VegetableController@show');
Route::get('/legumes/delete/{id}', 'VegetableController@destroy');
Route::post('/legumes/create', 'VegetableController@create');
