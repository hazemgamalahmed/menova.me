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
Route::post('insert/developers', 'developmentController@insertDevelopment');
Route::get('about', function () {
    return view('About');
});

// Route::post('insert/row', 'newsController@insert');

Route::get('free-lance', function () {
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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'menova'], function(){
	Route::get('admin/serve', 'servicesController@servAdmin');
	Route::get('admin/solution', 'developmentController@getClientsOfDevelopment');
});
Route::group(['middleware'=>'guest'], function(){

Route::get('admin/login', 'Users@login_get');
Route::post('admin/login', 'Users@login_post');
});
