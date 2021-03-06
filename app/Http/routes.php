<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**Route::get('/', function () {
	return view('welcome');
});*/

Route::get('/', 'PostsController@index');

Route::get('/about', function () {
	return view('about');
});

Route::group(['prefix'=>'admin'], function() {
	Route::get('/welcome', function () {
		return "Welcome to Villa Mataanor";
	});

	Route::get('/welcome/{name}', function ($name) {
		return "welcome $name";
	});

	Route::get('/welcome/{name?}', function ($name='guest') {
		return "welcome $name to Villa Mataanor!";
	});

	Route::get('/marhaban/{name?}',[
		'as' => 'welcome.guest',
		function ($name = 'guest') {
			return "welcome $name to Villa Mataanor!";
		}]);

});

Route::post('login-submit', function() {

			//return "Login success!";
	$result = "Username : " . Request::get('username');
	$result .= " | Password : " . Request::get('password');

	return $result;
});

Route::resource('posts', 'PostsController'); 

Route::resource('categories', 'CategoriesController'); 

Route::get('home', 'PostsController@index');

/*Route::get('posts/{id}', function($id) {

	$post = App\Post::find($id);
	return view('posts.show')->with('post',$post);

});*/

//Route::get('posts/{id}','PostsController@show');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');