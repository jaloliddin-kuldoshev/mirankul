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
    return view('welcome');
});

Route::group([
	'prefix' => 'admin-panel',
	'middleware' => ['web', 'auth',],
	'namespace' => 'Admin'
], function (){
	

	Route::resource('works', 'WorksController');
	Route::resource('catalogs', 'CatalogsController');
	Route::resource('benefits', 'BenefitsController');
	Route::resource('alboums', 'AlboumsController');
	Route::resource('photos', 'PhotoController');
	Route::resource('partners', 'PartnersController');
	Route::resource('offices', 'OfficesController');
	Route::resource('vacancies', 'VacanciesController');
	Route::resource('video', 'VideoController');
	Route::resource('videos', 'VideosController');
	Route::resource('products', 'ProductsController');
	Route::resource('sliders', 'SlidersController');
	Route::get('getCatalog/{id?}', 'ProductsController@getCatalog');
	Route::match(['get', 'post'], 'ad', 'AdminController@ad');
	Route::match(['get', 'post'], 'contacts', 'AdminController@contacts');
	Route::match(['get', 'post'], 'cart', 'AdminController@cart');
	Route::match(['get', 'post'], 'vacancy', 'AdminController@vacancy');
	Route::match(['get', 'post'], 'about', 'AdminController@about');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
