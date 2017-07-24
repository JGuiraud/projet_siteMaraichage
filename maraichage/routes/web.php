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

Route::get('/recettes', 'RecipesController@getRecipes');
Route::get('/supprimer/recette/{id}', 'RecipesController@destroy');
Route::get('/details/recette/{id}', 'RecipesController@details');
Route::get('/nouvelle/recette/part1', 'RecipesController@newRecipePart1');
Route::get('/nouvelle/recette/part2', 'RecipesController@newRecipePart2');
Route::get('/nouvelle/recette/part3', 'RecipesController@create')->name('createRecipe');
