<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/connexion', 'UserController@login');
Route::post('/connexion', 'UserController@login');

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
	'middleware' => ['setlocale','Connecter']
	]
	,function(){
	    Route::get('/admin/dashboard', 'UserController@dashboard')->name('admin.dashboard');
	    Route::get('/admin/dashboard/client', 'UserController@dashboard_client');
	    Route::get('/signup', 'UserController@inscription');
	    Route::post('/signup', 'UserController@inscriptionc')->name('client.inscri');


	    //COULZ ROUTES

	    Route::get('account/{account_id?}/adduser', 'UserController@addUser')->name('account.adduser'); 
	    Route::get('account/{account_id?}/listuser', 'UserController@listUser')->name('account.listuser'); 
	    Route::get('account/create', 'UserController@createAccount')->name('account.create');
	    Route::get('account/list', 'UserController@listAccount')->name('account.list'); 
	    Route::get('account/{account_id?}/config', 'UserController@configAccount')->name('account.config');  
	    Route::get('account/{account_id}/details', 'UserController@detailsAccount')->name('account.details'); 
	    Route::get('account/{account_id}/edit', 'UserController@editAccount')->name('account.edit');
	    Route::get('account/{account_id}/config', 'UserController@configAccount')->name('account.config1');

	    Route::get('/tester', function () {
		    return view('teste');
		});




		//    Route::get('export', 'MyController@export')->name('export');

		// Route::get('importExportView', 'MyController@importExportView');

		// Route::post('import', 'MyController@import')->name('import');

		Route::get('export', 'AcountController@export')->name('export');
		Route::get('accounts/importView', 'AcountController@importView');
		Route::post('import', 'AcountController@import')->name('import');
		Route::get('export', 'AcountController@export')->name('export');
		Route::get('accounts/importView', 'AcountController@importView');

		Route::post('import', 'DocController@import')->name('import');

		Route::get('docs/importView', 'DocController@docView');

		Route::post('import', 'DocController@import')->name('import');


});
