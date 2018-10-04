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

Route::apiResource('/stylists', 'FreelancerProfileController');


Route::group(['prefix'=>'stylists'],function(){
    Route::apiResource('/{stylist}/skills','SkillController');
});







//////////Testing/////////////////////////////////////
Route::get('test/{testid}', function ($Id) {
    return response()->json(['testid' => "{$Id}"], 200);
});