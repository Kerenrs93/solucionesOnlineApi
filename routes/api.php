<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::POST('/register','registerUserController@getUser');
Route::GET('/post/{idUser}','servicesController@getPosts');
//Route::POST('/register','registerUserController@register');
Route::POST('/message','chatController@sendMessge');