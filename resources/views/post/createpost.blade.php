@extends('layouts.app')
@section('content')
<form method="POST" enctype="multipart/form-data" >

    Заголовок:<br>
    <input type="text" name="title"><br>
    Slug:<br>
    <input type="text" name="slug"><br>
    Превью:<br>
    <input type="text" name="excerpt"><br>
    Текст статьи:<br>
    <input type="text" name="content"><br>
    Опубликовать?<br>
    <select name="published">
        <option value="1">Да</option>
        <option value="0">Нет</option>
    </select>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="Отправить">
</form>
@endsection

