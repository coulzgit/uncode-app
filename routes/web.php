<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(app()-> getLocale());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/signIn', 'UserController@login');
Route::group(
	[
		'prefix' => '{locale}', 
		'where' =>['locale'=>'[a-zA-Z]{2}'],
		'middleware' => 'setlocale'
	], 
	function () {
		Route::get('/', function () {
		    return view('admin/uncod/.signin');
		});
	}
);

Route::group(
	[
		'prefix' => '{locale}', 
		'where' =>['locale'=>'[a-zA-Z]{2}'],
		'middleware' => ['setlocale','auth']
	]
	,function(){
	    Route::get('/admin/dashboard', 'UserController@dashboard')->name('admin.dashboard');
	    Route::get('/admin/dashboard/client', 'UserController@dashboard_client');
	    Route::get('/signup', 'UserController@inscription');
	    Route::post('/signup', 'UserController@inscriptionc')->name('client.inscri');
	    Route::get('/404', function () {
		    return view('404');
		});
	    Route::get('/tester', function () {
		    return view('404');
		});
	}
);

// ACCOUNT
Route::group(
	[
		'prefix' => '{locale}', 
		'where' =>['locale'=>'[a-zA-Z]{2}'],
		'middleware' => ['auth','setlocale']
	], 
	function() {
	    Route::get('/accounts', 'AccountController@index')->name('accounts');
	    Route::get('/accounts/create', 'AccountController@create')->name('accounts.create');
	    Route::post('/accounts/create', 'AccountController@store')->name('accounts.create');

	    Route::get('/accounts/{account_id?}/show', 'AccountController@show')->name('accounts.show');
	    Route::get('/accounts/{account_id?}/edit', 'AccountController@edit')->name('accounts.edit');
	    Route::post('/accounts/{account_id?}/edit', 'AccountController@update')->name('accounts.edit');

	    Route::get('/accounts/{account_id?}/config', 'AccountController@config')->name('accounts.config');
	    Route::post('/accounts/{account_id?}/config', 'AccountController@saveConfig')->name('accounts.config');
	    Route::get('/accounts/{account_id}/adduser', 'UserController@create')->name('accounts.adduser');
	    Route::get('/accounts/{account_id}/users', 'UserController@index')->name('accounts.users');
	    Route::delete('/accounts/{account_id?}/delete', 'AccountController@destroy')->name('accounts.delete');
	}
);

// ROLE
Route::group(
	[
		'prefix' => '{locale}', 
		'where' =>['locale'=>'[a-zA-Z]{2}'],
		'middleware' => ['auth','setlocale']
	], 
	function() {
	    Route::get('/roles', 'RoleController@index')->name('roles');
	    Route::get('/roles/create', 'RoleController@create')->name('roles.create');
	    Route::post('/roles/create', 'RoleController@store')->name('roles.create');

	    Route::get('/roles/{role_id?}/show', 'RoleController@show')->name('roles.show');
	    Route::get('/roles/{role_id?}/edit', 'RoleController@edit')->name('roles.edit');
	    Route::post('/roles/{role_id?}/edit', 'RoleController@update')->name('roles.edit');
	    Route::post('/roles/{role_id?}/delete', 'RoleController@delete')->name('roles.delete');
	}
);

// USER
Route::group(
	[
		'prefix' => '{locale}', 
		'where' =>['locale'=>'[a-zA-Z]{2}'],
		'middleware' => ['auth','setlocale']
	], 
	function() {
	    Route::get('/users/{account_id}', 'UserController@index')->name('users');
	    Route::get('/users/{account_id}/create', 'UserController@create')->name('users.create');

	    Route::post('/users/create', 'UserController@store')->name('users.create');

	    Route::get('/users/{user_id?}/show', 'UserController@show')->name('users.show');
	    Route::get('/users/{user_id?}/edit', 'UserController@edit')->name('users.edit');
	    Route::post('/users/{user_id?}/edit', 'UserController@update')->name('users.edit');
	    Route::delete('/users/{user_id?}/delete', 'UserController@destroy')->name('users.delete');
	}
);

// PROJET
Route::group(
	[
		'prefix' => '{locale}', 
		'where' =>['locale'=>'[a-zA-Z]{2}'],
		'middleware' => ['auth','setlocale']
	], 
	function() {
	    Route::get('/projets', 'ProjetController@index')->name('projets');
	    Route::get('/projets/create', 'ProjetController@create')->name('projets.create');
	    Route::post('/projets/create', 'ProjetController@store')->name('projets.create');

	    Route::get('/projets/{projet_id?}/show', 'ProjetController@show')->name('projets.show');
	    Route::get('/projets/{projet_id?}/edit', 'ProjetController@edit')->name('projets.edit');
	    Route::post('/projets/{projet_id?}/edit', 'ProjetController@update')->name('projets.edit');
	    Route::post('/projets/{projet_id?}/delete', 'ProjetController@delete')->name('projets.delete');
	    Route::post('/projets/{projet_id?}/loading', 'ProjetController@loading')->name('projets.loading');
	}
);

// LOADING FILE
Route::group(
	[
		'prefix' => '{locale}', 
		'where' =>['locale'=>'[a-zA-Z]{2}'],
		'middleware' => ['auth','setlocale']
	], 
	function() {
	    Route::get('/loadings', 'LoadingFileController@index')->name('loadings');

	    Route::get('/loading/docs', 'LoadingFileController@importDoc')->name('loading.docs');
	    Route::get('/loading/action-log', 'LoadingFileController@importActionLog')->name('loading.action-log');
	    Route::get('/loading/action-log-name', 'LoadingFileController@importActionLogName')->name('loading.action-log-name');
	    Route::get('/loading/acc-data', 'LoadingFileController@importAccData')->name('loading.acc-data');
	    Route::get('/loading/acc-data-name', 'LoadingFileController@importAccDataName')->name('loading.acc-data-name');
	    Route::get('/loading/compagnie', 'LoadingFileController@importCompagnie')->name('loading.compagnie');
	    Route::get('/loading/company-grid-field', 'LoadingFileController@importCompanyGridField')->name('loading.company-grid-field');
	    Route::get('/loading/doc-data', 'LoadingFileController@importDataDoc')->name('loading.doc-data');
	    Route::get('/loading/doc-attachment', 'LoadingFileController@importDocAttachment')->name('loading.doc-attachment');
	    Route::get('/loading/doc-data-name', 'LoadingFileController@importDocDataName')->name('loading.doc-data-name');


	    Route::post('/loading/docs', 'LoadingFileController@importDoc')->name('loading.docs');
	    Route::post('/loading/action-log', 'LoadingFileController@importActionLog')->name('loading.action-log');
	    Route::post('/loading/action-log-name', 'LoadingFileController@importActionLogName')->name('loading.action-log-name');
	    Route::post('/loading/acc-data', 'LoadingFileController@importAccData')->name('loading.acc-data');
	    Route::post('/loading/acc-data-name', 'LoadingFileController@importAccDataName')->name('loading.acc-data-name');
	    Route::post('/loading/compagnie', 'LoadingFileController@importCompagnie')->name('loading.compagnie');
	    Route::post('/loading/company-grid-field', 'LoadingFileController@importCompanyGridField')->name('loading.company-grid-field');
	    Route::post('/loading/doc-data', 'LoadingFileController@importDataDoc')->name('loading.doc-data');
	    Route::post('/loading/doc-attachment', 'LoadingFileController@importDocAttachment')->name('loading.doc-attachment');
	    Route::post('/loading/doc-data-name', 'LoadingFileController@importDocDataName')->name('loading.doc-data-name');



	    Route::get('/imports', 'LoadingFileController@imports')->name('imports');
	    Route::get('/export/test', 'LoadingFileController@imports')->name('export.test');
	    Route::post('/import/test', 'LoadingFileController@importTest')->name('import.test');

	    
	}
);