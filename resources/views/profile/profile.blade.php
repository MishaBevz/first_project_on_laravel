@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <img src="/img/avatar/{{ $user->avatar }}" style="width:150px;height:150px; float:left; border-radius:50%; margin-right:25px;">
                    <h2>{{ $user->name }}'s Profile</h2>
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        {{ csrf_field() }}
                        <label>Обновить аватар профиля</label>
                        <input type="file" name="avatar"><br>
                        <input type="submit" class="pull_right btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection