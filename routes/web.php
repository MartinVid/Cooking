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
/*
Route::get('/','RecipeController@index');
Route::get('/recipes/','RecipeController@store');
Route::get('/recipes/create','RecipeController@create');
Route::get('/recipes/{recipe}','RecipeController@show');
*/
Route::get('/recipes/categories', 'RecipeController@categories')->name('categories');
Route::get('/recipes/breakfast', 'RecipeController@category1')->name('category1');
Route::get('/recipes/lunch', 'RecipeController@category2')->name('category2');
Route::get('/recipes/appetizers', 'RecipeController@category3')->name('category3');
Route::get('/recipes/desserts', 'RecipeController@category4')->name('category4');

Route::resource('recipes','RecipeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
