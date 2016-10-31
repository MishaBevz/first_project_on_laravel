@extends('layouts.app')
@section('content')
    @if (Auth::Check())
        @if(Auth::user()->id == 1)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Новая статья</div>
                <div class="panel-body">
<form class="form-horizontal" method="POST" enctype="multipart/form-data" >
    {{ csrf_field() }}

    Заголовок:<br>
    <input type="text" class="form-control" name="title" required>
    @if($errors->has('title'))
        {!! $errors->first('title') !!}
    @endif
    <br>
    Slug:<br>
    <input type="text" class="form-control" name="slug" required>
    @if($errors->has('slug'))
        {!! $errors->first('slug') !!}
    @endif
    <br>
    Превью:<br>
    <input type="text" class="form-control" name="excerpt" required>
    @if($errors->has('excerpt'))
        {!! $errors->first('excerpt') !!}
    @endif
    <br>
    Добавить изображение:<br>
    <input type="file" class="form-control" name="image">
    @if($errors->has('image'))
        {!! $errors->first('image') !!}
    @endif
    <br>
    Текст статьи:<br>
    <textarea type="text" class="form-control" name="content" required></textarea>
    @if($errors->has('content'))
        {!! $errors->first('content') !!}
    @endif
    <br>
    Опубликовать?<br>
    <select name="published">
        <option value="1">Да</option>
        <option value="0">Нет</option>
    </select>
    <input type="submit" value="Отправить" class="btn btn-primary">
</form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
        @else
            <h4>Not found</h4>
        @endif
    @else
        <h4>Not found</h4>
    @endif
@endsection

