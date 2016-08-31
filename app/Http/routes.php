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

Route::auth();
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);	
Route::get('/apartamentos', ['as' => 'web.apartamentos', 'uses' => 'HomeController@apartamentos']);	
Route::get('/apartamento/{id?}', ['as' => 'web.detalle', 'uses' => 'HomeController@detalle']);	
Route::get('/home', 'HomeController@index');
