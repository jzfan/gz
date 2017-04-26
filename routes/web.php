<?php

Auth::routes();
Route::get('/home', 'HomeController@index');


Route::namespace('Frontend')->group( function () {
	Route::post('customers', 'CustomerController@store');

	Route::get('/', 'PageController@index');
	Route::get('articles', 'ArticleController@index');
	Route::get('constructions', 'ApplyController@construction');
	Route::get('constructions/{id}', 'ApplyController@showWorking');
	Route::get('articles/{id}', 'ArticleController@show');
	Route::get('offers', 'OfferController@index');
	Route::get('offers/{id}', 'OfferController@show');
	Route::get('sites', 'ApplyController@sites');
	Route::get('sites/{id}', 'ApplyController@show');
	Route::get('comments', 'CommentController@index');
	Route::get('comments/leaders/{leader_id}', 'CommentController@ofLeader');
	Route::post('applies', 'ApplyController@store');
	Route::get('me', 'MeController@homeByRole');
	Route::post('me', 'MeController@update');
	Route::post('me/password', 'MeController@resetPassword');

	Route::get('leaders/{id}', 'LeaderController@show');
	Route::get('leaders', 'LeaderController@index');
	Route::get('offers/create-1', 'OfferController@getFormOne');
	Route::get('offers/create-2', 'OfferController@getFormTwo');
	// Route::post('offers/form-1', 'OfferController@setFormOne');
	Route::post('offers', 'OfferController@store');
	Route::get('designers', 'DesignerController@index');
	Route::get('designers/{designer}', 'DesignerController@show');
});


Route::namespace('Backend')->middleware('auth')->group( function () {
	Route::middleware('editor')->group( function () {
		Route::get('editor-console', 'PageController@editorConsole');
		Route::resource('seos', 'SeoController');
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
			Route::get('leaders/{id}/edit', 'LeaderController@edit');
			Route::put('leaders/{id}', 'LeaderController@update');
			Route::get('offers', 'OfferController@index');
			Route::get('offers/{id}', 'OfferController@show');
			Route::get('workers', 'WorkerController@index');
			Route::get('customers', 'CustomerController@index');
			Route::get('projects/{status}', 'ProjectController@pageByStatus');

			Route::get('articles/tags/{tag}', 'ArticleController@byTag');
			Route::resource('galleries', 'GalleryController', ['except'=>['edit']]);
			Route::resource('images', 'ImageController', ['except'=>['index', 'edit']]);
			Route::resource('designers', 'DesignerController', ['except'=>[]]);
			// Route::post('images', 'ImageController@storeImage');

		});
	});
});