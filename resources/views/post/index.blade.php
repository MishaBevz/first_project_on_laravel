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
    <!--<link href="/css/bootstrap.css" rel="stylesheet">-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    @section('content')
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-4 col-md-offset-1">
                    <h3>Категории:</h3><br>
                    @foreach($categories as $category)

                        <ul>
                            <li>
                                <h4> {{$category->title}} </h4>
                                @foreach($posts_for_categories as $post_category)
                                    @if($category->id == $post_category->category_id)
                                        <ul>
                                            <li>
                                                <p><a href="{{action('PostController@show',['id'=>$post_category->id])}}">{{$post_category->title}}</a></p>
                                            </li>
                                        </ul>
                                    @endif
                                @endforeach
                            </li>
                        </ul>

                    @endforeach
                </div>
            </div>
            <div class="col-md-8">

        @foreach ($posts as $post)

            <h2><a href="{{action('PostController@show',['id'=>$post->id])}}"> {{ $post->title }} </a> </h2>
            <h2>{!! $post->content !!}</h2>
            <p><img src="{{ $post->image }}"> </p>
            <p>Опубликовано: {{ $post->created_at }}</p>
        <h4>Комментариев: {{$post->comments->count()}} </h4>
        @endforeach
            {!! $posts->render() !!}
            </div>
            <div class="col-md-4"></div>


        </div>
    @endsection
</body>
</html>