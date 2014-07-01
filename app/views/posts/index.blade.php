@extends('layouts.master')

@section('title')
Show All Posts
@stop

@section('content')
	
    @foreach($posts as $post)
       {{{$post->title}}}<br>
       {{{$post->body}}}<br>
       <h3>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h3>
    @endforeach

    {{ $posts->links() }}

@stop