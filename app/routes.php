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
Route::get('/', 'HomeController@showWelcome');

Route::resource('posts', 'PostsController');

Route::get('resume', 'HomeController@showResume');
Route::get('portfolio', 'HomeController@showPortfolio');

// 
// Route::get('/resume', function()
// {
// 	return View::make("resume"); 
// });

// Route::get('/portfolio', function()
// {
// 	return View::make("portfolio"); 
// });

// Route::get('/', function()
// {
// 	return View::make("temp.my-first-view"); 
// });

Route::get('/sayhello/{name}', 'HomeController@sayHello');

// Route::get('/roll-dice/{guess}', function($guess)
// {
// 	$randnumber = rand (1, 6); 
// 	$array = array('number'=>$randnumber,
// 					'guess'=>$guess);
// 	return View::make('temp.roll-dice')->with($array);
// });












