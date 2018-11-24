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


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::middleware('auth')->group(function() {

Route::get('/admin/waundarouten', ['uses' => 'Backend\WaundaroutenController@index', 'as' => 'waundarouten.index']);
Route::get('/admin/waundarouten/create', ['uses' => 'Backend\WaundaroutenController@create', 'as' => 'waundarouten.create']);
Route::post('/admin/waundarouten', ['uses' => 'Backend\WaundaroutenController@store', 'as' => 'waundarouten.store']);
Route::get('/admin/waundarouten/{waundarouten}', ['uses' => 'Backend\WaundaroutenController@show', 'as' => 'waundarouten.show']);
Route::get('/admin/waundarouten/{iwaundaroutend}/edit', ['uses' => 'Backend\WaundaroutenController@edit', 'as' => 'waundarouten.edit']);
Route::post('/admin/waundarouten/{waundarouten}', ['uses' => 'Backend\WaundaroutenController@update', 'as' => 'waundarouten.update']);
Route::delete('/admin/waundarouten/{waundarouten}', ['uses' => 'Backend\WaundaroutenController@destroy', 'as' => 'waundarouten.destroy']);

});

