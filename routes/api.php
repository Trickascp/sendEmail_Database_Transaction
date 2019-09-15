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

// Rest API Blog \\
Route::get("blog", "ApiTestController@getData")->middleware('jwt.verify');
Route::get("blog/read/{id}", "ApiTestController@readOne");
Route::post("blog", "ApiTestController@createData");
Route::put("blog/edit/{id}", "ApiTestController@editData");
Route::delete("blog/delete/{id}", "ApiTestController@deleteData");

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');




Route::group(['middleware' => 'auth:api'], function()
{
	Route::post('details', 'API\UserController@details');
});
