@extends('layouts.master')

@section('title')
	
	@if (isset($post))
		Edit Post
	@else
		Create Post
	@endif
@stop

@section('content')

	@if (isset($post))
		<h1>Edit Post</h1>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	@else
		<h1>Add Post</h1>
		{{ Form::open(array('action'=>'PostsController@store')) }}
	@endif
	
		{{ Form::label('title', 'Title') }}		
		{{ Form::text('title') }}
		{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}

		{{ Form::label('body', 'Post Content') }}		
		{{ Form::textarea('body', null, array('rows'=>2, 'cols'=>15)) }}
		{{ $errors->first('body', '<span class="help-block">:message</span><br>') }}

		<p>
			<button type="submit">Submit</button>
		</p>
	{{ Form::close() }}		

@stop