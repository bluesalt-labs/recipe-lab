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

/********** Public Site routes **********/
Route::name('public.')->group(function() {
    Route::get('/', 'PublicController@index')->name('index');

    Route::resetPassword();
    Route::emailVerification();
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// todo: add this
    //->middleware('verified');


Route::name('test.')->prefix('test')->group(function() {
    Route::get('/', 'TestController@index')->name('index');

    Route::get('purchase-entry', 'TestController@purchaseEntry')->name('purchase-entry');
    Route::post('purchase-entry', 'TestController@purchaseEntryPost')->name('purchase-entry.post');

});
