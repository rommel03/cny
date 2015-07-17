<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');




Route::group(['middleware' => 'auth','prefix'=>'dashboard'], function()
{
	Route::get('/', 'HomeController@index');


	Route::group(['prefix' => 'clinic'],function(){
		Route::get('/', 'Dashboard\ClinicController@index');
		Route::get('add', 'Dashboard\ClinicController@addView');	
		Route::post('add', 'Dashboard\ClinicController@addProcess');	
	});


	Route::group(['prefix' => 'patient'],function(){
		Route::get('/', 'Dashboard\PatientController@index');
		Route::get('add', 'Dashboard\PatientController@addView');	
		Route::post('add', 'Dashboard\PatientController@addProcess');	
	});
	
	Route::get('profile','Dashboard\Profile@index');
	Route::get('profile/edit/{id?}','Dashboard\Profile@edit');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get("test","TestController@index");