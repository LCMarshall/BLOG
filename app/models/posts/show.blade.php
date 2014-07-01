@extends('layouts.master')

@section('title')
Show All Posts
@stop

@section('content')
	$post = Post::find(1);

    foreach ($posts as $post) {
        echo $post->title . "<br>";
        echo $post->body . "<br>"; -->

@stop