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

Route::get('/',               "MainController@index");

Route::get('rice',            "MainController@rice");
Route::get('tofu',            "MainController@tofu");
Route::get('chicken',         "MainController@chicken");
Route::get('vermicelli',      "MainController@vermicelli");
Route::get('oysters',         "MainController@oysters");
Route::get('beef-noodles',    "MainController@beef_noodles");
Route::get('thick-soup',      "MainController@thick_soup");
Route::get('staple',          "MainController@staple");
Route::get('pearl',           "MainController@pearl");

Route::get('glt',             "ApiController@glt");
Route::post('apply-for',      "ApiController@applyFor");
Route::get('get-photos/{type?}',      "ApiController@getPhotos");
Route::get('album-list/{albumID?}', function($albumID){
  return albumList($albumID);
});
