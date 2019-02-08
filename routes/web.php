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

Route::get('/test', function(){
	return view('wel');
});
Route::post('/test', 'HomeController@storeTest');

route::get('/onl','ShopController@index');

//user
Route::prefix('')->group(function(){
// Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/user','UserController');
Route::get('/home', 'HomeController@index')->name('home');


});
//enduser

//admin
Route::prefix('admin')->group(function(){
// Auth::routes();

	Route::get('login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'AuthAdmin\LoginController@login');
	Route::post('logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');


	route::resource('/product','ProductController');
	route::post('/prod','ProductController@prod')->name('product.index');

	//product detail
	route::get('/prode/{id}','ProdeController@prode')->name('prode.index');
	route::post('/prodet/','ProdeController@prode')->name('productde.index');
	route::post('/addprode','ProdeController@store')->name('add.prode');
	route::delete('/delprode/{id}','ProdeController@destroy')->name('del.prode');
	route::get('/editprode/{id}','ProdeController@edit')->name('edit.prode');
	route::post('/updateprode/{id}','ProdeController@update')->name('update.prode');
	//end prode
	
	Route::middleware('admin.auth')->group(function(){
		Route::resource('/user','UserController');
		Route::resource('/ad','AdminController');
		
		


	});



});
//end admin

