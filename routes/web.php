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

Route::get('/', 'HomeController@frontDecision');

Auth::routes();

Route::get('/home', 'HomeController@frontDecision')->name('');
Route::get('/addcategory','HomeController@addCategory')->name('newcategory');
Route::post('/newcat','HomeController@insertCategory')->name('cat');
