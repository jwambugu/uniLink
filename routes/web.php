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

Route::get('/home', [
	'uses' => 'HomeController@index',
	'as' => 'home'
]);

/**
 * All the users routes start here
*/
Route::get('/',[
	'uses' => 'PageController@userIndex',
	'as' => 'user.welcome'
]);

Route::get('/faq', [
	'uses' => 'PageController@getFaq',
	'as' => 'user.faq'
]);

// Show the contact page
Route::get('/contact', [
	'uses' => 'PageController@getContact',
	'as' => 'user.contact'
]);

// Show the password reset page
Route::get('/reset', [
	'uses' => 'PageController@getReset',
	'as' => 'user.reset'
]);

// Show all hostels
Route::get('/hostels', [
	'uses' => 'PageController@getHostels',
	'as' => 'user.hostels'
]);

// Show a hostel to be booked
Route::get('book/{id}', [
	'uses' => 'PageController@getBook',
	'as' => 'user.getBook'
]);

// Book a hostel
Route::get('/checkout/{id}', [
	'uses' => 'HomeController@getHostelToBook',
	'as' => 'user.book'
]);

// Show the profile page
Route::get('/profile', [
	'uses' => 'HomeController@getProfile',
	'as' => 'user.profile'
]);

// Update user profile
Route::post('/profile', [
	'uses' => 'HomeController@updateProfile',
	'as' => 'user.profile'
]);

// Get the password change page
Route::get('/password', [
	'uses' => 'HomeController@getPassword',
	'as' => 'user.password'
]);

// Update password
Route::post('/password', [
	'uses' => 'HomeController@updatePassword',
	'as' => 'user.password'
]);

// Check out page
Route::get('/checkout', [
	'uses' => 'HomeController@getCheckout',
	'as' => 'user.checkout'
]);

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
	Route::get('/', [
		'uses' => 'AdminController@index',
		'as' => 'admin.home'
	]);
	
	// Logout the Admin
	Route::get('/logout', [
		'uses' => 'AdminController@logout',
		'as' => 'admin.logout'
	]);
	
	// Return the hostel add view
	Route::get('/add', [
		'uses' => 'AdminController@getAdd',
		'as' => 'admin.add'
	]);
	
	// Add an new hostel to db
	Route::post('/add', [
		'uses' => 'AdminController@addHostel',
		'as' => 'admin.add'
	]);
	
	// Route to add hostel images and rooms data
	Route::get('/hostel-data', [
		'uses' => 'AdminController@getHostelData',
		'as' => 'admin.hostelData'
	]);
	
	// Route to add hostel images and rooms data
	Route::post('/hostel-data', [
		'uses' => 'AdminController@postHostelData',
		'as' => 'admin.hostelData'
	]);
	
	// Manage hostel route - searches for a particular item
	Route::get('/manage', [
		'uses' => 'AdminController@getManage',
		'as' => 'admin.manage'
	]);

	// Post manage route
	Route::post('/manage', [
		'uses' => 'AdminController@postManage',
		'as' => 'admin.manage'
	]);

	// Route for viewing hostel data from the home page
	Route::get('/view/{id}', [
		'uses' => 'AdminController@viewHostel',
		'as' => 'admin.view'
	]);

	// Route for editing hostel data
	Route::get('/edit/{id}', [
		'uses' => 'AdminController@editHostel',
		'as' => 'admin.edit'
	]);

	// Route for updating hostel data
	Route::post('/update', [
		'uses' => 'AdminController@updateHostel',
		'as' => 'admin.update'
	]);
});
