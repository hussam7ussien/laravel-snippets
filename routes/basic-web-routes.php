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

Route::get('/home', function () {
    return 'home page!';
});

Route::get('/age-restricted', function () {
    return "pass age verification";
})->middleware('checkAge');

Route::get('/test', function () {
    return 'hello world';
});


Route::get('/welcome/{mohamed?}',function($name='all'){
    return "welcome $name";
});

Route::get('photo/{name}','ItemController@store');