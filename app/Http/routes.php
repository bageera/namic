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

Route::get('/', ['as' => 'home','uses' => 'MainController@index']);
Route::get('chapter', ['as' => 'chapter','uses' => 'MainController@chapter']);
Route::get('events', ['as' => 'events','uses' => 'MainController@events']);
Route::get('unplugged', ['as' => 'unplugged','uses' => 'MainController@unplugged']);
Route::get('issue-1', ['as' => 'issue-1','uses' => 'MainController@issue1']);
Route::get('membership', ['as' => 'membership','uses' => 'MainController@membership']);
Route::get('scholarships', ['as' => 'scholarships','uses' => 'MainController@scholarships']);
Route::get('event-photos', ['as' => 'photos','uses' => 'MainController@photos']);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
