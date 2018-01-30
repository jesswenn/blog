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

// Dynamic values
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

// Route::get('/email', 'PagesController@email')->name('sendEmail');

// Mail controller
Route::get('send', 'MailController@send');
// Route::get('email', 'MailController@email');


// Create all routes for all functions we need
// And Linking to ALL our posts on the page
Route::resource('posts', 'PostsController');

Auth::routes();

// Dashboard controller
Route::get('/dashboard', 'DashboardController@index')->name('manage.dashboard');

//User controller avatar image
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

// Comments controller
Route::post('/posts/{post}/comments', 'CommentsController@store');

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});