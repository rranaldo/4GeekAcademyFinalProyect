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

Route::get('/', ['as' => '/', 'uses' => 'HomeController@index']);
Route::get('/admin', ['as' => '/admin', 'uses' => 'AdminController@index']);
Route::post('/contacto',['as' => 'web.contacto', 'uses' => 'HomeController@postContact']);
Route::group(['prefix' => 'admin'], function()
{
    Route::resource('/textos', 'TextosController');
    Route::get('/textos', ['as' => '/textos', 'uses' => 'TextosController@index']);
    Route::post('/textos/edit', ['as' => '/textos/edit', 'uses' => 'TextosController@update']);

    Route::resource('/cuadros', 'CuadrosController');
    Route::resource('/proyectos', 'ProyectosController');
    Route::resource('/testimonios', 'TestimoniosController');
    Route::resource('/servicios', 'ServiciosController');
    Route::resource('/personal', 'PersonalController');

});

Auth::routes();
