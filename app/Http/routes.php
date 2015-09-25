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

Route::get('/', function () {
    return view('welcome');
});

Route::get('decorator', 'PatternsController@decorate');
Route::get('observer', 'PatternsController@observe');
Route::get('adapter', 'PatternsController@adapt');
Route::get('template-method', 'PatternsController@template');
Route::get('strategy', 'PatternsController@strategize');
Route::get('chain-of-responsibility', 'PatternsController@chain');
Route::get('specification', 'PatternsController@specify');
