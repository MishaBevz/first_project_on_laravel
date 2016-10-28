
@if (Auth::check())
<form method="POST">
    Ваше имя:<br>
    <input type="text" name="author"><br>
    Ваш email:<br>
    <input type="text" name="email"><br>
    Ваше сообщение:<br>
    <textarea name="content"></textarea><br>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="Отправить">
</form>
@else
    <h4>Только зарегистрированные пользователи могут писать комментарии. Для того, чтобы оставить комментарий к статье, пожалуйста <a href="/login">Войдите в свой профиль</a> или <a href="/register">Зарегистрируйтесь</a>. </h4>
@endif




@if(Session::has('message'))
    {{Session::get('message')}}
@endif
