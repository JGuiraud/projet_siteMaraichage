<?php


/*
----------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Redirect('/index')  ;
}
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin'], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::get('/recettes', 'RecipesController@getRecipes');
    Route::get('/supprimer/recette/{id}', 'RecipesController@destroy');

    // Route::get('/ajouter/recette/', 'RecipesController@create');
    Route::get('/details/recette/{id}', 'RecipesController@details');
    Route::get('/nouvelle/recette/part1', 'RecipesController@selectBasket');
    Route::get('/nouvelle/recette/part2', 'RecipesController@newRecipePart2');
    Route::post('/nouvelle/recette/part3', 'RecipesController@create')->name('createRecipe');

    // Vegetables:
    Route::get('/legumes', 'VegetableController@show');
    Route::get('/legumes/suppr/{id}', 'VegetableController@destroy');
    Route::post('/legumes/create', 'VegetableController@create');

    // Basket
    Route::get('/selectionPanier', 'VegetableController@selectBasket');
    Route::get('/suggestion/recettes', 'BasketsController@suggestRecipes');

    //market:
    Route::get('/marches', 'MarketsController@getMarket');
    Route::get('/supprimer/marche/{id}', 'MarketsController@destroyMarket');
    Route::post('/nouveau/marche/', 'MarketsController@createMarket')->name('createMarket');
});



//landing
Route::get('/index', 'LandingController@index');
// Farm
Route::get('/exploitation', function () {
    return view('farm');
}
);

// Map
Route::get('/stand', 'MarketsController@show');

