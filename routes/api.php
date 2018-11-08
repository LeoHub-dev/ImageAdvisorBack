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




Route::group(['prefix' => 'v1', 'namespace' => 'Api', 'middleware' => 'cors'], function() {

	Route::get('/auth/token', 'AuthController@getAccessToken');

    Route::resource('/tags', 'ListingController@tags');
    Route::resource('/categories', 'ListingController@categories');
    Route::resource('/posts', 'PostController', ['only' => ['index', 'show']]);

    //Route::group(['middleware' => 'auth:api'], function() {

    	Route::get('/auth/me', 'AuthController@me');
    	Route::get('/auth/refresh', 'AuthController@refresh');
    	Route::get('/auth/logout', 'AuthController@logout');

        //Route::group(['middleware' => ['role:owner']], function () {
            Route::get('/users', 'UserController@index');
        //});
	    

	//});
});