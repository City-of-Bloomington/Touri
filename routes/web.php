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

Route::get('/admin', 'ToursController@index');

Route::get('/admin/create', 'ToursController@create');

Route::post('/tours', 'ToursController@store');

Route::get('/admin/tours/{tour}', 'ToursController@show');

Route::get('/admin/{tour}/edit', 'ToursController@edit');

Route::put('/tours/{tour}', 'ToursController@update');

Route::delete('/tours/{tour}', 'ToursController@destroy');

Route::post('/admin/{tour}/pois', 'PoisController@store');

Route::get('/', 'TourUsersController@index');

Route::get('/feedback', 'TourUsersController@feedback');

Route::get('/take_tour', 'TakeController@index');

Route::get('/news', 'TourUsersController@news');

Route::get('/about', 'TourUsersController@about');

Route::get('/trivia', 'TourUsersController@trivia');

// controller => TourController

// eloquent model => Tour

// migration => create_tours_table

// php artisan make:model Tour -mc (does all three)

