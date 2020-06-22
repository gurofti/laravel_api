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
/*
Route::get('country', 'Country\CountryController@country');
Route::get('country/{id}', 'Country\CountryController@countryByID');
Route::post('country', 'Country\CountryController@countrySave');

// PUT / Güncelleme
//Route::put('country/{country}', 'Country\CountryController@countryUpdate');
Route::put('country/{id}', 'Country\CountryController@countryUpdate');

// DELETE / SİL
//Route::delete('country/{country}', 'Country\CountryController@countryDelete');
Route::delete('country/{id}', 'Country\CountryController@countryDelete');
*/

//php artisan make:controller Country/Country --resource
/*Route::group(['middleware' => 'auth:api'], function (){
    Route::apiResource('country', 'Country\Country');
});*/

Route::apiResource('country', 'Country\Country')->middleware('client');
Route::get('file/country_list', 'FileController@countryList');
Route::post('file/country_list', 'FileController@countrySave');

// Kurulum
//composer require paragonie/random_compat=~2.0
//composer require laravel/passport=~4.0
//https://www.youtube.com/watch?v=6CJ73IImcAY&list=PLYVcyg3AF-zvDDXBLDyn9UJSgAYMWpUS3&index=13
/*
 * php artisan passport:install
 * php artisan passport:client
 *
 *
 *
 *
 *
 *
 */
