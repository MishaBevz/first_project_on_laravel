@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .center {
            text-align: center;
        }
    </style>

    <!--<script src="public/js/jquery-3.1.1.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#sendForm").submit(function (ev) {
                ev.preventDefault();
                $('#messageShow').hide();
                var title = $("#title").val();
                var fail="";
                if (title.length < 3) fail="Название категории должно состоять из не менее 3 символов";
                if (fail!=""){
                    $('#messageShow').html(fail)
                    $('#messageShow').show();
                    return false;
                }
                $.ajax({
                    url: '{{action('CategoriesController@store')}}',
                    type:'POST',
                    data:$('#sendForm').serialize(),
                    cache:false,
                    success: function () {
                        $("#title").val("");
                        $("#categoryBlock").append("<p>"+title+"</p>");
                        $("#categoryBlock").show();

                    }
                })

            })

        })

    </script>


</head>
<body>

<div class="center">
<form method="POST" enctype="multipart/form-data" id="sendForm" action="{{action('CategoriesController@store')}}">
    {{ csrf_field() }}
    <input type="text" name="title" id="title" placeholder="Добавить категорию">
    <input type="submit" class="btn-primary" value="Добавить" > <div id="messageShow"></div>
</form>
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
</div>
<br>
<div class="center">
<h4>Список категорий:</h4><br>
    <div id="categoryBlock">
@foreach($categories as $category)

    <p>{{$category->title}}</p>

@endforeach
    </div>
</div>
</body>
</html>
@endsection