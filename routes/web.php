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

Route::get('/about', function () {

    return " Hi about page";

});


Route::get('/contact', function () {

    return " hi mi contact";

});
Route::get('/post/{id}/{name} ', function ($id, $name) {

    return "this is post number " . $id . " " . $name;

});

Route::group(['middleware' => ['web']], function () {


}); 