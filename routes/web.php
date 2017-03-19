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
    return 'my web';
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace'=>'Backend', 'middleware'=>['auth', 'editor']], function () {
	Route::get('dashboard', 'PageController@dashboard');
	Route::get('admins', 'AdminController@index');
	Route::get('editors', 'EditorController@index');
	Route::get('managers', 'ManagerController@index');
	Route::get('workers', 'WorkerController@index');
	Route::get('customers', 'CustomerController@index');
});