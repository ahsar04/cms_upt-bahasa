<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DashboardApiController;
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


Route::get('/dashboard', [DashboardApiController::class, 'index']);

Route::post('/auth', function(Request $request) {
    $user = Auth::attempt($request->all());

    if($user) {
        return Auth::user();
    }

    return response()->json([
        'message' => 'Email & Password doesn\'t match'
    ], 404);
});

Route::post('/user/register', 'Api\RegisterApiController@register');