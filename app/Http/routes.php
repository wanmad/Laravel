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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'TicketsController@create');
Route::get('/home', 'PagesController@home');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');

Route::get('/users/register','Auth\AuthController@getRegister');
Route::post('/users/register','Auth\AuthController@postRegister');

Route::get('/users/logout','Auth\AuthController@getLogout');

Route::get('/users/login','Auth\AuthController@getLogin');
Route::post('/users/login','Auth\AuthController@postLogin');

Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');
Route::post('/comment', 'CommentsController@newComment');


Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
	Route::get('/', 'PagesController@home');
	
	Route::get('users', 'UsersController@index');
	Route::get('users/{id?}/edit', 'UsersController@edit');
	Route::post('users/{id?}/edit','UsersController@update');
	
	
	Route::get('roles', 'RolesController@index');
	Route::get('roles/create', 'RolesController@create');
	Route::post('roles/create', 'RolesController@store');
	
	
});


Route::get('sendemail', function () {
    $data = array(
        'name' => "Learning Laravel",
);
Mail::send('emails.welcome', $data, function ($message) {
        $message->from('wanmad@gmail.com', 'Learning Laravel');
        $message->to('wanmad@me.com')->subject('Learning Laravel test email'); });
return "Your email has been sent successfully"; });
