<?php

Auth::routes();

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function() {
	
	Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {

		Route::resource('users','UserController');

		Route::get('/', 'HomeController@index');
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

		Route::group(['prefix'=>'processes', 'where'=>['id'=>'[0-9]+']], function() {
			Route::get('', ['as'=>'processes.index', 'uses'=>'ProcessController@index']);
			Route::get('create',['as'=>'processes.create', 'uses'=>'ProcessController@create']);
			Route::post('create',['as'=>'processes.store', 'uses'=>'ProcessController@store']);
			Route::get('{id}', ['as'=>'processes.show', 'uses'=>'ProcessController@show']);
			Route::get('{id}/edit',['as'=>'processes.edit','uses'=>'ProcessController@edit']);
			Route::patch('{id}',['as'=>'processes.update', 'uses'=>'ProcessController@update']);
			Route::delete('{id}',['as'=>'processes.destroy', 'uses'=>'ProcessController@destroy']);
		});
	});

	Route::get('upload', 'FilesController@upload');
    Route::post('/handleUpload', 'FilesController@handleUpload');
    Route::get('/deleteFile/{id}', ['as' => 'deleteFile', 'uses' => 'FilesController@deleteFile']);
});



Route::group(['prefix'=>'/'], function() {
	Route::get('', 'MainController@mainindex');
	Route::get('{link_name}', ['as'=>'student.index', 'uses' => 'MainController@index']);
});

Route::group(['prefix'=>'/student'], function() {
	Route::get('enroll', ['as' => 'student.enroll', 'uses' => 'QuestionnaireController@index']);
	Route::get('questionnaire', ['as' => 'student.questionnaire', 'uses' => 'QuestionnaireController@questionnaire']);
	Route::post('questionnairesend', ['as' => 'student.questionnairesend', 'uses' => 'QuestionnaireController@questionnairesend']);
});