<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "MainController@index");

Route::get('rice',    "MainController@rice");
Route::get('tofu',    "MainController@tofu");
Route::get('chicken', "MainController@chicken");
Route::get('noodles', "MainController@noodles");
Route::get('oysters', "MainController@oysters");
Route::get('beef',    "MainController@beef");
Route::get('squid',   "MainController@squid");
Route::get('staple',  "MainController@staple");
Route::get('pearl',   "MainController@pearl");
