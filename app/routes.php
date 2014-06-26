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

// Route::get('/', function($name)
// {

// if ($name == "resume")
//     {
//         return Redirect::to('blog.dev/resume');
//     }
//     else
//     {
//         return "Hello, $name!";
//     }
//  });   

Route::get('/resume', function()
{
	return "This is my resume"; 
});

Route::get('/portfolio', function()
{
	return "This is my portfolio"; 
});

Route::get('/', function()
{
	return "This is my home"; 
});
