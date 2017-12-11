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
Route::get('about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

// Create all routes for all functions we need
// And Linking to ALL our posts on the page
Route::resource('posts', 'PostsController');

Auth::routes();

//Dashboard controller
Route::get('/dashboard', 'DashboardController@index')->name('manage.dashboard');

//User controller avatar image
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

//Comments
Route::post('/posts/{post}/comments', 'CommentsController@store');







// Route::get('foo', function() {
//     $image = Image::make('http://placehold.it/500x500/000/e8117f');
//     return Response::make($image->encode('jpg'), 200, ['Content-Type' => 'image/jpeg']);
// });



//=========================================================
			
			// TO DO! MAke the comments work
			// Cmments Controller

//=========================================================
//Comments controller
// Route::post('/posts/{post}/comments', 'CommentsController@store');
// Route::post('comments/{post_id', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

// Route::post('comments/{post}',  [
//     'as' => 'comments.store',
//     'uses' => 'CommentsController@store'
// ]);

