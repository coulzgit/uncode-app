<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RoleController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\ProjetController;


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
    return redirect(app()-> getLocale());
});
// Route::resource('users', 'UserController');
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


	    // MODULE COMPTE
	    // create
	     Route::get('account/create', 'UserController@createAccount')->name('account.create');
	    Route::post('account/create', 'UserController@saveAccount');
	    Route::get('account/{account_id}/details', 'UserController@detailsAccount')->name('account.details');
	    // edit
	    Route::get('account/{account_id}/edit', 'UserController@editAccount')->name('account.edit');
	    Route::post('account/{account_id}/edit', 'UserController@updateAccount');
	    // config
	     Route::get('account/{account_id?}/config', 'UserController@configAccount')->name('account.config');
	    Route::get('account/{account_id}/config', 'UserController@configAccount')->name('account.config1');
	    Route::post('account/{account_id}/config', 'UserController@saveConfigAccount');

	    Route::get('account/{account_id?}/adduser', 'UserController@addUser')->name('account.adduser');
	    Route::get('account/{account_id?}/listuser', 'UserController@listUser')->name('account.listuser');

	    Route::get('account/list', 'UserController@listAccount')->name('account.list');


	    Route::get('/404', function () {
		    return view('404');
		});

	    Route::get('/tester', function () {
		    return view('404');
		});
});

Route::group(
	[
		'prefix' => '{locale}',
		'where' =>['locale'=>'[a-zA-Z]{2}'],
		'middleware' => ['auth','setlocale']
	],
	function() {
	    //Route::resource('roles', RoleController::class);
	    Route::resource('users', UserController::class);
	    Route::resource('projets', ProjetController::class);
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
	    Route::get('/users', 'UserController@index')->name('users');
	    Route::get('/users/create', 'UserController@create')->name('users.create');
	    Route::post('/users/create', 'UserController@store')->name('users.create');

	    Route::get('/users/{user_id?}/show', 'UserController@show')->name('users.show');
	    Route::get('/users/{user_id?}/edit', 'UserController@edit')->name('users.edit');
	    Route::post('/users/{user_id?}/edit', 'UserController@update')->name('users.edit');
	}
);
