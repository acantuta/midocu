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

Route::group(['prefix' => 'admin', 'middleware' => 'auth:web'], function () {
    Route::group(['prefix' => 'areas'], function () {
        Route::get('/', 'Admin\AreasController@index');
        Route::get('/create', 'Admin\AreasController@create');
        ROute::post('/', 'Admin\AreasController@store');
        Route::get('/{areaId}/edit', 'Admin\AreasController@edit');
        Route::put('/{areaId}/edit', 'Admin\AreasController@update');
        Route::delete('/{areaId}', 'Admin\AreasController@delete');
    });

    Route::group(['prefix' => 'expediente-tipos'], function () {
        Route::get('/', 'Admin\ExpedienteTiposController@index');
        Route::get('/create', 'Admin\ExpedienteTiposController@create');
        ROute::post('/', 'Admin\ExpedienteTiposController@store');
        Route::get('/{areaId}/edit', 'Admin\ExpedienteTiposController@edit');
        Route::put('/{areaId}/edit', 'Admin\ExpedienteTiposController@update');
        Route::delete('/{areaId}', 'Admin\ExpedienteTiposController@delete');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'Admin\UsersController@index');
        Route::get('/create', 'Admin\UsersController@create');
        ROute::post('/', 'Admin\UsersController@store');
        Route::get('/{areaId}/edit', 'Admin\UsersController@edit');
        Route::put('/{areaId}/edit', 'Admin\UsersController@update');
        Route::delete('/{areaId}', 'Admin\UsersController@delete');
    });
});

Route::group(['middleware' => 'auth:web'], function () {
    Route::group(['prefix' => 'personas'], function () {
        Route::get('/', 'PersonasController@index');
        Route::get('/create', 'PersonasController@create');
        ROute::post('/', 'PersonasController@store');
        Route::get('/{personaId}/edit', 'PersonasController@edit');
        Route::put('/{personaId}/edit', 'PersonasController@update');
        Route::delete('/{personaId}', 'PersonasController@delete');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
