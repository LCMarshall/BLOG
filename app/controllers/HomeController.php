<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return Redirect::action("HomeController@sayHello", ['Codeup']);
	}

	public function showResume() {

		return View::make("resume");
	}

	public function showPortfolio() {
		// Return current route
		$data = ['route' => Route::getCurrentRoute()->getPath()];
		return View::make("portfolio")->with($data); 
	}

	public function sayHello($name)
	{	
	    if ($name == "Chris")
	    {
	        return Redirect::to('/');
	    }
	    else
	    {
	        return View::make('temp.my-first-view')->with('name', $name);
	    }
	}

}
