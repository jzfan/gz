<?php

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::group(['namespace'=>'Frontend'], function () {

	Route::get('/', 'PageController@index');
	Route::get('articles', 'ArticleController@index');
	Route::get('articles/{id}', 'ArticleController@show');
	Route::get('offers', 'OfferController@index');
	Route::get('sites', 'ApplyController@sites');
	Route::get('sites/{id}', 'ApplyController@show');
	Route::get('comments', 'CommentController@index');

});


Route::namespace('Backend')->middleware('auth')->group( function () {
	Route::middleware('editor')->group( function () {
		Route::get('editor-console', 'PageController@editorConsole');
	});
	Route::middleware('admin')->group( function () {
		Route::get('admin-console', 'PageController@dashboard');
		Route::get('backend-users', 'AdminController@backendUsers');
		Route::post('roles', 'AdminController@setRole');
		Route::post('applies/{apply_id}/leaders/{leader_id}', 'ApplyController@giveLeader');
		Route::get('applies/{apply_id}', 'ApplyController@show');
		// Route::get('editors', 'EditorController@index');
		Route::group(['prefix'=>'backend'], function () {

			Route::get('leaders', 'LeaderController@index');
			Route::get('workers', 'WorkerController@index');
			Route::get('customers', 'CustomerController@index');
			Route::get('projects/{status}', 'ProjectController@pageByStatus');

			Route::resource('articles/prev', 'ArticleController@prev');
			Route::resource('articles/next', 'ArticleController@next');
			Route::resource('articles', 'ArticleController');
			Route::get('articles/tags/{tag}', 'ArticleController@byTag');
		});
	});
});