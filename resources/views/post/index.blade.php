@extends('layouts.app')
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    @section('content')
        <div class="center">
        @foreach ($posts as $post):
            <h2><a href="{{action('PostController@show',['id'=>$post->id])}}"> {{ $post->title }} </a> </h2>
            <h2>{!! $post->content !!}</h2>
            <p><img src="{{ $post->image }}"> </p>
            <p>Опубликовано: {{ $post->created_at }}</p>
        <h4>Комментариев: {{$post->comments->count()}} </h4>
        @endforeach
    {!! $posts->render() !!}
        </div>
    @endsection
</body>
</html>