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
Route::group(array('before' => 'guest'), function () {

    Route::get('/', ['as' => 'home','uses' => 'MainController@index']);
    Route::get('chapter', ['as' => 'chapter','uses' => 'MainController@chapter']);
    Route::get('committee', ['as' => 'committee', 'uses' => 'CommitteeController@index']);
    Route::get('epic-awards', ['as' => 'epic-awards','uses' => 'MainController@epicAwards']);
    Route::get('events', ['as' => 'events','uses' => 'MainController@events']);
    Route::get('event-photos', ['as' => 'photos','uses' => 'MainController@photos']);
    Route::get('unplugged', ['as' => 'unplugged','uses' => 'MainController@unplugged']);
    Route::get('issue-1', ['as' => 'issue-1','uses' => 'MainController@issue1']);
    Route::get('membership', ['as' => 'membership','uses' => 'MainController@membership']);
    Route::get('scholarships', ['as' => 'scholarships','uses' => 'MainController@scholarships']);
    Route::get('epic-nominations', ['as' => 'nomination', 'uses' => 'NominationController@closed']);
    Route::post('nomination', ['as' => 'nomination', 'uses' => 'NominationController@store']);
    Route::get('success', ['as' => 'success','uses' => 'MainController@success']);
    Route::get('volunteer', ['as' => 'success','uses' => 'MainController@volunteer']);

    Route::get('contact', ['as' => 'contact','uses' => 'MainController@contact']);
    Route::post('contact', ['as' => 'contact', 'uses' => 'MainController@postContact']);

    Route::resource('nomination', 'NominationController', [
       'only' => ['create','store']
    ]);
});

Route::group(['middleware' => 'App\Http\Middleware\AdminOnly'], function()
{
    Route::get('/admin', 'Admin\AdminController@index');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);
