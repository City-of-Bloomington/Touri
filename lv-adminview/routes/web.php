<?php


//Route::get('/tours', 'ToursController@index');

//Route::get('/tours/{tour}', 'ToursController@show');

//Route::get('/', 'PostsController@index');

//Route::get('/posts/{post}', 'PostsController@show');

Route::get('/', 'ToursController@index');

Route::get('/tours/create', 'ToursController@create');

Route::post('tours', 'ToursController@store');

Route::get('/tours/{tour}', 'ToursController@show');


Route::post('/tours/{tour}/pois', 'PoisController@store');

// controller => PostController

//Eloquent model => Post

//migration => create_posts_table