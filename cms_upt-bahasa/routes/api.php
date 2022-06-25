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

// Route::middleware('auth:api')->post('login', 'Api\UserController@login');
Route::middleware('auth:api')->post('me', 'Api\UserController@me');
Route::get('news', 'Api\NewsController@show');
Route::get('service', 'Api\ServiceController@show');
Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');