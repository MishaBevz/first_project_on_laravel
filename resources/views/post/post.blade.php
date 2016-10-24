@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
@section('content')
<h2>{{$post->title}}</h2>
<p>{{$post->content}}</p>
<p>{{ $post->published_at }}</p>
<br>
<br>
<br>
<h3>Комментарии:</h3>
<br>
@if($post)
@include('comments.comment')
@endif
<div class="comments">
    <ul>
        @foreach($comments as $comment)
            <li><h3>Автор: {{$comment->author}} </h3> <br> <h4>{{$comment->content}}</h4> <br> <font color="maroon"> Опубликовано: {{$comment->created_at}} </font> </li>
        @endforeach
    </ul>
</div>

@endsection