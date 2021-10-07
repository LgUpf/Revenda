<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/**
 * GET all routes
 */

Route::group(['prefix'=>'revendas', 'where'=>['id'=>'[0-9]']], function() {
    Route::get('',             ['as'=>'revendas',         'uses'=>'App\Http\Controllers\RevendasController@index']);
    Route::get('create',       ['as'=>'revendas.create',  'uses'=>'App\Http\Controllers\RevendasController@create']);
    Route::get('{id}/destroy', ['as'=>'revendas.destroy', 'uses'=>'App\Http\Controllers\RevendasController@destroy']);
    Route::get('{id}/edit',    ['as'=>'revendas.edit',    'uses'=>'App\Http\Controllers\RevendasController@edit']);
    Route::put('{id}/update',  ['as'=>'revendas.update',  'uses'=>'App\Http\Controllers\RevendasController@update']);
    Route::post('store',        ['as'=>'revendas.store',   'uses'=>'App\Http\Controllers\RevendasController@store']);

});

Route::group(['prefix'=>'marcas', 'where'=>['id'=>'[0-9]']], function() {
    Route::get('',             ['as'=>'marcas',         'uses'=>'App\Http\Controllers\MarcasController@index']);
    Route::get('create',       ['as'=>'marcas.create',  'uses'=>'App\Http\Controllers\MarcasController@create']);
    Route::get('{id}/destroy', ['as'=>'marcas.destroy', 'uses'=>'App\Http\Controllers\MarcasController@destroy']);
    Route::get('{id}/edit',    ['as'=>'marcas.edit',    'uses'=>'App\Http\Controllers\MarcasController@edit']);
    Route::put('{id}/update',  ['as'=>'marcas.update',  'uses'=>'App\Http\Controllers\MarcasController@update']);
    Route::post('store',        ['as'=>'marcas.store',   'uses'=>'App\Http\Controllers\MarcasController@store']);

});


Route::group(['prefix'=>'carros', 'where'=>['id'=>'[0-9]']], function() {
    Route::get('',             ['as'=>'carros',         'uses'=>'App\Http\Controllers\CarrosController@index']);
    Route::get('create',       ['as'=>'carros.create',  'uses'=>'App\Http\Controllers\CarrosController@create']);
    Route::get('{id}/destroy', ['as'=>'carros.destroy', 'uses'=>'App\Http\Controllers\CarrosController@destroy']);
    Route::get('{id}/edit',    ['as'=>'carros.edit',    'uses'=>'App\Http\Controllers\CarrosController@edit']);
    Route::put('{id}/update',  ['as'=>'carros.update',  'uses'=>'App\Http\Controllers\CarrosController@update']);
    Route::post('store',        ['as'=>'carros.store',   'uses'=>'App\Http\Controllers\CarrosController@store']);

});


Auth::routes();
Route::get('/home', [App\Http\Controllers\RevendasController::class, 'index'])->name('revendas');
