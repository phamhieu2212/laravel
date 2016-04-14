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


// route to show the login form
Route::get('login', 'HomeController@showLogin');

Route::post('login','HomeController@doLogin');
// route to show the register form
Route::get('register', 'HomeController@showRegister');

Route::post('register','HomeController@doRegister');


// route to show admin
Route::get('admin', 'HomeController@showAdmin');
?>
