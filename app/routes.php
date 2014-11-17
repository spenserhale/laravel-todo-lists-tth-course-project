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

Route::get('/', function()
{
    $data = ['name' => 'jane', 'email' => 'jane@doe.com'];
    return View::make('hello')->with($data);
});

Route::get('/hello/{name?}', function($name)
{
    return View::make('hello')->with('name', $name);
});