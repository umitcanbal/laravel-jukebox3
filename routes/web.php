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
Route::get("/author/create", "PageController@create");
Route::post("/author", "PageController@store");
Route::post("/author/delete/{id_variable}", "PageController@delete");
Route::post("/author/edit/{id_variable}", "PageController@edit");

