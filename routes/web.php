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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
