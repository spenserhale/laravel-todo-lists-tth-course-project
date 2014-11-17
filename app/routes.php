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

Route::get('/', 'TodoListController@index');
Route::resource('todos', 'TodoListController');

// Event::listen('illuminate.query', function($query){
// 	var_dump($query);
// });