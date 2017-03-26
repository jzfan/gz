<?php

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::group(['namespace'=>'Frontend'], function () {

	Route::get('/', 'PageController@index');
	Route::get('articles', 'ArticleController@index');
	Route::get('articles/{id}', 'ArticleController@show');
	Route::get('offers', 'OfferController@index');
	Route::get('sites', 'DecorationController@sites');
	Route::get('sites/{id}', 'DecorationController@show');
	Route::get('comments', 'CommentController@index');

});



Route::group(['namespace'=>'Backend', 'middleware'=>['auth', 'admin']], function () {
	Route::get('dashboard', 'PageController@dashboard');
	Route::get('admins', 'AdminController@index');
	// Route::get('editors', 'EditorController@index');
	Route::group(['prefix'=>'backend'], function () {

		Route::get('leaders', 'LeaderController@index');
		Route::get('workers', 'WorkerController@index');
		Route::get('customers', 'CustomerController@index');
		Route::get('projects', 'ProjectController@index');

		Route::resource('articles', 'ArticleController');
		Route::get('articles/tags/{tag}', 'ArticleController@byTag');
	});
});