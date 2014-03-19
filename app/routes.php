<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller('users', 'UsersController');


Route::get('/', function()
{

	return View::make('users.login');
});

/*
* for api service
*/

Route::get('api',function(){
	return "yesso Api Service..";
});

Route::group(array('prefix'=>'api/v1','before'=>'auth'),function(){
    Route::resource('user', 'user');
    route::resource('project','project');
});


