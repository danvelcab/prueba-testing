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

Route::prefix('users')->group(function(){
    Route::get('/', 'UserController@index');
    Route::get('/{user_id}', 'UserController@show');
    Route::post('', 'UserController@store')->middleware('jwt.auth');
    Route::put('/{user_id}', 'UserController@update')->middleware(\App\Http\Middleware\UserExists::class);
    Route::delete('/{user_id}', 'UserController@delete')->middleware(\App\Http\Middleware\UserExists::class);
});
