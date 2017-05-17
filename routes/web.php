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

// Deturmine log in path user will get when logged in//

Route::get('/admin', 'AdminController@logincheck')->middleware('auth');
Route::get('/administration', 'AdminController@Dashboard')->middleware('auth')->name('admin');

Route::post('/administration/an', 'AdminController@addnew')->middleware('auth')->name('admaddnew');//->with('userslist');
Route::post('/administration/nm', 'AdminController@addnewmodel')->middleware('auth')->name('admnewmdl');

Route::get('/employee', 'AdminController@logincheck')->middleware('auth');
Route::get('/employee/profile', 'EmployeeController@Dashboard')->middleware('auth')->name('employee');

Route::get('/user', 'AdminController@logincheck')->middleware('auth');
Route::get('/user/profile','UserController@Index')->middleware('auth')->name('user');

Route::get('/cars', 'ProductsController@cars');

Route::get('/trucks', 'ProductsController@trucks');

Route::get('/suv', 'ProductsController@suv');

Route::get('/compacts', 'ProductsController@compacts');

Route::get('/electric', 'ProductsController@electric');
