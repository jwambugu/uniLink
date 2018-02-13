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

/**
 * Here we have all the admins routes
 * @prefix admin
*/
Route::prefix('admin')->group(function (){
	//Admin login
	Route::get('/login', [
		'uses' => 'PageController@getLogin',
		'as' => 'admin.login'
	]);
	
	Route::post('/login', [
		'uses' => 'PageController@postLogin',
		'as' => 'admin.login'
	]);
	// Admin dashboard
	Route::get('/home', [
		'uses' => 'AdminController@index',
		'as' => 'admin.home'
	]);
	
	// Logout the Admin
	Route::get('/logout', [
		'uses' => 'AdminController@logout',
		'as' => 'admin.logout'
	]);
});
