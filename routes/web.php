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

/*
Route::get('/admin', function(){
    return view('admin.index');
});
*/


Route::resource('/admin', 'AdminController');

Route::resource('/admin/restaurants', 'AdminRestaurantsController');

Route::resource('/admin/restaurant/tables', 'AdminRestaurantTablesController');

Route::post('/admin/restaurant/tables/add_all', 'AdminRestaurantTablesController@insertAll');
Route::post('/admin/restaurant/tables/edit_all', 'AdminRestaurantTablesController@updateAll');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
