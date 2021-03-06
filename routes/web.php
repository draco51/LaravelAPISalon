<?php

use Illuminate\Http\Request;



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


Route::get('/search', 'FreelancerProfileController@search');
Route::get('/resource/testimonies', 'FreelancerProfileController@resourceData');



Route::get('/customers',function(){
    $faker = Faker\Factory::create();

    $limit = 10;

    for ($i = 0; $i < $limit; $i++) {
        $faker->name . ', Email Address: ' . $faker->unique()->email . ', Contact No' . $faker->phoneNumber . '<br>';
    }
});