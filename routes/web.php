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
Auth::routes();
Route::group( ['middleware' => 'auth' ], function()
{



/*VISTAS*/
Route::get('/', 'HomeController@index')->name('/' ) ;
Route::get('/home', 'HomeController@index')->name('/home' ) ;
Route::get('/mi-cuenta', 'HomeController@index')->name('/mi-cuenta' ) ;
Route::get('/configuracion', 'HomeController@index')->name('/configuracion' ) ;
Route::get('/liquidadora/{id}', 'HomeController@index')->name('/liquidadora' ) ;

/*VISTAS*/










/*APIS*/

Route::get('/user', 'UserController@getuser');

Route::post('/user/create/','UserController@createUser');
Route::get('/user/delete/{id}', 'UserController@deleteUser');



Route::put('/user/update', 'UserController@userupdate');
Route::post('/img/user/{id}', 'UserController@cargarImg');
Route::get('delete/img/{id}', 'UserController@deleteImg');
Route::get('/users/get', 'UserController@getusers');
Route::get('/user/monitor/', 'UserController@monitor');
Route::put('/user/update/', 'UserController@updateUser');



Route::get('/getliquidadoras', 'LiquidadoraController@getliquidadoras');
Route::get('/liquidadoras/todas-liquidadoras/', 'LiquidadoraController@todos');
Route::post('/liquidadora/create/', 'LiquidadoraController@create');
Route::put('/liquidadora/update/', 'LiquidadoraController@update');
Route::get('/liquidadora/monitor/', 'LiquidadoraController@monitor');
Route::get('/liquidadora/delete/{id}', 'LiquidadoraController@delete');

Route::get('/liquidadora/show/{id}', 'LiquidadoraController@GeLiquidadora');

Route::post('/subir/logo/{id}', 'LiquidadoraController@SubirLogo');
Route::get('/delete/logo/{id}', 'LiquidadoraController@DeleteLogo');



});

Auth::routes();


