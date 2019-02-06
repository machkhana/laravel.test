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

route::get('/','HomeController@index');
route::get('/product','ProductController@index');
route::get('/product/{id}','ProductController@show');

/*Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', 'Admin\IndexController@index');
    Route::resource('/categories', 'Admin\CategoryController');
    Route::resource('/sections', 'Admin\SectionController');
    Route::resource('/products', 'Admin\ProductController');
    Route::resource('/repair-types', 'Admin\RepairTypeController');
});*/


Auth::routes();
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', 'Admin\IndexController@index')->name('admin');
    Route::resource('/category','Admin\CategoryController');
});
