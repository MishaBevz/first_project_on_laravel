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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#sendForm").submit(function (ev) {
                ev.preventDefault();
                $('#messageShow').hide();
                var content = $("#content").val();
                var fail="";
                if (content.length < 5) fail="Комментарий должен состоять минимум из 5-ти символов";
                if (fail!=""){
                    $('#messageShow').html(fail)
                    $('#messageShow').show();
                    return false;
                }
                $.ajax({
                    //url: '/post/{id}',
                    type:'POST',
                    data:$('#sendForm').serialize(),
                    cache:false,
                    success: function () {
                        $("#content").val("");
                        $("#commentsBlock").append($("#comment"));

                        //$("#commentsBlock").append("<h4>"+avatar+author+created_at+content+"</h4>");
                        
                        $("#commentsBlock").show();

                    }
                })

            })

        })

    </script>
    -->
</head>
<body>
<div class="center">
@if (Auth::check())



<form action="" method="POST" id="sendForm" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}


    <div class="form-group">
        <textarea name="content" id="content" class="center"  rows="5" cols="50" placeholder="Добавить комментарий" id="content" required></textarea><br>
    </div>
    <br>
    <p>
   <input type="submit" class="btn btn-primary" value="Отправить" id="send">
    </p>
</form>
        <div id="messageShow"></div>
@else
    <h4>Только зарегистрированные пользователи могут писать комментарии. Для того, чтобы оставить комментарий к статье, пожалуйста <a href="/login">Войдите в свой профиль</a> или <a href="/register">Зарегистрируйтесь</a>. </h4>
@endif
</div>

@if(Session::has('message'))
    {{Session::get('message')}}
@endif

</body>
</html>