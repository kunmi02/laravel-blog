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
Route::get('about',function(){
	return view('about');
});
Route::get('user-records','UserController@index'); //user db controller
Route::resource('users','UserController');
// Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','UserController@show');
Route::post('edit/{id}','UserController@edit');