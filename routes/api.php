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

Route::post('login', 'Auth/ApiAuthController@login');

// Protected Routes
Route::middleware('jwt.auth')->group(function () {

  // Returns the currently authenticated user object
  Route::get('me', function () {
    return auth('api')->user();
  });

});
