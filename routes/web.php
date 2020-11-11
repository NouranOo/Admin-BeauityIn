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
    return view('admin.auth.login');
});

Route::get('/login','AdminController@getLogin');
Route::post('/login','AdminController@PostLogin');
Route::get('/logout','AdminController@getLogout');

//-----------------dashboard-----------------------------------
Route::get('/dashboard','AdminController@getDashboard');

//-----------------admin-----------------------------------
Route::get('getAdmin','AdminController@getAdmin');
Route::post('addAdmin','AdminController@addAdmin');


//-----------------user-----------------------------------
Route::get('/getUser','AdminController@getUser');

//-----------------provider-----------------------------------
Route::get('getProvider','AdminController@getProvider');
Route::get('/accept/{id}','AdminController@acceptProvider');


//-----------------service-----------------------------------
Route::get('getService','AdminController@getService');
Route::post('addService','AdminController@addService');

//-----------------subService-----------------------------------
Route::get('getSubService','AdminController@getSubService');
Route::get('getAddSubService','AdminController@getAddSubService');
Route::post('addSubService','AdminController@addSubService');

//-----------------order-----------------------------------
Route::get('getOrder','AdminController@getOrder');
//-----------------Price_Package---------------------
Route::get('getPricePackage','AdminController@getPricePackage');

Route::get('addPricePackage','AdminController@addPricePackage');
