<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great–|
*/

//Dynamic values
// Route::get('/users/{id}/{name}', function($id, $name){
// 	return 'This is user' .$id. 'with an id of' .$id;
// 	// return view ('pages.about');
// });

// You dont want to return your vue from the route you make a controller


// The function name is 
// @index that we made in the pages controller
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
// Route::get('/services', 'PagesController@services');

// Create all routes for all functions we need
// And Linking to ALL our posts on the page
Route::resource('posts', 'PostsController');

// Auth::routes();
Auth::routes();


Route::get('/dashboard', 'DashboardController@index');

//Comments controller
// Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::post('/comment', 'CommentsController@store');



