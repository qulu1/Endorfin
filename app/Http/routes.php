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

Route::get('admin', 'AdminController@index');

// Route::get('/registers', 'RegisterController@register');
// Route::post('/registers', 'RegisterController@create');
// Route::get('/admins', 'RegisterController@index');
// Route::get('/admins/{id}/edit', 'RegisterController@edit');
// Route::patch('/admins/{id}','RegisterController@update');
// Route::get('/admins/{id}/delete', 'RegisterController@destroy'); 


Route::get('home', 'HomeeController@home');
Route::get('', 'HomeeController@home');
// Route::get('register', 'HomeeController@home');



Route::get('/portfolio', 'PortfolioController@index');
Route::post('/portfolio', 'PortfolioController@store');
Route::get('/portfolio/{id}/edit', 'PortfolioController@edit');
Route::patch('/portfolio/{id}','PortfolioController@update');
Route::get('/portfolio/{id}/delete', 'PortfolioController@destroy'); 

Route::get('staff', 'StaffController@index');
Route::post('/staff', 'StaffController@store');
Route::get('/staff/{id}/edit', 'StaffController@edit');
Route::patch('/staff/{id}','StaffController@update');
Route::get('/staff/{id}/delete', 'StaffController@destroy'); 

Route::get('clients', 'ClientsController@index');
Route::post('/clients', 'ClientsController@store');
Route::get('/clients/{id}/edit', 'ClientsController@edit');
Route::patch('/clients/{id}','ClientsController@update');
Route::get('/clients/{id}/delete', 'ClientsController@destroy'); 

Route::get('services', 'ServiceController@index');
Route::post('services', 'ServiceController@store');
Route::get('/services/{id}/edit', 'ServiceController@edit');
Route::patch('/services/{id}','ServiceController@update');
Route::get('/services/{id}/delete', 'ServiceController@destroy'); 

Route::get('messages', 'MessageController@index'); 
Route::post('messages/contact', 'MessageController@store'); 
Route::get('{id}/delete','MessageController@destroy'); 
