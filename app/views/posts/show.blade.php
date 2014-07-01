@extends('layouts.master')

@section('title')
Show All Posts
@stop

@section('content')
  
    <p>{{{$post->title}}}</p>
    <p>{{{$post->body}}}</p>
    
@stop