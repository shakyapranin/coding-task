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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => '', 'middleware' => ['auth']], function() {
    Route::post('/personnel', ['uses' => 'PersonnelController@store', 'as' => 'storePersonnel']);

    Route::get('/personnel', 'PersonnelController@create');
    Route::get('/personnel/{id}', ['uses' => 'PersonnelController@single', 'as' => 'viewPersonnel']);
    Route::get('/personnels', ['uses' => 'PersonnelController@index', 'as' =>'listPersonnel']);

    Route::delete('/personnel/{id}', 'PersonnelController@destroy');
});