@extends('layouts.master')

@section('title')
Show All Posts
@stop

@section('content')
  	
    <p>{{{$post->title}}}</p>
    <h3>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h3>
    <p>{{{$post->body}}}</p>
    
@stop