<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('best', array('as' => 'best', 'uses' => 'HomeController@home'));

Route::get('user', array('as' => 'user', 'uses' => 'userController@home'));
Route::post('user', array('uses' => 'userController@generateUser'));

Route::get('lorem', array('as' => 'lorem', 'uses' => 'loremController@home'));
Route::post('lorem', array('uses' => 'loremController@generateLorem'));

Route::get('pw', array('as' => 'pw', 'uses' => 'pwController@home'));
Route::post('pw', array('uses' => 'pwController@whichPW'));


