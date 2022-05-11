<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('posts', 'App\Http\Controllers\API\PostController@index');
Route::group(['prefix' => 'post'], function () {
    Route::post('add', 'App\Http\Controllers\API\PostController@add');
    Route::get('edit/{id}', 'App\Http\Controllers\API\PostController@edit');
    Route::post('update/{id}', 'App\Http\Controllers\API\PostController@update');
    Route::delete('delete/{id}', 'App\Http\Controllers\API\PostController@delete');
});
