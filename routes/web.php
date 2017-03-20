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
Route::group(['namespace'=>'Frontend'], function () {

	Route::get('/', 'ArticleController@index');
	Route::get('articles/{id}', 'ArticleController@show');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace'=>'Backend', 'middleware'=>['auth', 'editor']], function () {
	Route::get('dashboard', 'PageController@dashboard');
	Route::get('admins', 'AdminController@index');
	// Route::get('editors', 'EditorController@index');
	Route::group(['prefix'=>'backend'], function () {

		Route::get('managers', 'ManagerController@index');
		Route::get('workers', 'WorkerController@index');
		Route::get('customers', 'CustomerController@index');
		Route::get('projects', 'ProjectController@index');

		Route::resource('articles', 'ArticleController');
		Route::get('articles/tags/{tag}', 'ArticleController@byTag');
	});
});