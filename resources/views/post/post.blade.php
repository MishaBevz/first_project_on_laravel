@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
@section('content')
<h2>{{$post->title}}</h2>
<h4>{!! $post->content !!}</h4>
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
        @endforeach
    </ul>
</div>

@endsection