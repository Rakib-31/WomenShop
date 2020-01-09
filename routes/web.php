<?php

Route::get('/', 'HomeController@frontDecision');

Auth::routes();

Route::get('/home', 'HomeController@frontDecision')->name('');
Route::get('/addcategory','HomeController@addCategory')->name('newcategory');
Route::post('/newcat','HomeController@insertCategory')->name('cat');

Route::get('/admin/category', 'HomeController@addProduct');

Route::get('/edit/{id}', 'HomeController@edit');
Route::get('/view/{id}', 'HomeController@show');
Route::get('/delete/{id}', 'HomeController@deleteItem');
Route::post('/update/{id}', 'HomeController@update');

Route::get('/product/{id}', 'HomeController@product');
Route::get('/order/{id}', 'HomeController@order');
Route::post('/ordersuccessed', 'HomeController@ordersuccess')->name('ordersuccess');
