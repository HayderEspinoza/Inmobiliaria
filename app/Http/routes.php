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

debug(Route::auth());
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/inmobiliaria', ['as' => 'web.inmobiliaria', 'uses' => 'HomeController@inmobiliaria']);
Route::get('/servicios', ['as' => 'web.servicios', 'uses' => 'HomeController@servicios']);
Route::get('/inmuebles', ['as' => 'web.apartamentos', 'uses' => 'HomeController@apartamentos']);
Route::get('/proyectos', ['as' => 'web.proyectos', 'uses' => 'HomeController@proyectos']);
Route::get('/contacto', ['as' => 'web.contacto', 'uses' => 'HomeController@contacto']);
Route::get('/home', 'InmuebleController@index');
Route::resource('inmueble', 'InmuebleController');
Route::resource('inmueble.imagen', 'ImagenController');
Route::resource('tipo', 'TipoController');
Route::resource('ciudad', 'CiudadController');