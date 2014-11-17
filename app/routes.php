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
	$data = [
			'name' => 'jane',
			'email' => 'jane@doe.com',
			'location' => 'Florida',
			'last_name' => '<script>window.alert("do not trust user input!");</script>'
		];
	return View::make('hello')->withData($data);
});