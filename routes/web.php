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

Route::post('/', function (){
  return view('welcome');
});

Auth::routes();

Route::get('/user', 'UserController@index')->middleware('auth');

Route::get('/admin', 'AdminController@index')->middleware('auth');

Route::get('/cars', 'ProductsController@cars');

Route::get('/trucks', 'ProductsController@trucks');

Route::get('/suv', 'ProductsController@suv');

Route::get('/compacts', 'ProductsController@compacts');

Route::get('/electric', 'ProductsController@electric');
