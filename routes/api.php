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
Route::post('/login','API\LoginController@login')->name('login');
Route::get('/conversion','API\ConversionController@show')->name('conversion');

Route::group(['prefix' => 'admin','middleware' => ['auth:api']], function() {
    Route::resource('enchange','API\ExchangeRateController');
});