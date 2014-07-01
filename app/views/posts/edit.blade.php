@extends('layouts.master')

@section('title')
	Create a Post
@stop

@section('content')

	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

	
		{{ Form::label('title', 'Title') }}		
		{{ Form::text('title') }}

		{{ Form::label('body', 'Post Content') }}		
		{{ Form::textarea('body', null, array('rows'=>2, 'cols'=>15)) }}

		<p>
			<button type="submit">Submit</button>
		</p>
	{{ Form::close() }}		

@stop