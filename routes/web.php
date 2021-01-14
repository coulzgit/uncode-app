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
Route::resource('users', 'UserController');
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
	    Route::resource('roles', RoleController::class);
	    Route::resource('users', UserController::class);
	    Route::resource('projets', ProjetController::class);
	}
);
