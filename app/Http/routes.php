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
Route::get('/', ['as' => 'web.index', 'uses' => 'HomeController@index']);
Route::get('/inmobiliaria', ['as' => 'web.inmobiliaria', 'uses' => 'HomeController@inmobiliaria']);
Route::get('/servicios', ['as' => 'web.servicios', 'uses' => 'HomeController@servicios']);
Route::get('/inmuebles', ['as' => 'web.inmuebles', 'uses' => 'HomeController@inmuebles']);
Route::get('/inmuebles/{id}', ['as' => 'web.inmueble', 'uses' => 'HomeController@inmueble']);
Route::get('/inmuebles/interesa/{id}', ['as' => 'web.interesaInmueble', 'uses' => 'HomeController@interesaInmueble']);
Route::get('/proyectos', ['as' => 'web.proyectos', 'uses' => 'HomeController@proyectos']);
Route::get('/contacto', ['as' => 'web.contacto', 'uses' => 'HomeController@contacto']);
Route::post('/enviar', ['as' => 'web.enviar', 'uses' => 'HomeController@enviar']);
Route::get('/home', 'InmuebleController@index');
Route::resource('inmueble', 'InmuebleController');
Route::resource('tipo', 'TipoController');
Route::resource('ciudad', 'CiudadController');
Route::resource('barrio', 'BarrioController');
Route::put('perfil/{id}', ['as' => 'imagen.perfil', 'uses' => 'ImagenController@perfil']);
Route::resource('inmueble.imagen', 'ImagenController');
Route::put('inmueble/{inmueble}/imagen/{imagen}/left', ['as' => 'rotate.left', 'uses' => 'ImagenController@rotateLeft']);
Route::put('inmueble/{inmueble}/imagen/{imagen}/right', ['as' => 'rotate.right', 'uses' => 'ImagenController@rotateRight']);