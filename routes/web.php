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
    return view('welcome');
});
route::get('home','HomeController@index');
route::get('/product','ProductController@index');
route::get('/product/{id}','ProductController@show');

/*Route::get('/admin', 'API\AuthController@getLogin');
Route::post('/admin', 'API\AuthController@postLogin')->name('login.postlogin');
//Route::get('/admin', 'API\AuthController@getLogout')->name('login.logout');

Route::get('/register', 'API\AuthController@getRegister');
Route::post('/register', 'API\AuthController@postRegister');*/

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', 'Admin\IndexController@index');
    /*Route::resource('/categories', 'Admin\CategoryController');
    Route::resource('/sections', 'Admin\SectionController');
    Route::resource('/products', 'Admin\ProductController');
    Route::resource('/repair-types', 'Admin\RepairTypeController');*/
});

