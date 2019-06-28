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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){
    
    return view('home');
});

Route::get('/profiles', 'ClinetController@profiles');
Route::get('/posts', 'ClinetController@posts');
Route::get('/posts/{slug}', 'ClinetController@post');

Route::group([

    //'middleware' => 'auth',
    'prefix' => 'profile'

], function ($router) {

    Route::get('{username}/', 'ProfileController@profile');
    Route::get('{username}/info', 'ProfileController@info');
    Route::post('{username}/edit', 'ProfileController@update');
    
    Route::resource('{username}/posts', 'PostController');
    Route::resource('{username}/categories', 'CategoryController')->middleware('admin');

});
