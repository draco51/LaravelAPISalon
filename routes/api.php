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

Route::get('test/{testid}', function ($Id) {
    return response()->json(['testid' => "{$Id}"], 200);
});

Route::apiResource('/users', 'FreelancerProfileController');

Route::get('users/{userId}', 'FreelancerProfileController@show');
