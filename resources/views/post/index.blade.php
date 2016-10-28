@extends('layouts.app')

    @section('content')
        @foreach ($posts as $post):
            <h2><a href="{{action('PostController@show',['id'=>$post->id])}}"> {{ $post->title }} </a> </h2>
            <h2>{!! $post->content !!}</h2>
            <p>Опубликовано: {{ $post->created_at }}</p>
        <h4>Комментариев: {{$post->comments->count()}} </h4>
        @endforeach
    {!! $posts->render() !!}

    @endsection