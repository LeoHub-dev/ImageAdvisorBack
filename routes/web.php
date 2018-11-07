<?php

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



Route::get('/', 'HomeController@index');

Route::post('/contact', 'HomeController@contact');

Auth::routes();

Route::group(['prefix' => 'app', 'namespace' => 'App', 'middleware' => ['auth']], function () {

    Route::get('/', function() {
        return redirect('/app/dashboard');
    });

    

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::group(['middleware' => ['role:owner']], function () {
        Route::get('/panel', 'PanelController@index');
    });

});

/*
Route::resource('/users', 'Api\UserController', ['only' => ['index','update','destroy']]);

Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');
Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::group(['prefix' => 'app', 'namespace' => 'App', 'middleware' => ['auth']], function () {

	Route::get('/', function() {
	    return redirect('/app/dashboard');
	});

    Route::get('/invoices', 'InvoiceController@index')->name('invoices');
    Route::post('/invoices/pay/{invoice}', 'InvoiceController@pay')->name('invoices.pay');
    Route::get('/payments', 'PaymentController@index')->name('payments');
    Route::post('/payments/getAddress', 'PaymentController@getAddress')->name('payments.getAddress');

    Route::group(['middleware' => ['checkInvoices']], function () {

        Route::get('/settings', 'SettingsController@index')->name('settings');
        Route::post('/settings/storeApi', 'SettingsController@storeApi')->name('settings.storeApi');
        Route::post('/settings/storeBalance', 'SettingsController@storeBalance')->name('settings.storeBalance')->middleware('checkApi');

        Route::group(['middleware' => ['checkApi','checkBalance']], function () {

            Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
            Route::get('/profile', 'ProfileController@index')->name('profile');
            Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
            Route::post('/profile/update', 'ProfileController@update')->name('profile.update');
            Route::resource('/orders', 'TradingHistoryController', ['only' => ['index','store']]);
            Route::resource('/follows', 'FollowController', ['only' => ['index','store']]);
            Route::get('/history', 'ActionHistoryController@index')->name('history');

        });

    });

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('user', 'BlogController'); //Make a CRUD controller
    });
});
*/


