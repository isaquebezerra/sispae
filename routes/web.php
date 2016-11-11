<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('users','UserController');

Route::group(['prefix'=>'roles', 'where'=>['id'=>'[0-9]+']], function() {
	Route::get('', ['as'=>'roles.index', 'uses'=>'RoleController@index']);
	Route::get('create',['as'=>'roles.create', 'uses'=>'RoleController@create']);
	Route::post('create',['as'=>'roles.store', 'uses'=>'RoleController@store']);
	Route::get('{id}', ['as'=>'roles.show', 'uses'=>'RoleController@show']);
	Route::get('{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit']);
	Route::patch('{id}',['as'=>'roles.update', 'uses'=>'RoleController@update']);
	Route::delete('{id}',['as'=>'roles.destroy', 'uses'=>'RoleController@destroy']);
});

Route::group(['prefix'=>'campuses', 'where'=>['id'=>'[0-9]+']], function() {
	Route::get('', ['as'=>'campuses.index', 'uses'=>'CampusController@index']);
	Route::get('create',['as'=>'campuses.create', 'uses'=>'CampusController@create']);
	Route::post('create',['as'=>'campuses.store', 'uses'=>'CampusController@store']);
	Route::get('{id}', ['as'=>'campuses.show', 'uses'=>'CampusController@show']);
	Route::get('{id}/edit',['as'=>'campuses.edit','uses'=>'CampusController@edit']);
	Route::patch('{id}',['as'=>'campuses.update', 'uses'=>'CampusController@update']);
	Route::delete('{id}',['as'=>'campuses.destroy', 'uses'=>'CampusController@destroy']);
});