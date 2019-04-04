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
Route::post('/tours', 'ToursController@store');

Route::resource('stops','StopsController');

// CRUD (Create, Read, Update, Delete) routes
Route::get('/admin/tours/{tour}', 'ToursController@show');
Route::get('/admin/create', 'ToursController@create');
Route::get('/admin/{tour}/edit', 'ToursController@edit');
Route::put('/tours/{tour}', 'ToursController@update');
Route::delete('/tours/{tour}', 'ToursController@destroy');

// PoI routes
Route::post('/admin/{tour}/pois', 'PoisController@store');
Route::get('/admin/{tour}/pois', 'PoisController@edit');

// Route for users
Route::get('/', 'TourUsersController@index');
Route::get('/tours/{tour}', 'TourUsersController@show')->name('{{ $tour->name }}');
Route::get('/take_tour', 'TakeController@index');


Route::get('/userTour', 'MapsController@index');
Route::get('/userTour/{tour}', 'MapsController@show');
Route::get('skills', function() {

	return ['Laravel', 'Vue', 'PHP', 'JavaScript', 'Tooling'];
	
});

// News, About, and Feedback routes
Route::get('/news', 'TourUsersController@news');
Route::get('/about', 'TourUsersController@about');
Route::get('/feedback', 'TourUsersController@feedback');


// controller => TourController

// eloquent model => Tour

// migration => create_tours_table

// php artisan make:model Tour -mc (does all three)


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
