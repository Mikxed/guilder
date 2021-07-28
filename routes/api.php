<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('guilds', 'GuildController@getGuilds');
Route::group(['prefix' => 'guild'], function () {
    Route::post('add', 'GuildController@add');
    Route::get('edit/{id}', 'GuildController@edit');
    Route::post('update/{id}', 'GuildController@update');
    Route::delete('delete/{id}', 'GuildController@delete');
});

Route::get('realms', 'GuildController@getRealms');