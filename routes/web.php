<?php


Route::get('/','HomeController@index');
Route::get('question','QuestionController@index')->name('question');
Route::get('question/{id}','QuestionController@show')->name('question.show');
Route::get('/product','ProductController@index');
Route::get('/product/{id}','ProductController@show');

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

