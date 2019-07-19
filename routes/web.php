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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'index',
]);

Route::get('/get-properties', [
    'uses' => 'HtmlPropertyController@getProperties',
    'as' => 'get-properties',
    'middleware' => ['ajax'],
]);

Route::get('/download-properties', [
    'uses' => 'DownloadPropertyController@downloadProperties',
    'as' => 'download-properties',
]);
