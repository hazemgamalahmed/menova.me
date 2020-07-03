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
Route::get('lang/{lang}', 'langController@index');
Route::group(['middleware'=>'lang'], function(){
            Route::get('/', function () {
            return view('index');
        });
        // Route::get('test', 'newsController@test');
        Route::get('contact', function () {
            return view('contact');
        });
        Route::get('test/1', 'newsController@test');
        Route::post('insert/customer', 'customerController@insertCustomer');
        Route::post('insert/serve', 'servicesController@insertServiceOrder');
        Route::post('insert/free', 'freelanceController@addFreeLancer');
        Route::post('insert/digital', 'digitalController@insertDigitalClients');
        Route::post('insert/developers', 'developmentController@insertDevelopment');
        Route::get('about', function () {
            return view('About');
        });

        // Route::post('insert/row', 'newsController@insert');

        Route::get('get-started', function () {
            return view('IT-free-lance');
        });
        Route::get('services', function () {
            return view('IT-services');
        });
        Route::get('Development', function () {
            return view('IT-Development');
        });
        Route::get('Digital', function () {
            return view('Digital');
        });
        Route::get('health/free', 'freelanceController@healthyData');
        Route::get('educ/free', 'freelanceController@educData');
        Route::get('agre/free', 'freelanceController@agriData');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'menova'], function(){
	Route::get('admin/serve', 'servicesController@servAdmin');
	Route::get('admin/solution', 'developmentController@getClientsOfDevelopment');
	Route::get('admin/digital', 'digitalController@fetchAllDigits');
    Route::get('admin/free', 'freelanceController@fetchAllFree');
    Route::get('dels/data', 'digitalController@fetchdeletedData');
    Route::delete('delete/digital', 'digitalController@deleteDigital');
    Route::get('dels/serve', 'servicesController@fetchDelsData');
    Route::delete('del/serve', 'servicesController@deleteData');
    Route::get('dels/serve', 'servicesController@fetchDelsData');
    Route::delete('delete/free', 'freelanceController@deleteFreeLance');
    Route::get('dels/free', 'freelanceController@fetchdelfree');
    Route::delete('del/sol', 'developmentController@deleteSol');
    Route::get('dels/sol', 'developmentController@fetchAllDelsSol');
});
Route::group(['middleware'=>'guest'], function(){

Route::get('admin/login', 'Users@login_get');
Route::post('admin/login', 'Users@login_post');
});
