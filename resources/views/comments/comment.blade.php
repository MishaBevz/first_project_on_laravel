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
<body>
<div class="center">
@if (Auth::check())

<h3>Добавить комментарий</h3>
    <p>Ваш e-mail не будет опубликован.Обязательные поля помечены *</p>

<form method="POST" class="form-horizontal">
    {{ csrf_field() }}


    <div class="form-group">
        <textarea name="content" class="center" placeholder="Комментарий*" required></textarea><br>
    </div>
    <br>
    <div class="form-group">
    <input type="text" class="center" name="author" placeholder="Имя*" required><br>
    </div>
    <br>
    <div class="form-group">
    <input type="text" class="center" name="email" placeholder="E-mail*" required><br>
    </div>
    <br>
    <div class="form-group">
        <input type="text" class="center" name="site" placeholder="Сайт" ><br>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="Отправить">
</form>



@else
    <h4>Только зарегистрированные пользователи могут писать комментарии. Для того, чтобы оставить комментарий к статье, пожалуйста <a href="/login">Войдите в свой профиль</a> или <a href="/register">Зарегистрируйтесь</a>. </h4>
@endif
</div>



@if(Session::has('message'))
    {{Session::get('message')}}
@endif

</body>
</html>