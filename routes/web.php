<?php
use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;

Route::get('/cart', function () {
	// Add some items in your Controller.
	Cart::add('192ao12', 'Product 1', 1, 9.99);
	Cart::add('1239ad0', 'Product 2', 2, 5.95, ['size' => 'large']);

    return view('cart');
});
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



//user
Route::prefix('')->group(function(){
// Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/user','UserController');
Route::get('/home', 'HomeController@index')->name('home');

	//onl
route::get('/','ShopController@index')->name('home.onl');
route::get('/checkout','ShopController@check');
route::get('/detail/{id}','ShopController@detail')->name('detail.onl');
Route::get('/add2cart/{id}', 'ShopController@add2cart');
Route::get('/delete-cart/{id}', 'ShopController@destroy');
route::get('/addorminus','ShopController@update');

route::post('/getid','ShopController@getid');
route::post('/getcolor','ShopController@getcl');

//order
route::post('/order','ShopController@homeonl');


//endorder
});
//enduser

//admin
Route::prefix('admin')->group(function(){
// Auth::routes();

	Route::get('login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'AuthAdmin\LoginController@login');
	Route::post('logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');


	route::resource('/product','ProductController');

	route::post('/productupdate/{id}','ProductController@update');

	route::post('/prod','ProductController@prod')->name('product.index');

	//product detail
	route::get('/prode/{id}','ProdeController@prode')->name('prode.index');
	route::post('/prodet/','ProdeController@prode')->name('productde.index');
	route::post('/addprode','ProdeController@store')->name('add.prode');
	route::delete('/delprode/{id}','ProdeController@destroy')->name('del.prode');
	route::get('/editprode/{id}','ProdeController@edit')->name('edit.prode');
	route::post('/updateprode/{id}','ProdeController@update')->name('update.prode');
	//end prode

	//orderprocess
	route::get('/process','OrderController@index')->name('order.home');
	route::post('/order','OrderController@getlist')->name('order.index');
	route::get('/procorder/{id}','OrderController@proc')->name('order.process');

	route::get('/confirm/{id}','OrderController@confirm');
	route::get('/delorder/{id}','OrderController@delorder');
	//endorder

	//statistic
	route::get('/daysta','StatisController@statistic');
	// route::get('/statistic','StatisController@statistic');
	//endsta

	Route::middleware('admin.auth')->group(function(){
		Route::resource('/user','UserController');
		Route::resource('/ad','AdminController');

	});



});
//end admin

