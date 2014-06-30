@extends('layouts.master')

@section('title')
Create a Post
@stop

@section('content')
<form method="POST" action={{{ action('PostsController@store') }}}>
		    <p>
		    	<label for="title">Post Title:</label>
		    	<input type="text" id="title" name="title" 
		    	value="{{{ Input::old('title') }}}">
		    </p>
		    <p>
		    	<label for="body">Post Content:</label>
		    	<textarea id="body" name="body">{{{ Input::old('body') }}}</textarea>
		    </p>
		    <p>
			    <button type="submit">Submit</button>
			</p>

@stop