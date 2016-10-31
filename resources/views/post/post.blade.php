@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        .center {
         text-align: center;
        }
    </style>
</head>

@section('content')
<div class="center">
<h2>{{$post->title}}</h2>
<h4>{!! $post->content !!}</h4>
<p><img src="{{ $post->image }}"></p>
<h4>{{ $post->published_at }}</h4>
<br>
<br>
<br>
<h3>Комментарии({{$post->comments->count()}})</h3>
<br>
@if($post)
@include('comments.comment')
@endif
<div class="comments">
    <ul>
        @foreach($comments as $comment)
            <h4>{{$comment->author}}  <em><font color="maroon"> {{$comment->created_at}} </font> </em> </h4> <br> <h4>{{$comment->content}}</h4> <br>
            <hr color="red">
            </hr>

        @endforeach
    </ul>
</div>
</div>
@endsection
