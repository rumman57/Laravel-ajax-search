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

Route::get('/',['uses'=>'UsersController@getIndex','as'=>'users.index']);
Route::post('search',['uses'=>'UsersController@postSearch','as'=>'users.serch']);
//Route::controller('users','UsersController');

Route::resource('/posts', 'PostsController'); 
