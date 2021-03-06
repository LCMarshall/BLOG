@extends('layouts.master')

@section('title')
	Create a Post
@stop

@section('content')
	@if ($errors->has('title'))
		{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
		{{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
	@endif	

	{{ Form::open(array('action'=>'PostsController@store')) }}
	
		{{ Form::label('title', 'Title') }}		
		{{ Form::text('title') }}

		{{ Form::label('body', 'Post Content') }}		
		{{ Form::textarea('body', null, array('rows'=>2, 'cols'=>15)) }}

		<p>
			<button type="submit">Submit</button>
		</p>
	{{ Form::close() }}		

@stop