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
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logoutcustom', ['as' => 'logoutcustom', 'uses' => 'Auth\LoginController@logout']);

Route::group(['prefix' => 'admin', 'middleware' => 'adminLoginMiddleware'], function () {
	Route::resource('listuser', 'UserController')->middleware('permissionLoginMiddleware');

	Route::get('catalogs',['as' => 'catalogspage', 'uses' => 'CatalogController@index'])->middleware('permissionLoginMiddleware');;
	Route::post('catalogs',['as' => 'createcatalogs', 'uses' => 'CatalogController@create'])->middleware('permissionLoginMiddleware');;

    Route::get('catalogchild',['as' => 'catalogchildspage', 'uses' => 'CatalogChildController@index'])->middleware('permissionLoginMiddleware');;
	Route::post('catalogchild',['as' => 'createcatalogchild', 'uses' => 'CatalogChildController@create'])->middleware('permissionLoginMiddleware');;

	Route::resource('homeacc', 'HomeCatalogController');

	Route::get('listaccount', ['as' => 'listaccount', 'uses' => 'HomeCatalogController@indexAccount']);
});