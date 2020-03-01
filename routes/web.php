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
Route::get("index", "PageController@index");
Route::get("/list", "PageController@show");
Route::get("author/create", "PageController@create");
Route::post("author/create", "PageController@store");
Route::get("author/{id}/edit", "PageController@edit");
Route::post("author/{id}/editt", "PageController@update");
Route::get("author/{id}/delete", "PageController@delete");