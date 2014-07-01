@extends('layouts.master')

@section('title')
Show All Posts
@stop

@section('content')

    @foreach($posts as $post)
       {{{$post->title}}}<br>
       {{{$post->body}}}<br>
    @endforeach

@stop