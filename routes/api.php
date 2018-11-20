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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/




Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function() {

	Route::post('/auth/token', 'AuthController@getAccessToken');

    Route::resource('/users', 'UserController', ['only' => ['store']]);

    Route::group(['middleware' => 'jwt.auth', 'jwt.refresh'], function() {

    	Route::get('/auth/me', 'AuthController@me');
    	Route::get('/auth/refresh', 'AuthController@refresh');
    	Route::get('/auth/logout', 'AuthController@logout');

        Route::group(['middleware' => ['role:owner']], function () {
            Route::resource('/users', 'UserController', ['except' => ['store']]);
        });
	    

	});
});