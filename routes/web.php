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

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'areas'], function () {
        Route::get('/', 'Admin\AreasController@index');
        Route::get('/create', 'Admin\AreasController@create');
        ROute::post('/', 'Admin\AreasController@store');
        Route::get('/{areaId}/edit', 'Admin\AreasController@edit');
        Route::put('/{areaId}/edit', 'Admin\AreasController@update');
        Route::delete('/{areaId}', 'Admin\AreasController@delete');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
