<?php

Auth::routes();
Route::get('/home', 'HomeController@index');


Route::namespace('Frontend')->group( function () {
	Route::post('customers', 'CustomerController@store');

	Route::get('/', 'PageController@index');
	Route::get('articles', 'ArticleController@index');
	Route::get('articles/{id}', 'ArticleController@show');
	Route::get('offers', 'OfferController@index');
	Route::get('sites', 'ApplyController@sites');
	Route::get('sites/{id}', 'ApplyController@show');
	Route::get('comments', 'CommentController@index');
	Route::post('applies', 'ApplyController@store');
	Route::get('me', 'MeController@profile');
	Route::post('me', 'MeController@update');

	Route::get('leaders/{id}', 'LeaderController@show');
	Route::get('offer-form', 'OfferController@getForm');

});


Route::namespace('Backend')->middleware('auth')->group( function () {
	Route::middleware('editor')->group( function () {
		Route::get('editor-console', 'PageController@editorConsole');
		Route::resource('backend/articles', 'ArticleController');
	});
	Route::middleware('admin')->group( function () {
		Route::get('materials', 'MaterialController@index');
		Route::post('materials', 'MaterialController@store');
		Route::delete('materials/{id}', 'MaterialController@destroy');
		Route::get('admin-console', 'PageController@dashboard');
		Route::get('applies', 'ApplyController@index');
		Route::post('applies/{id}/leaders', 'ApplyController@giveLeader');
		Route::get('backend-users', 'AdminController@backendUsers');
		Route::post('roles', 'AdminController@setRole');
		Route::get('applies/{apply_id}', 'ApplyController@show');
		// Route::get('editors', 'EditorController@index');
		
		Route::resource('items', 'ItemController');
		Route::get('items/{id}/item-options/create', 'ItemOptionController@create');
		Route::get('item-options/{id}/edit', 'ItemOptionController@edit');
		Route::put('item-options/{id}', 'ItemOptionController@update');
		Route::post('item-options', 'ItemOptionController@store');
		Route::delete('item-options/{id}', 'ItemOptionController@destroy');

		Route::group(['prefix'=>'backend'], function () {

			Route::get('leaders', 'LeaderController@index');
			Route::get('workers', 'WorkerController@index');
			Route::get('customers', 'CustomerController@index');
			Route::get('projects/{status}', 'ProjectController@pageByStatus');

			Route::get('articles/tags/{tag}', 'ArticleController@byTag');
			Route::resource('galleries', 'GalleryController', ['except'=>['edit']]);

		});
	});
});