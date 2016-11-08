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
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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

<div class="comments">
    <ul>
        <div id="commentsBlock">
        @foreach($comments as $comment)

            <hr color="red">
            <li class="dropdown">

            @foreach($users as $user)

                @if($comment->user_id == $user->id)
                <div id="comment">
                <h4><img src="/img/avatar/{{ $user->avatar }}" style="width:50px;height:50px;  top:10px; left:10px; border-radius:50%">  {{$comment->author}} <em><font color="maroon"> {{$comment->created_at}} </font> </em> </h4> <br> <h4>{{$comment->content}}</h4> <br>
                </div>
                @endif

            @endforeach

            <hr color="red">
            </hr>
            </li>

        @endforeach
        </div>
    </ul>
@if (Auth::check())
    @if($post)
        @include('comments.comment')
    @endif
@else
    <h4>Только зарегистрированные пользователи могут писать комментарии. Для того, чтобы оставить комментарий к статье, пожалуйста <a href="/login">Войдите в свой профиль</a> или <a href="/register">Зарегистрируйтесь</a>. </h4>
@endif
</div>
</div>

@endsection
