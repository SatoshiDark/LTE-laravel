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

//Route::get('/', 'WelcomeController@index');
//Pages controller tutorial at http://www.sitepoint.com/bootstrapping-laravel-crud-project/
//To create a Controller use cli: php artisan make:controller PagesController

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
Route::resource('tasks', 'TasksController');

Route::get('home', 'HomeController@index');
Route::get('capable', 'CapableController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
