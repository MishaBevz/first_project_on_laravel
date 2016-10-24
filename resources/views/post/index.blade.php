@extends('layouts.app')

    @section('content')
        @foreach ($posts as $post):
            <h2><a href="{{action('PostController@show',['id'=>$post->id])}}"> {{ $post->title }} </a> </h2>
            <h2>{!! $post->content !!}</h2>
            <p>Published: {{ $post->created_at }}</p>
        @endforeach
    {!! $posts->render() !!}
    @endsection