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

/*Route::group(['middleware' => ['auth']], function() {

	Route::get('/home', 'HomeController@index');

	Route::resource('users','UserController');

	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);

	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);

	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);

	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);

	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);

	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);

	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

});*/

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