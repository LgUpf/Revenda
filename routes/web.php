<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/**
 * GET all routes
 */
Route::group(['middleware'=> 'auth'], function() {
Route::group(['prefix'=>'revendas', 'where'=>['id'=>'[0-9]']], function() {
    Route::any('',             ['as'=>'revendas',         'uses'=>'App\Http\Controllers\RevendasController@index']);
    Route::get('create',       ['as'=>'revendas.create',  'uses'=>'App\Http\Controllers\RevendasController@create']);
    Route::get('{id}/destroy', ['as'=>'revendas.destroy', 'uses'=>'App\Http\Controllers\RevendasController@destroy']);
    Route::get('edit',         ['as'=>'revendas.edit',    'uses'=>'App\Http\Controllers\RevendasController@edit']);
    Route::put('{id}/update',  ['as'=>'revendas.update',  'uses'=>'App\Http\Controllers\RevendasController@update']);
    Route::post('store',        ['as'=>'revendas.store',   'uses'=>'App\Http\Controllers\RevendasController@store']);

});

Route::group(['prefix'=>'marcas', 'where'=>['id'=>'[0-9]']], function() {
    Route::any('',             ['as'=>'marcas',         'uses'=>'App\Http\Controllers\MarcasController@index']);
    Route::get('create',       ['as'=>'marcas.create',  'uses'=>'App\Http\Controllers\MarcasController@create']);
    Route::get('{id}/destroy', ['as'=>'marcas.destroy', 'uses'=>'App\Http\Controllers\MarcasController@destroy']);
    Route::get('edit',         ['as'=>'marcas.edit',    'uses'=>'App\Http\Controllers\MarcasController@edit']);
    Route::put('{id}/update',  ['as'=>'marcas.update',  'uses'=>'App\Http\Controllers\MarcasController@update']);
    Route::post('store',        ['as'=>'marcas.store',   'uses'=>'App\Http\Controllers\MarcasController@store']);

});


Route::group(['prefix'=>'carros', 'where'=>['id'=>'[0-9]']], function() {
    Route::any('',             ['as'=>'carros',         'uses'=>'App\Http\Controllers\CarrosController@index']);
    Route::get('create',       ['as'=>'carros.create',  'uses'=>'App\Http\Controllers\CarrosController@create']);
    Route::get('{id}/destroy', ['as'=>'carros.destroy', 'uses'=>'App\Http\Controllers\CarrosController@destroy']);
    Route::get('{id}/edit',    ['as'=>'carros.edit',    'uses'=>'App\Http\Controllers\CarrosController@edit']);
    Route::put('{id}/update',  ['as'=>'carros.update',  'uses'=>'App\Http\Controllers\CarrosController@update']);
    Route::post('store',        ['as'=>'carros.store',   'uses'=>'App\Http\Controllers\CarrosController@store']);

});

Route::group(['prefix'=>'modelos', 'where'=>['id'=>'[0-9]']], function() {
    Route::any('',             ['as'=>'modelos',         'uses'=>'App\Http\Controllers\ModelosController@index']);
    Route::get('create',       ['as'=>'modelos.create',  'uses'=>'App\Http\Controllers\ModelosController@create']);
    Route::get('{id}/destroy', ['as'=>'modelos.destroy', 'uses'=>'App\Http\Controllers\ModelosController@destroy']);
    Route::get('edit',         ['as'=>'modelos.edit',    'uses'=>'App\Http\Controllers\ModelosController@edit']);
    Route::put('{id}/update',  ['as'=>'modelos.update',  'uses'=>'App\Http\Controllers\ModelosController@update']);
    Route::post('store',        ['as'=>'modelos.store',   'uses'=>'App\Http\Controllers\ModelosController@store']);

});


Route::group(['prefix'=>'vendas', 'where'=>['id'=>'[0-9]']], function() {
    Route::get('',             ['as'=>'vendas',         'uses'=>'App\Http\Controllers\VendasController@index']);
    Route::get('create',       ['as'=>'vendas.create',  'uses'=>'App\Http\Controllers\VendasController@create']);
    Route::post('store',       ['as'=>'vendas.store',   'uses'=>'App\Http\Controllers\VendasController@store']);
    Route::get('{id}/destroy', ['as'=>'vendas.destroy', 'uses'=>'App\Http\Controllers\VendasController@destroy']);
});

});

Auth::routes();
Route::any('/home', [App\Http\Controllers\RevendasController::class, 'index'])->name('revendas');
